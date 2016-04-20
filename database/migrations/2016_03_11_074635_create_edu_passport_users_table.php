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

class CreateEduPassportUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_users', function(Blueprint $table)
		{
			$table->char('user_id', 18)->default('')->unique('user_id_UNIQUE');
			$table->char('user_number', 15)->default('');
			$table->string('telephone', 60)->default('')->index('telephone');
			$table->string('username', 40)->default('')->index('username');
			$table->string('email', 30)->default('');
			$table->char('upassword', 64)->default('');
			$table->boolean('pwsafety')->default(1);
			$table->dateTime('regdate')->default('0000-00-00 00:00:00');
			$table->boolean('avatarstatus')->default(0);
			$table->boolean('group_id')->default(0);
			$table->smallInteger('area_id')->unsigned()->nullable();
			$table->integer('school_id')->default(0);
			$table->boolean('grade')->nullable();
			$table->smallInteger('attr_id')->unsigned()->default(0);
			$table->boolean('xstatus')->default(1);
			$table->char('FormUserId', 40)->nullable();
			$table->string('GradeName', 80)->nullable();
			$table->boolean('user_source')->nullable()->default(0);
			$table->smallInteger('xtype')->unsigned()->default(0);
			$table->boolean('status')->nullable()->default(0);
			$table->boolean('type')->nullable()->default(0);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_users');
	}

}
