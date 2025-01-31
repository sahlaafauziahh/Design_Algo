<?php

public function up()
{
    Schema::create('supirs', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->date('tanggal_lahir');
        $table->string('no_hp');
        $table->string('alamat');
        $table->enum('status', ['tersedia', 'tidak tersedia']);
        $table->timestamps();
    });
}
