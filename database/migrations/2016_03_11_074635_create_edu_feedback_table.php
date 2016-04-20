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

class CreateEduFeedbackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_feedback', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('content', 65535)->nullable();
			$table->char('user_id', 18)->default('')->index('user_id');
			$table->string('username', 15)->default('');
			$table->boolean('status')->default(1);
			$table->dateTime('add_time')->default('0000-00-00 00:00:00');
			$table->string('type_flag')->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_feedback');
	}

}
