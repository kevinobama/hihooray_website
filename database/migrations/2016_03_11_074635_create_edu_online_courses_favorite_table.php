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

class CreateEduOnlineCoursesFavoriteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_online_courses_favorite', function(Blueprint $table)
		{
			$table->increments('favorite_id');
			$table->integer('course_id')->unsigned()->default(0);
			$table->char('user_id', 18)->default(0);
			$table->timestamp('createtime')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->unique(['course_id','user_id'], 'course_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_online_courses_favorite');
	}

}
