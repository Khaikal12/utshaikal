<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('NIM');
            $table->string('nama_mahasiswa', 100);
            $table->timestamps();
        });

        DB::table('mahasiswa')->insert([
            ['id' => 1, 'NIM' => '2101040005', 'nama_mahasiswa' =>'I Kadek Rio Ffebriyan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'NIM' => '2101040002','nama_mahasiswa' =>'ghozi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
