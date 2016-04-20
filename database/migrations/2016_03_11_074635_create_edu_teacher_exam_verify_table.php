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

class CreateEduTeacherExamVerifyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_teacher_exam_verify', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('examyuan_id')->unsigned()->default(0);
			$table->char('user_id', 18)->default('');
			$table->integer('stage_gid')->default(0);
			$table->integer('subject_gid')->default(0);
			$table->string('stage_name', 45)->default('');
			$table->string('subject_name', 45)->default('');
			$table->dateTime('datetime')->default('0000-00-00 00:00:00');
			$table->integer('stage_fgid')->default(1);
			$table->boolean('isdefault')->nullable()->default(0);
			$table->unique(['user_id','stage_gid','subject_gid'], 'user_stage_subject_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_teacher_exam_verify');
	}

}
