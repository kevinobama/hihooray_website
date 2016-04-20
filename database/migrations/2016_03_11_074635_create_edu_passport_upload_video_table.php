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

class CreateEduPassportUploadVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_upload_video', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default(0);
			$table->string('source_file')->nullable();
			$table->string('file_key')->default('');
			$table->string('file_hash', 60)->default('');
			$table->string('file_fname')->default('');
			$table->string('file_cover')->default('');
			$table->string('file_ext', 50)->default('');
			$table->string('file_duration', 20)->nullable()->default('00:00');
			$table->integer('file_size')->default(0);
			$table->boolean('file_from')->default(0);
			$table->string('persistentId', 120)->nullable();
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
		Schema::drop('edu_passport_upload_video');
	}

}
