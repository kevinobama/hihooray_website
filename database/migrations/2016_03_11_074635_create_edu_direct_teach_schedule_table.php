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

class CreateEduDirectTeachScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_direct_teach_schedule', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('code', 15)->nullable();
			$table->char('teacher_id', 18)->default('');
			$table->string('username', 40)->nullable();
			$table->date('date');
			$table->time('begintime');
			$table->time('endtime');
			$table->integer('price')->default(1);
			$table->integer('limit')->default(1);
			$table->integer('num')->default(0);
			$table->integer('classroom_id')->nullable();
			$table->string('classroom_record', 200)->nullable();
			$table->integer('chatroom_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_direct_teach_schedule');
	}

}
