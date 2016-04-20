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

class CreateEduMedalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_medal', function(Blueprint $table)
		{
			$table->smallInteger('medalid', true)->unsigned();
			$table->string('name', 50)->default('');
			$table->boolean('available')->default(0);
			$table->string('image')->default('');
			$table->string('big_image')->default('');
			$table->boolean('type')->default(0);
			$table->boolean('displayorder')->default(0)->index('displayorder');
			$table->string('description')->default('');
			$table->smallInteger('expiration')->unsigned()->default(0);
			$table->text('permission', 16777215);
			$table->boolean('credit')->default(0);
			$table->integer('price')->unsigned()->default(0);
			$table->index(['available','displayorder'], 'available');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_medal');
	}

}
