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

class CreateEduCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_cards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('prefix', 3)->nullable();
			$table->string('key', 15)->default('')->unique('key');
			$table->string('crypt', 100)->default('');
			$table->integer('price')->default(0);
			$table->char('user_id', 18)->default(0);
			$table->string('username', 64)->nullable();
			$table->string('order_id', 64)->nullable();
			$table->boolean('status')->default(0);
			$table->dateTime('used_at')->nullable()->default('0000-00-00 00:00:00');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('expired_at')->default('0000-00-00 00:00:00');
			$table->index(['user_id','status','expired_at'], 'user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_cards');
	}

}
