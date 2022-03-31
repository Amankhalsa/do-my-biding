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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
             $table->string('name');
            $table->string('type')->nullable()->comment('user type');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('you_are')->nullable()->comment('Individual,Agency');
            $table->double('phone_number')->nullable();
            $table->text('about_yourself')->nullable();
            $table->text('country')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->string('postcode')->nullable();
            $table->text('address')->nullable();
            $table->text('Activities_and_Interests')->nullable();
            $table->text('website_url')->nullable();
            $table->string('gender')->nullable();
            $table->integer('gender_public')->default(0)->comment('0=hide,1=show');
            $table->date('dob')->nullable();
            $table->integer('dob_public')->default(0)->comment('0=hide,1=show');
            $table->text('Details')->nullable();
            $table->string('Statistics')->nullable();     
            $table->tinyinteger('status')->default(0)->comment('0=inactive,1=active'); 
            $table->text('profile_photo_path')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
