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

class CreateEduPanFilecacheTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_pan_filecache', function(Blueprint $table)
		{
			$table->integer('fileid', true);
			$table->char('storage', 18)->default(0);
			$table->string('path', 400)->default('0');
			$table->string('path_hash', 32)->default('0');
			$table->integer('parent')->default(0);
			$table->string('name', 250)->default('0');
			$table->integer('mimetype')->default(0);
			$table->integer('mimepart')->default(0);
			$table->bigInteger('size')->default(0);
			$table->integer('mtime')->default(0);
			$table->integer('storage_mtime')->default(0);
			$table->integer('encrypted')->default(0);
			$table->bigInteger('unencrypted_size')->default(0);
			$table->string('etag', 40)->nullable();
			$table->integer('permissions')->nullable()->default(0);
			$table->string('title', 120)->default('');
			$table->integer('OriginalPrice')->nullable();
			$table->integer('education_id')->nullable();
			$table->string('education_name', 45)->nullable();
			$table->integer('grade_id')->nullable();
			$table->string('grade_name', 45)->nullable();
			$table->integer('subject_id')->nullable();
			$table->string('subject_name', 45)->nullable();
			$table->integer('CreateTime')->nullable();
			$table->integer('UpdateTime')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_pan_filecache');
	}

}
