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

class AddForeignKeysToOauthRefreshTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('oauth_refresh_tokens', function(Blueprint $table)
		{
			$table->foreign('client_id', 'oauth_refresh_tokens_ibfk_1')->references('client_id')->on('oauth_clients')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('oauth_refresh_tokens', function(Blueprint $table)
		{
			$table->dropForeign('oauth_refresh_tokens_ibfk_1');
		});
	}

}
