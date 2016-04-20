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

class CreateEduPanFilesTrashTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_pan_files_trash', function(Blueprint $table)
		{
			$table->integer('auto_id', true);
			$table->string('id', 250)->default('')->index('id_index');
			$table->string('user', 64)->default('')->index('user_index');
			$table->string('timestamp', 12)->default('')->index('timestamp_index');
			$table->string('location', 512)->default('');
			$table->string('type', 4)->nullable();
			$table->string('mime')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_pan_files_trash');
	}

}
