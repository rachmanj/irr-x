<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('additional_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->nullable();
            $table->string('type', 50); // ITO / DO / BAST / etc
            $table->string('document_number');
            $table->date('document_date');
            $table->date('receive_date')->nullable();
            $table->foreignId('created_by');
            $table->string('attachment')->nullable();
            $table->string('flag', 30)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_documents');
    }
};
