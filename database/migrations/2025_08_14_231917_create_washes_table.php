<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up(): void
{
    Schema::create('washes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('company_id')->nullable()->constrained()->onDelete('cascade');
        $table->dateTime('schedule_at');
        $table->string('customer_name', 100)->nullable();
        $table->foreignId('wash_type_id')->constrained('wash_types')->onDelete('cascade');
        $table->decimal('price', 10, 2);
        $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
        $table->text('notes')->nullable();
        $table->enum('status', ['pendente', 'lavando', 'completo', 'cancelado'])->nullable();
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
        Schema::dropIfExists('washes');
    }
}
