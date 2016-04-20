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

class CreateEduCommonOrgLevelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_org_level', function(Blueprint $table)
		{
			$table->increments('org_level_id');
			$table->string('org_level_name', 45)->default('');
			$table->boolean('xstatus')->default(1);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->dateTime('updatetime')->nullable()->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_common_org_level');
	}

}
