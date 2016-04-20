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

class CreateEduTeacherGivecoursesVerifyTeachingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_teacher_givecourses_verify_teaching', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('user_id', 18);
			$table->smallInteger('stages_id')->unsigned()->default(0);
			$table->string('stages_name', 45)->default('');
			$table->smallInteger('subjects_id')->unsigned()->default(0);
			$table->string('subjects_name', 45)->default('');
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->boolean('is_recommend')->default(0);
			$table->string('user_name', 50)->default('');
			$table->boolean('flag')->default(0);
			$table->dateTime('verify_time')->default('0000-00-00 00:00:00');
			$table->boolean('rathing')->default(1);
			$table->boolean('is_rathing')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_teacher_givecourses_verify_teaching');
	}

}
