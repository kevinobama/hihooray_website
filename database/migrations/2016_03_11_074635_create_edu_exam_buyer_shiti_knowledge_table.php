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

class CreateEduExamBuyerShitiKnowledgeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_buyer_shiti_knowledge', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default('');
			$table->integer('exam_id')->unsigned()->default(0);
			$table->char('record_id', 18)->nullable()->default(0);
			$table->bigInteger('shiti_id')->unsigned()->default(0);
			$table->integer('knowledge_id')->unsigned()->default(0);
			$table->smallInteger('get_scores')->default(0);
			$table->text('content', 65535)->nullable();
			$table->smallInteger('scores')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_buyer_shiti_knowledge');
	}

}
