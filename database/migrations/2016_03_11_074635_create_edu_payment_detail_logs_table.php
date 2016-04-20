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

class CreateEduPaymentDetailLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_payment_detail_logs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('order_id', 64)->nullable();
			$table->string('trade_no', 64)->nullable();
			$table->string('gateway', 30)->nullable();
			$table->text('content', 65535);
			$table->dateTime('created_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_payment_detail_logs');
	}

}
