<?php
/**
 * Created by Aptana studio.
 * Author: Kevin Henry Gates III at Hihooray,Inc
 * Date: 2016/03/11
 * Time: 15:07 
 * Email: zhouwensheng@hihooray.com
 * migration
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEduPassportUploadAudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_upload_audio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default(0);
			$table->string('file_key')->default('');
			$table->string('file_hash', 60)->default('');
			$table->string('file_fname')->default('');
			$table->string('file_ext', 50)->default('');
			$table->integer('file_size')->default(0);
			$table->boolean('file_from')->default(0);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->timestamp('updatetime')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_upload_audio');
	}

}
