<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            $table->string('complaint_isd_code')->unique();

            $table->string('school_code');
            $table->string('school_name');

            $table->string('asset_model');
            $table->string('tagging_no');
            $table->string('serial_no');

            $table->string('complainant_name');
            $table->string('complainant_email');
            $table->string('complainant_phone');
            $table->text('complaint_details')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('complaints');
    }
};
