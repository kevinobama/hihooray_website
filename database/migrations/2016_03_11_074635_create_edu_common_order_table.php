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

class CreateEduCommonOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('order_id', 60)->index('mcorder_id');
			$table->char('user_id', 18)->default('')->index('user_id');
			$table->string('title')->default('');
			$table->smallInteger('order_type')->unsigned()->default(0);
			$table->smallInteger('price')->unsigned()->default(0);
			$table->text('data', 65535)->nullable();
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->boolean('status')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_common_order');
	}

}
