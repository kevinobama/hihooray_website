<?php
/**
 * Created by Aptana studio.
 * Author: Kevin Henry Gates III at Hihooray,Inc
 * Date: 2016/03/25
 * Time: 15:07
 * Email: zhouwensheng@hihooray.com
 * Teacher Files Helper
 */
namespace App\Helpers;

class TeacherFilesHelper
{
    /**
     * get Icon By Extension
     * @param $fileFullName
     * @return string
     */
    public static function getIconByExtension($fileFullName)
    {
        $iconImage = "images/Question-Mark.gif";
        if ($fileFullName) {
            list($fileName, $extension) = explode(".", $fileFullName);
            switch ($extension) {
                case "doc":
                case "docx":
                    $iconImage = "images/hihooray-MS-Word-2.ico";
                    break;
                case "ppt":
                    $iconImage = "images/hihooray-PowerPoint.ico";
                    break;
                case "pdf":
                    $iconImage = "images/hihooray-Adobe-PDF-Document.ico";
                    break;
                default:
                    $iconImage = "images/Question-Mark.gif";
            }
        }
        return $iconImage;
    }
}