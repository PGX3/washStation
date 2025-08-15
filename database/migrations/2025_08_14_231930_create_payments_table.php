<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up(): void
{
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('company_id')->nullable()->constrained()->onDelete('cascade');
        $table->foreignId('wash_id')->constrained('washes')->onDelete('cascade');
        $table->decimal('amount_paid', 10, 2);
        $table->enum('payment_method', ['Cartao', 'Dinheiro', 'Pix'])->nullable();
        $table->dateTime('paid_at')->useCurrent();
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
        Schema::dropIfExists('payments');
    }
}
