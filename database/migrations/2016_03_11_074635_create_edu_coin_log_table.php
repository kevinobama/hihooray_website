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

class CreateEduCoinLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_coin_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default(0)->index('ec_user_id');
			$table->string('order_id', 64)->nullable()->default('');
			$table->boolean('order_type')->nullable()->default(0);
			$table->integer('nums')->nullable()->default(0);
			$table->boolean('type')->nullable()->default(0);
			$table->string('remark', 200)->nullable()->default('');
			$table->text('detail', 65535)->nullable();
			$table->boolean('status')->nullable()->default(2);
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
		Schema::drop('edu_coin_log');
	}

}
