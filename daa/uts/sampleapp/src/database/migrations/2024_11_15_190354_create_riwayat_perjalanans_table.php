<?php

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayat_perjalanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supir_id')->constrained('supirs')->onDelete('cascade');
            $table->date('tanggal_perjalanan');
            $table->string('tujuan');
            $table->integer('durasi'); // Durasi perjalanan dalam jam
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }