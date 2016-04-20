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

class CreateEduMobileVersionPublishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_mobile_version_publish', function(Blueprint $table)
		{
			$table->string('version_name', 50)->default('');
			$table->smallInteger('version_number')->unsigned()->default(0);
			$table->string('version_url', 100)->default('');
			$table->char('filemd5', 32)->default('');
			$table->integer('vid')->unsigned()->default(0);
			$table->boolean('enforce')->default(0);
			$table->text('explain', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_mobile_version_publish');
	}

}
