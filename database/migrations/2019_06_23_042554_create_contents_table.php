<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',150)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_id');
            $table->integer('photo_id')->nullable();
            $table->integer('visitor')->nullable();
            $table->longText('content')->nullable();
            $table->integer('isActive')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
    public function category(){

        return $this->belongsTo('App\Category','category_id');
    }

//    public function photo(){
//
//        return $this->belongsTo('App\Photo','photo_id');
//    }

    public function user(){
        return $this->belongsTo('app\User','user_id');
    }
}
