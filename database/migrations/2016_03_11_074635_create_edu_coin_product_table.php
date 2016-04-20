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

class CreateEduCoinProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_coin_product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product_id', 50)->default('0');
			$table->integer('price')->nullable()->default(0);
			$table->integer('nums')->nullable()->default(0);
			$table->string('remark', 200)->nullable()->default('');
			$table->boolean('status')->nullable()->default(1);
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
		Schema::drop('edu_coin_product');
	}

}
