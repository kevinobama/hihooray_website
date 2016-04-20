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

class CreateEduAskOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_ask_order', function(Blueprint $table)
		{
			$table->integer('order_id', true);
			$table->string('order_sn', 60)->nullable()->default('')->index('order_sn');
			$table->integer('question_id')->default(0)->index();
			$table->char('answer_uid', 18)->default('')->index('uid');
			$table->string('answer_nickname', 50)->default('');
			$table->string('answer_username', 50)->nullable()->default('');
			$table->dateTime('order_time')->default('0000-00-00 00:00:00');
			$table->boolean('confrim')->default(1);
			$table->dateTime('answer_add_time')->default('0000-00-00 00:00:00');
			$table->boolean('replies')->default(0);
			$table->boolean('order_status')->default(1);
			$table->boolean('t_is_comment')->default(0);
			$table->boolean('s_is_comment')->default(0);
			$table->dateTime('acquire_time')->default('0000-00-00 00:00:00');
			$table->boolean('t_status')->default(1);
			$table->integer('dissent_id')->default(0);
			$table->boolean('solve_id')->default(0);
			$table->boolean('refund_status')->default(0);
			$table->boolean('sh_id')->default(0);
			$table->boolean('first')->default(0);
			$table->boolean('is_video')->default(0);
			$table->boolean('is_append')->default(0);
			$table->boolean('appoint_type_id')->default(0);
			$table->boolean('s_is_del')->nullable()->default(0);
			$table->boolean('t_is_del')->nullable()->default(0);
			$table->string('classroom_id', 30)->nullable();
			$table->dateTime('answer_begin_time')->nullable()->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_ask_order');
	}

}
