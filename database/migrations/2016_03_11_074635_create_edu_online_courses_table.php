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

class CreateEduOnlineCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_online_courses', function(Blueprint $table)
		{
			$table->integer('course_id', true);
			$table->string('title', 40)->default('');
			$table->integer('discount')->default(8);
			$table->integer('course_price')->unsigned()->default(0);
			$table->integer('price')->unsigned()->default(0);
			$table->string('rating', 10)->default('0');
			$table->integer('ratingNum')->unsigned()->default(0);
			$table->string('tags', 200)->default('');
			$table->integer('courses_audition_time')->default(0);
			$table->string('smallPicture', 200)->default('');
			$table->string('middlePicture', 200)->default('');
			$table->string('largePicture', 200)->default('');
			$table->char('teacher_id', 18)->nullable();
			$table->string('teacherName', 40)->default('');
			$table->integer('teacher_rating')->default(0);
			$table->boolean('recommended')->default(0);
			$table->timestamp('recommendedTime')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('hitNum')->unsigned()->default(0);
			$table->boolean('free')->default(1);
			$table->integer('education_id')->default(0);
			$table->string('educationName', 40)->nullable()->default('');
			$table->integer('subject_id')->default(0);
			$table->string('subjectName', 40)->default('');
			$table->integer('grade_id')->default(0);
			$table->string('gradeName', 40)->nullable()->default('');
			$table->text('course_introduce', 65535)->nullable();
			$table->dateTime('startTime')->default('0000-00-00 00:00:00');
			$table->dateTime('endTime')->default('0000-00-00 00:00:00')->index('endtime');
			$table->dateTime('update_time')->default('0000-00-00 00:00:00');
			$table->dateTime('create_time')->default('0000-00-00 00:00:00');
			$table->char('room', 40)->nullable();
			$table->integer('orderNum')->nullable()->default(0);
			$table->string('course_logo')->default('1');
			$table->integer('status')->default(0);
			$table->integer('sectionNumber')->default(0);
			$table->smallInteger('Positive')->default(0);
			$table->integer('section_long')->default(0);
			$table->smallInteger('Moderate')->default(0);
			$table->smallInteger('Negative')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_online_courses');
	}

}
