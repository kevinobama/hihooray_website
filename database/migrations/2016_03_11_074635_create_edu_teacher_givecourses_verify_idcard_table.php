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

class CreateEduTeacherGivecoursesVerifyIdcardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_teacher_givecourses_verify_idcard', function(Blueprint $table)
		{
			$table->char('user_id', 18)->unique('user_id');
			$table->string('realname', 15)->default('')->index('verify1');
			$table->string('id_card', 20)->default('');
			$table->string('idcard_head')->default('');
			$table->string('idcard_front')->default('');
			$table->string('idcard_back')->default('');
			$table->boolean('flag')->default(0);
			$table->dateTime('datetime')->default('0000-00-00 00:00:00');
			$table->dateTime('verify_time')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_teacher_givecourses_verify_idcard');
	}

}
