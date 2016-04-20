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

class CreateFpQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fpQueue', function(Blueprint $table)
		{
			$table->bigInteger('queueID')->index('fpqueue_queueid_idx');
			$table->bigInteger('workgroupID')->index('fpqueue_workgroupid_idx');
			$table->string('name', 50);
			$table->string('description')->nullable();
			$table->integer('priority');
			$table->integer('maxchats');
			$table->integer('minchats');
			$table->integer('overflow');
			$table->bigInteger('backupQueue')->nullable();
			$table->primary(['workgroupID','queueID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fpQueue');
	}

}
