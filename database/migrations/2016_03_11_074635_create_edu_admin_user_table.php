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

class CreateEduAdminUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_admin_user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 128);
			$table->string('password', 128);
			$table->string('email', 128);
			$table->text('profile', 65535)->nullable();
			$table->smallInteger('status');
			$table->string('password_hash', 200);
			$table->string('password_reset_token', 50);
			$table->string('auth_key', 50);
			$table->integer('created_at')->nullable();
			$table->integer('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_admin_user');
	}

}
