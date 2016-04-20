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

class CreateFpWorkgroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fpWorkgroup', function(Blueprint $table)
		{
			$table->bigInteger('workgroupID')->index('fpWorkgroup_workgroupid_idx');
			$table->string('jid');
			$table->string('displayName', 50)->nullable();
			$table->string('description')->nullable();
			$table->integer('status');
			$table->integer('modes');
			$table->string('creationDate', 15);
			$table->string('modificationDate', 15);
			$table->integer('maxchats');
			$table->integer('minchats');
			$table->integer('requestTimeout');
			$table->integer('offerTimeout');
			$table->text('schedule', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fpWorkgroup');
	}

}
