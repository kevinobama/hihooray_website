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

class CreateEduPassportStudentLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_student_log', function(Blueprint $table)
		{
			$table->char('user_id', 18)->default('')->unique('user_id');
			$table->char('regip', 15)->default('');
			$table->dateTime('lastlogin')->default('0000-00-00 00:00:00');
			$table->string('version', 30)->default('');
			$table->dateTime('logintime')->default('0000-00-00 00:00:00');
			$table->dateTime('logouttime')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_student_log');
	}

}
