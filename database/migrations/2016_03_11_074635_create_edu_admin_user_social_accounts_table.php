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

class CreateEduAdminUserSocialAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_admin_user_social_accounts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable()->index('fk_user_account');
			$table->string('provider');
			$table->string('client_id');
			$table->text('data', 65535)->nullable();
			$table->string('code', 32)->nullable()->unique('account_unique_code');
			$table->integer('created_at')->nullable();
			$table->string('email')->nullable();
			$table->string('username')->nullable();
			$table->unique(['provider','client_id'], 'account_unique');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_admin_user_social_accounts');
	}

}
