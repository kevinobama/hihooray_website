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

class CreateEduCommonSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_subjects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject_name', 45)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_common_subjects');
	}

}
