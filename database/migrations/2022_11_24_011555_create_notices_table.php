<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('preview');
            $table->string('image');
            $table->longText('description');
            $table->integer('acess')->default(0);
            $table->enum('type', [1, 2, 3])->comment('1 - noticias 2 - destaque 3 - recomendado');
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->enum('category', [1, 2, 3, 4, 5, 6])->comment('1 - esporte 2 - política 3 - saúde 4 - mundo 5 - cultura 6 - outros');
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
        Schema::dropIfExists('notices');
    }
}
