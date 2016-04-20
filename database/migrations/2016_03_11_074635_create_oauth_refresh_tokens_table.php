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

class CreateOauthRefreshTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_refresh_tokens', function(Blueprint $table)
		{
			$table->string('refresh_token', 40)->primary();
			$table->string('client_id', 32)->index('client_id');
			$table->char('user_id', 18)->nullable();
			$table->timestamp('expires')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('scope', 2000)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_refresh_tokens');
	}

}
