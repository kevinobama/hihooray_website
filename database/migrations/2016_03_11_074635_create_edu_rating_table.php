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

class CreateEduRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_rating', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('xtype')->default('student');
			$table->string('rating', 100)->default('');
			$table->string('rating_img');
			$table->string('rating_desc', 100)->default('');
			$table->string('conditions', 100)->default('');
			$table->string('rate', 10)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_rating');
	}

}
