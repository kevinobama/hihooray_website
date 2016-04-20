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

class CreateEduRechargeValidateinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_recharge_validateinfo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('hash', 64)->nullable()->default('0');
			$table->text('code', 65535)->nullable();
			$table->boolean('delflg')->nullable()->default(0);
			$table->string('transaction_id', 64)->nullable()->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_recharge_validateinfo');
	}

}
