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

class CreateEduMicroCourseCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_micro_course_comment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent_id')->unsigned()->default(0);
			$table->integer('micro_id')->unsigned()->default(0);
			$table->char('user_id', 18)->default('');
			$table->string('title', 100)->default('');
			$table->string('content')->default('');
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
		Schema::drop('edu_micro_course_comment');
	}

}
