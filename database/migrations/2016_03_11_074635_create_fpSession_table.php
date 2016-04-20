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

class CreateFpSessionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fpSession', function(Blueprint $table)
		{
			$table->string('sessionID', 31)->primary();
			$table->string('userID');
			$table->bigInteger('workgroupID');
			$table->text('transcript', 65535)->nullable();
			$table->char('startTime', 15);
			$table->char('endTime', 15);
			$table->bigInteger('queueWaitTime')->nullable();
			$table->integer('state');
			$table->string('caseID', 20)->nullable();
			$table->char('status', 15)->nullable();
			$table->text('notes', 65535)->nullable();
			$table->index(['workgroupID','userID'], 'fpsession_workgroupid_idx');
			$table->index(['workgroupID','startTime'], 'fpsession_starttime_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fpSession');
	}

}
