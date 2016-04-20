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

class CreateEduAdminPushlogDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_admin_pushlog_detail', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('msgid')->default(0);
			$table->char('user_id', 18)->default(0)->index('eap_user_id');
			$table->string('username', 30)->default('');
			$table->string('realname', 30)->default('');
			$table->boolean('group_id')->default(0);
			$table->timestamp('createtime')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_admin_pushlog_detail');
	}

}
