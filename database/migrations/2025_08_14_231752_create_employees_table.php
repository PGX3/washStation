<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up(): void
{
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->foreignId('company_id')->nullable()->constrained()->onDelete('cascade');
        $table->string('name', 100);
        $table->string('phone', 30)->nullable();
        $table->date('hire_date')->nullable();
        $table->boolean('active')->default(true);
        $table->enum('payment_type', ['commission', 'fixed_salary'])->default('commission');
        $table->decimal('commission_percentage', 5, 2)->default(0.00);
        $table->decimal('fixed_amount_per_wash', 10, 2)->default(0.00);
        $table->decimal('monthly_salary', 10, 2)->default(0.00);
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
        Schema::dropIfExists('employees');
    }
}
