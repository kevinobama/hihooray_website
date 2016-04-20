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

class CreateEduFilesTrashTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_files_trash', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('filename', 250)->default('')->index('filename_index');
			$table->char('userid', 18)->index('userid_index');
			$table->string('timestamp', 12)->default('')->index('timestamp_index');
			$table->string('location', 512)->default('');
			$table->string('type', 4)->default('');
			$table->string('mime', 30)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_files_trash');
	}

}
