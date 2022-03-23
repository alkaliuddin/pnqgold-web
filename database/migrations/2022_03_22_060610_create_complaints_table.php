<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Complaint;
use App\Models\School;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(School::class, 'school_id')
                ->constrained(School::getModel()->getTable())
                ->onDelete('cascade');

            $table->string('complaint_isd_code')->unique();

            $table->string('asset_model')->nullable();
            $table->string('tagging_no')->nullable();
            $table->string('serial_no')->nullable();

            $table->string('complainant_name')->nullable();
            $table->string('complainant_email')->nullable();
            $table->string('complainant_phone')->nullable();
            $table->text('complaint_details')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();
            $table->softDeletes();
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
