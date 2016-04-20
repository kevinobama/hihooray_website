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

class CreateEduOnlineCoursesSectionCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_online_courses_section_comment', function(Blueprint $table)
		{
			$table->increments('comment_id');
			$table->integer('section_id')->nullable();
			$table->integer('course_id')->nullable();
			$table->char('student_id', 18);
			$table->string('student_name', 40)->default('');
			$table->char('teacher_id', 18);
			$table->string('teacher_name', 40)->nullable()->default('');
			$table->string('title', 100)->default('');
			$table->string('content')->default('');
			$table->string('rating', 45)->default('');
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('create_time')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_online_courses_section_comment');
	}

}
