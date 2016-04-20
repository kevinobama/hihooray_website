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

class CreateEduFavoritesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_favorites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('resource_id')->default(0);
			$table->char('user_id', 18)->default(0);
			$table->integer('type')->default(0);
			$table->integer('status')->default(0);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
			$table->char('resource_type', 20)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_favorites');
	}

}
