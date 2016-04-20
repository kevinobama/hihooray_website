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

class CreateEduMicroclassOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_microclass_order', function(Blueprint $table)
		{
			$table->increments('micro_order_id');
			$table->string('micro_order', 60);
			$table->integer('micro_id')->unsigned()->default(0)->index('micro_id');
			$table->char('user_id', 18)->default('')->index('user_id');
			$table->string('username', 15)->default('');
			$table->smallInteger('price')->unsigned()->default(0);
			$table->string('microclass_name', 100)->default('');
			$table->string('vedio_small_image')->default('');
			$table->string('vedio_middle_image')->default('');
			$table->string('vedio_big_image')->default('');
			$table->boolean('free')->default(1)->index('free');
			$table->boolean('status')->default(0);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->dateTime('updatetime')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_microclass_order');
	}

}
