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

class CreateEduCommonCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_comment', function(Blueprint $table)
		{
			$table->increments('comment_id');
			$table->integer('comment_style')->unsigned()->default(0);
			$table->integer('target')->nullable();
			$table->char('student_id', 18)->default('');
			$table->string('student_name', 40)->default('');
			$table->char('teacher_id', 18)->default('');
			$table->string('teacher_name', 40)->nullable()->default('');
			$table->string('title', 100)->default('');
			$table->string('content')->default('');
			$table->string('rating', 45)->default('');
			$table->boolean('comment_rating')->nullable()->default(5);
			$table->string('describe_teacher', 20)->nullable()->default('');
			$table->dateTime('update_time')->default('0000-00-00 00:00:00');
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
		Schema::drop('edu_common_comment');
	}

}
