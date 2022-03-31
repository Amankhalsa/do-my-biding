<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_account_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->integer('subsubcategory_id')->nullable();
            $table->date('create_date')->nullable();
            $table->text('post_title')->nullable();
            $table->text('post_detail')->nullable();
            $table->string('postcode')->nullable();
            $table->string('main_image')->nullable();
            $table->string('add_id')->nullable();
            $table->string('is_seller')->nullable();
            $table->string('you_are')->nullable()->comment('Individual,Agency');
            $table->double('expected_price')->nullable();
            $table->string('is_price_negotiable')->nullable();
            $table->string('tags')->nullable();
            $table->date('last_renewed_on')->nullable();
            $table->tinyinteger('status')->default(0)->comment('0=inactive,1=active')->nullable(); 
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
        Schema::dropIfExists('add_posts');
    }
};




