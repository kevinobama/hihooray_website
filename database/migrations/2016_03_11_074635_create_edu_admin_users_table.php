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

class CreateEduAdminUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_admin_users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username')->unique('user_unique_username');
			$table->string('email')->unique('user_unique_email');
			$table->string('password_hash', 60);
			$table->string('auth_key', 32);
			$table->integer('confirmed_at')->nullable();
			$table->string('unconfirmed_email')->nullable();
			$table->integer('blocked_at')->nullable();
			$table->string('registration_ip', 45)->nullable();
			$table->integer('created_at');
			$table->integer('updated_at');
			$table->integer('flags')->default(0);
			$table->smallInteger('status')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_admin_users');
	}

}
