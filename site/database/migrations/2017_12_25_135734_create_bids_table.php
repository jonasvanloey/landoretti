<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('year');
            $table->float('width');
            $table->float('height');
            $table->float('depth')->nullable();
            $table->date('end_date');
            $table->text('description');
            $table->text('condition');
            $table->boolean('is_active')->default(1);
            $table->boolean('pending')->default(0);
            $table->boolean('sold')->default(0);
            $table->boolean('approved')->nullable()->default(1);
            $table->float('min_est_price');
            $table->float('max_est_price');
            $table->float('buyout_price');
            $table->string('image_path');
            $table->string('signature_image_path');
            $table->string('optional_image_path')->nullable();
            $table->string('auction_title');
            $table->string('style');
            $table->string('media');
            $table->string('origin');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
