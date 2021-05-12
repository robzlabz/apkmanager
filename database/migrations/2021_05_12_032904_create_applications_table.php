<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('project_id')->nullable()->constrained();
            $table->string('name');
            $table->string('package')->index(); // com.android.go
            $table->string('type')->nullable(); // news, instagram
            $table->string('icon')->nullable();
            $table->string('admob_app_id', 38)->nullable();
            $table->string('admob_banner_id', 38)->nullable();
            $table->string('admob_interstisial_id', 38)->nullable();
            $table->bigInteger('traffic')->default(0);
            $table->string('instagram_tag')->nullable();
            $table->string('instagram_username')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
