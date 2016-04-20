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

class CreateEduOnlineCoursesSectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_online_courses_section', function(Blueprint $table)
		{
			$table->integer('section_id', true);
			$table->integer('course_id')->nullable();
			$table->string('title', 100);
			$table->timestamp('start_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('end_time')->nullable()->default('0000-00-00 00:00:00');
			$table->dateTime('update_time')->nullable()->default('0000-00-00 00:00:00');
			$table->dateTime('create_time')->nullable()->default('0000-00-00 00:00:00');
			$table->string('file')->default('');
			$table->string('schedule_id', 60)->nullable()->default('0');
			$table->boolean('status')->nullable()->default(0);
			$table->integer('section_order')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_online_courses_section');
	}

}
