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

class CreateEduAdminPushlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_admin_pushlog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->nullable()->default('');
			$table->text('msg', 65535);
			$table->string('admin_username', 150)->default('0');
			$table->boolean('status')->nullable()->default(0);
			$table->boolean('deflg')->nullable()->default(0);
			$table->timestamp('createtime')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_admin_pushlog');
	}

}
