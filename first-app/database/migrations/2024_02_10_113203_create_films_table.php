<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('filmTitle');
            $table->foreignId('filmCertificate_id')->constrained('certificates');
            $table->text('filmDescription');
            $table->string('filmImage');
            $table->decimal('filmPrice', 8, 2);
            $table->unsignedTinyInteger('starRating');
            $table->date('releaseDate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('films');
    }
}
