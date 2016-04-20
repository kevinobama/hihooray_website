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

class CreateEduDirectTeachReserveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_direct_teach_reserve', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('schedule_id')->unsigned();
			$table->char('student_id', 18)->default('');
			$table->string('username', 40)->nullable();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('status')->default(0);
			$table->string('note', 200)->nullable();
			$table->boolean('score')->default(0);
			$table->string('comment', 200)->nullable();
			$table->dateTime('judge_at')->default('0000-00-00 00:00:00');
			$table->unique(['schedule_id','student_id'], 'class_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_direct_teach_reserve');
	}

}
