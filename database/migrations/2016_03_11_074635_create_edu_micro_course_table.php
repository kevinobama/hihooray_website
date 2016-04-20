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

class CreateEduMicroCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_micro_course', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100)->default('');
			$table->char('user_id', 18)->default('')->index('user_id');
			$table->string('realname', 20)->nullable();
			$table->integer('video_id')->nullable();
			$table->integer('stage_id')->default(0);
			$table->string('stagename', 20)->default('');
			$table->integer('grade_id')->default(0);
			$table->string('gradename', 20)->default('');
			$table->integer('course_id')->unsigned()->default(0);
			$table->string('coursename', 20)->default('');
			$table->smallInteger('price')->unsigned()->default(0);
			$table->string('description')->default('');
			$table->dateTime('create_time')->default('0000-00-00 00:00:00');
			$table->dateTime('update_time')->default('0000-00-00 00:00:00');
			$table->string('video_url')->default('');
			$table->string('video_small_image')->default('');
			$table->string('video_middle_image')->default('');
			$table->string('video_big_image')->default('');
			$table->string('video_duration', 20)->nullable()->default('00:00');
			$table->text('content', 65535)->nullable();
			$table->boolean('free')->default(0);
			$table->boolean('publish')->default(0);
			$table->boolean('xstatus')->default(1);
			$table->boolean('isauth')->nullable()->default(0);
			$table->string('persistentId', 120)->nullable();
			$table->boolean('isfop')->nullable()->default(0);
			$table->dateTime('authtime')->nullable()->default('0000-00-00 00:00:00');
			$table->integer('school_id')->nullable()->default(0);
			$table->boolean('access')->nullable()->default(0);
			$table->bigInteger('viewnums')->nullable()->default(1);
			$table->bigInteger('favnums')->nullable()->default(0);
			$table->bigInteger('buynums')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_micro_course');
	}

}
