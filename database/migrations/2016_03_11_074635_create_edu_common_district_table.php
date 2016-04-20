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

class CreateEduCommonDistrictTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_district', function(Blueprint $table)
		{
			$table->integer('district_id')->nullable();
			$table->integer('fid')->nullable();
			$table->string('district_name', 765)->nullable();
			$table->boolean('level')->nullable();
			$table->boolean('usetype')->nullable();
			$table->smallInteger('displayorder')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_common_district');
	}

}
