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

class CreateEduWordFilterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_word_filter', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('words', 100)->default('')->unique('idedu_filter');
			$table->dateTime('datetime')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_word_filter');
	}

}
