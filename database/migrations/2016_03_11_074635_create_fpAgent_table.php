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

class CreateFpAgentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fpAgent', function(Blueprint $table)
		{
			$table->bigInteger('agentID')->index('fpagent_agentid_idx');
			$table->string('agentJID')->index('fpagent_agentjid_idx');
			$table->string('name')->nullable();
			$table->integer('maxchats');
			$table->integer('minchats');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fpAgent');
	}

}
