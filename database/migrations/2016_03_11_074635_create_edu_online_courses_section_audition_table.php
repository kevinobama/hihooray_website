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

class CreateEduOnlineCoursesSectionAuditionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_online_courses_section_audition', function(Blueprint $table)
		{
			$table->increments('audition_id');
			$table->integer('course_id')->unsigned()->default(0);
			$table->integer('section_id')->unsigned()->default(0);
			$table->char('user_id', 18)->nullable()->default(0);
			$table->integer('create_time')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_online_courses_section_audition');
	}

}
