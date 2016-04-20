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

class CreateEduPassportTeacherInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_teacher_info', function(Blueprint $table)
		{
			$table->char('user_id', 18)->unique('user_id');
			$table->string('realname', 30)->default('');
			$table->string('nickname', 40)->default('');
			$table->string('gender')->default('男');
			$table->boolean('birthmonth')->default(0);
			$table->smallInteger('birthyear')->unsigned()->default(0);
			$table->boolean('birthday')->default(0);
			$table->string('resideprovince')->default('');
			$table->string('residecity')->default('');
			$table->string('residedist')->default('');
			$table->string('residecommunity')->default('');
			$table->string('residesuite')->default('');
			$table->char('telephone', 20)->default('');
			$table->string('education')->default('');
			$table->text('profile', 65535)->nullable();
			$table->string('avatar')->default('');
			$table->text('characteristics', 65535)->nullable();
			$table->string('SchoolName', 60)->nullable()->default('');
			$table->string('GradeName', 60)->nullable()->default('');
			$table->string('idcard', 45)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_teacher_info');
	}

}
