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

class CreateEduFilesCacheTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_files_cache', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->char('UserId', 18)->default(0);
			$table->string('Path', 512);
			$table->string('PathHash', 32)->default('');
			$table->integer('Parent')->default(0);
			$table->string('FileName', 250);
			$table->integer('MimeType')->default(0);
			$table->integer('MimePart')->default(0);
			$table->bigInteger('Size')->default(0);
			$table->integer('CreateTime')->default(0);
			$table->integer('UpdateTime')->default(0);
			$table->integer('Encrypted')->default(0);
			$table->string('Category', 4);
			$table->unique(['UserId','PathHash'], 'fs_storage_path_hash');
			$table->index(['Parent','FileName'], 'fs_parent_name_hash');
			$table->index(['UserId','MimeType'], 'fs_storage_mimetype');
			$table->index(['UserId','MimePart'], 'fs_storage_mimepart');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_files_cache');
	}

}
