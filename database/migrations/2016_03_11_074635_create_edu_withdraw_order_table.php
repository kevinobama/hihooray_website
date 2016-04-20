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

class CreateEduWithdrawOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_withdraw_order', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('order_id', 64)->nullable()->default('0')->index('wd_order_id');
			$table->char('user_id', 18)->nullable()->default(0)->index('wd_user_id');
			$table->string('username', 50)->nullable();
			$table->string('bank_name', 50)->nullable();
			$table->string('cardno', 40)->nullable();
			$table->float('total_price')->nullable()->default(0.00);
			$table->integer('coin')->nullable()->default(0);
			$table->boolean('status')->nullable()->default(0);
			$table->dateTime('createtime')->nullable()->default('0000-00-00 00:00:00');
			$table->timestamp('updatetime')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_withdraw_order');
	}

}
