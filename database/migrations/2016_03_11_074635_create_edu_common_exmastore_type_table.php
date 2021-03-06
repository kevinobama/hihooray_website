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

class CreateEduCommonExmastoreTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_exmastore_type', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('exam_store_type', 45)->nullable()->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_common_exmastore_type');
	}

}
