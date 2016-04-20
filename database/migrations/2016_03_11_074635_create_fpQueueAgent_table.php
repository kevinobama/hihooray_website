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

class CreateFpQueueAgentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fpQueueAgent', function(Blueprint $table)
		{
			$table->bigInteger('queueID');
			$table->bigInteger('objectID');
			$table->integer('objectType');
			$table->integer('administrator')->nullable();
			$table->primary(['queueID','objectID','objectType']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fpQueueAgent');
	}

}
