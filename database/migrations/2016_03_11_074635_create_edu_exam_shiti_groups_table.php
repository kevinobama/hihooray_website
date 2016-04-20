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

class CreateEduExamShitiGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_shiti_groups', function(Blueprint $table)
		{
			$table->increments('gid');
			$table->integer('fid')->unsigned()->default(0)->index('fid');
			$table->string('exam_groups_name', 60)->default('');
			$table->char('user_id', 18)->default('');
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->dateTime('updatetime')->default('0000-00-00 00:00:00');
			$table->smallInteger('displayorder')->default(0);
			$table->boolean('xstatus')->default(1);
			$table->boolean('xtype')->default(1);
			$table->smallInteger('exam_numbers')->default(0);
			$table->unique(['exam_groups_name','user_id'], 'idx_edu_exam_shiti_groups_exam_groups_name_user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_shiti_groups');
	}

}
