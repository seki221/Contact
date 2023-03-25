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
        Schema::create('contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->char('fullname', 20)->comment('名前');
            $table->boolean('gender')->comment('性別');
            $table->string('mail')->comment('メールアドレス');
            $table->string('address')->comment('住所');
            $table->string('building_name')->nullable();
            $table->text('opinion');
            $table->char('postcode', 8)->comment('郵便番号');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
