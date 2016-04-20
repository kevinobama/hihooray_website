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

class CreateEduExamBuyerShitiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_buyer_shiti', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->char('user_id', 18)->default('')->index('uid');
			$table->integer('exam_id')->unsigned()->default(0)->index('form_id');
			$table->char('record_id', 18)->nullable()->default(0);
			$table->bigInteger('shiti_id')->unsigned()->default(0)->index('title_id');
			$table->text('answer', 65535)->nullable();
			$table->smallInteger('score')->unsigned()->default(0);
			$table->boolean('xtype')->default(0);
			$table->boolean('results')->default(0);
			$table->boolean('xstatus')->nullable()->default(1);
			$table->unique(['user_id','exam_id','shiti_id'], 'uid_exam_shiti');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_buyer_shiti');
	}

}
