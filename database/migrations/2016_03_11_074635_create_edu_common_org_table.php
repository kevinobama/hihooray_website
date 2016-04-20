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

class CreateEduCommonOrgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_org', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('org_name', 200)->default('');
			$table->integer('province_id')->default(0)->index('province_id');
			$table->integer('city_id')->default(0)->index('city_id');
			$table->integer('dist_id')->default(0)->index('dist_id');
			$table->boolean('type')->nullable()->default(0);
			$table->boolean('xstatus')->default(1);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->dateTime('updatetime')->nullable()->default('0000-00-00 00:00:00');
			$table->string('SchoolId', 200)->nullable()->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_common_org');
	}

}
