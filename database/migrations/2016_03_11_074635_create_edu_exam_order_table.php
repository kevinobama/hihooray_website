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

class CreateEduExamOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_exam_order', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('order_id', 60)->nullable();
			$table->integer('exam_id')->unsigned()->default(0)->index('form_id');
			$table->string('exam_name', 60)->default('0');
			$table->char('record_id', 18)->nullable()->default(0);
			$table->dateTime('exam_time')->nullable()->default('0000-00-00 00:00:00');
			$table->char('teacher_id', 18)->default('');
			$table->string('teacher_name', 30)->default('');
			$table->string('subject_gname', 10)->default('')->index('subject_gname');
			$table->char('buyer_id', 18)->default(0)->index('buyer_uid');
			$table->string('buyer_name', 30)->nullable()->default('');
			$table->integer('price');
			$table->string('total_fen', 10)->default('');
			$table->integer('top')->default(0);
			$table->boolean('xstatus')->default(0);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->dateTime('updatetime')->default('0000-00-00 00:00:00');
			$table->dateTime('exam_start_time')->default('0000-00-00 00:00:00');
			$table->dateTime('exam_end_time')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_exam_order');
	}

}
