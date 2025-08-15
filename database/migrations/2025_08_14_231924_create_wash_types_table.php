<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up(): void
{
    Schema::create('wash_types', function (Blueprint $table) {
        $table->id();
        $table->foreignId('company_id')->nullable()->constrained()->onDelete('cascade');
        $table->string('name', 50);
        $table->decimal('default_price', 10, 2)->nullable();
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
        Schema::dropIfExists('wash_types');
    }
}
