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

class CreateEduOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('order_id', 60)->index('o_order_id');
			$table->char('user_id', 18)->default(0)->index('o_user_id');
			$table->string('username', 60)->default('');
			$table->boolean('type')->nullable()->default(0);
			$table->boolean('status')->default(0)->index('o_status');
			$table->integer('total_price')->default(0);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->timestamp('updatetime')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_order');
	}

}
