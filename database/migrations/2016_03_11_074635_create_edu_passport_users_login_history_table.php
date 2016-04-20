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

class CreateEduPassportUsersLoginHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_users_login_history', function(Blueprint $table)
		{
			$table->char('user_id', 20)->default('');
			$table->timestamp('login_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('ip', 20)->nullable();
			$table->string('ua', 200)->nullable();
			$table->primary(['user_id','login_at']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_users_login_history');
	}

}
