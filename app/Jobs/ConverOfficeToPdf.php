<?php
/**
 * Created by Aptana studio.
 * Author: Kevin Henry Gates III at Hihooray,Inc
 * Date: 2016/03/23
 * Time: 15:07
 * Email: zhouwensheng@hihooray.com
 * convert office to pdf the queue
 */
namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Config;

class ConverOfficeToPdf extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    private $teacherFile;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($teacherFile)
    {
        $this->teacherFile = $teacherFile;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $officeFilePath = storage_path(). '/app/public/office/'. $this->teacherFile->inputKey;
        $pdfOutputFilePath = storage_path(). '/app/public/pdf/';
        $script = "export HOME=/tmp/ && libreoffice --headless  --convert-to pdf --outdir {$pdfOutputFilePath} {$officeFilePath}";
        $convertMsessage = shell_exec($script);

        //upload pdf
        $accessKey = Config::get('hihooray.qiniu.accessKey');
        $secretKey = Config::get('hihooray.qiniu.secretKey');

        $auth = new Auth($accessKey, $secretKey);
        $bucket = Config::get('hihooray.hooray-teacher-files.bucket');
        $token = $auth->uploadToken($bucket);
        list($fileName, $extension) = explode(".", $this->teacherFile->inputKey);
        $filePath = $pdfOutputFilePath.$fileName.".pdf";
        $key = $fileName.'.pdf';
        $uploadMgr = new UploadManager();

        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);

        $pdfInfo=json_decode(file_get_contents(Config::get('hihooray.hooray-teacher-files.url').$key.'?odconv/png/info'));

        $this->teacherFile->itemsKey = $ret["key"];
        $this->teacherFile->hash = $ret["hash"];
        $this->teacherFile->inputBucket = $bucket;
        $this->teacherFile->description = json_encode(array($convertMsessage, $err, $ret), JSON_UNESCAPED_UNICODE);
        $this->teacherFile->page_num = $pdfInfo->page_num;

        $this->teacherFile->save();

        //delete office file
        unlink($officeFilePath);
        //delete pdf file
        unlink($pdfOutputFilePath.$key);

        echo($convertMsessage." \n");
    }
}
