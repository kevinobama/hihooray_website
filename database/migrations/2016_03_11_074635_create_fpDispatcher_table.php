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

class CreateFpDispatcherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fpDispatcher', function(Blueprint $table)
		{
			$table->bigInteger('queueID')->primary();
			$table->string('name', 50)->nullable();
			$table->string('description')->nullable();
			$table->integer('offerTimeout');
			$table->integer('requestTimeout');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fpDispatcher');
	}

}
