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

class CreateEduMicroclassAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_microclass_attachment', function(Blueprint $table)
		{
			$table->increments('micro_id');
			$table->string('microclass_name', 100)->default('');
			$table->char('user_id', 18)->default('')->index('user_id');
			$table->string('realname', 20)->nullable();
			$table->smallInteger('stage_id')->default(0);
			$table->string('stagename', 20)->default('');
			$table->smallInteger('grade_id')->default(0);
			$table->string('gradename', 20)->default('');
			$table->smallInteger('course_id')->unsigned()->default(0);
			$table->string('coursename', 20)->default('');
			$table->smallInteger('price')->unsigned()->default(0);
			$table->string('description')->default('');
			$table->dateTime('create_time')->default('0000-00-00 00:00:00');
			$table->dateTime('update_time')->default('0000-00-00 00:00:00');
			$table->string('vedio_url')->default('');
			$table->string('file_name')->default('');
			$table->string('filesize')->default('');
			$table->boolean('readperm')->default(0);
			$table->string('vedio_small_image')->default('');
			$table->string('vedio_middle_image')->default('');
			$table->string('vedio_big_image')->default('');
			$table->boolean('free')->default(0);
			$table->boolean('publish')->default(0);
			$table->boolean('xstatus')->default(1);
			$table->boolean('isauth')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_microclass_attachment');
	}

}
