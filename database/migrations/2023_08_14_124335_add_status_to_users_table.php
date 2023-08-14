<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->default('active')->before('email');
        });

        // Add check constraints to limit the allowed values to your desired statuses:
        DB::statement("ALTER TABLE users ADD CONSTRAINT status_check CHECK (status IN ('active', 'inactive', 'suspended'))");
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }  

};
