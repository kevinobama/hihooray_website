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

class CreateEduAskDissentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_ask_dissent', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('reason', 65535)->nullable();
			$table->dateTime('add_time')->default('0000-00-00 00:00:00');
			$table->integer('order_id')->default(0)->index('order_id');
			$table->boolean('solve_id')->default(3);
			$table->dateTime('solve_time')->default('0000-00-00 00:00:00');
			$table->integer('question_id')->default(0);
			$table->text('results', 65535)->nullable();
			$table->boolean('status')->default(0);
			$table->boolean('refund_status')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_ask_dissent');
	}

}
