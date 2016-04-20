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

class CreateEduTeacherExamyuanVerifyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_teacher_examyuan_verify', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default('')->unique('idx_edu_teacher_examyuan_verify_user_id');
			$table->string('username', 45)->default('');
			$table->string('examyuan_name', 45)->default('')->unique('examyuan_name_UNIQUE');
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->boolean('flag')->default(1);
			$table->integer('exam_num')->unsigned()->default(0);
			$table->integer('hits')->unsigned()->default(0);
			$table->integer('examer_num')->unsigned()->default(0);
			$table->string('images')->default('');
			$table->boolean('display')->default(1);
			$table->smallInteger('order')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_teacher_examyuan_verify');
	}

}
