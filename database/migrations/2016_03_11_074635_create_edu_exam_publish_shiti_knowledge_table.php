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

class CreateEduExamPublishShitiKnowledgeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_publish_shiti_knowledge', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('knowledge_id')->unsigned()->default(0);
			$table->char('user_id', 18)->default('');
			$table->integer('exam_id')->unsigned()->default(0)->index('exam_id');
			$table->char('record_id', 18)->default(0)->index('record_id');
			$table->integer('shiti_id')->unsigned()->default(0)->index('title_id');
			$table->string('content')->default('');
			$table->smallInteger('score')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_publish_shiti_knowledge');
	}

}
