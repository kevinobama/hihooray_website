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

class CreateEduCommonStagesSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_common_stages_subjects', function(Blueprint $table)
		{
			$table->smallInteger('sta_sub_id', true)->unsigned();
			$table->smallInteger('stages_id')->unsigned()->default(0);
			$table->string('stages_name', 45)->default('');
			$table->smallInteger('grades_id')->unsigned()->default(0);
			$table->string('grades_name', 45)->default('');
			$table->smallInteger('subjects_id')->unsigned()->default(0);
			$table->string('subjects_name', 45)->default('');
			$table->boolean('xtype')->default(1);
			$table->smallInteger('sort')->unsigned()->default(0);
			$table->smallInteger('question_type_id')->unsigned()->nullable()->default(0);
			$table->string('question_type_name', 45)->nullable()->default('');
			$table->smallInteger('qt_sort')->unsigned()->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_common_stages_subjects');
	}

}
