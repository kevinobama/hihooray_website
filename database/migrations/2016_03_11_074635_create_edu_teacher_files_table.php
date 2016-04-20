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

class CreateEduTeacherFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_teacher_files', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('user_id', 18);
			$table->string('persistentId', 35);
			$table->string('inputBucket', 35)->nullable();
			$table->string('inputKey', 60)->nullable();
			$table->string('cmd', 100)->nullable();
			$table->string('hash', 60)->nullable();
			$table->string('itemsKey', 150)->nullable();
			$table->string('pipeline', 60)->nullable();
			$table->string('reqid', 35)->nullable();
			$table->smallInteger('page_num')->nullable();
			$table->text('description', 65535)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_teacher_files');
	}

}
