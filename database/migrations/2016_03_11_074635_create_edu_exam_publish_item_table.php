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

class CreateEduExamPublishItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_publish_item', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exam_id')->unsigned()->default(0);
			$table->string('item_title')->default('');
			$table->smallInteger('item_num')->unsigned()->default(0);
			$table->smallInteger('item_score')->unsigned()->default(0);
			$table->string('shiti_id', 1000)->default('');
			$table->smallInteger('displayorder')->unsigned()->nullable()->default(0)->index('displayorder');
			$table->char('record_id', 18)->nullable()->index('record_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_publish_item');
	}

}
