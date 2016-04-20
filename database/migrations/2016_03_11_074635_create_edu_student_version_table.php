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

class CreateEduStudentVersionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_student_version', function(Blueprint $table)
		{
			$table->increments('vid');
			$table->string('version_name', 50)->nullable()->default('');
			$table->smallInteger('version_number')->default(0);
			$table->string('version_url', 100)->default('');
			$table->char('filemd5', 32)->default('');
			$table->text('explain', 65535)->nullable();
			$table->dateTime('create_time')->default('0000-00-00 00:00:00');
			$table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('xstatus')->default(0);
			$table->boolean('enforce')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_student_version');
	}

}
