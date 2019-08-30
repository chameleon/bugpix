<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // We'll need:
    // username
    // #posts - COMES FROM A DIFFERENT PLACE
    // #followers- COMES FROM A DIFFERENT PLACE
    // #following- COMES FROM A DIFFERENT PLACE
    //TITLE
    // descrip
    // link url
    //// nullable because the user is not reqired to have them yet at registration
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->unsignedBigInteger('user_id'); // Foriegn key: table_field
            $table->timestamps();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();

            $table->index('user_id'); // index the foreign key for faster queries
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
