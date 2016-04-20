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

class CreateEduSmsLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_sms_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 100)->default('');
			$table->string('uid', 18)->default('');
			$table->boolean('version')->default(0);
			$table->timestamp('datetime')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('status_code', 45)->nullable()->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_sms_log');
	}

}
