<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('code_country')
                ->references('code_country')
                ->on('countries')
                ->onDelete('set null');

            $table->foreign('code_role')
                ->references('code_role')
                ->on('roles');

            $table->foreign('code_city')
                ->references('code_city')
                ->on('cities')
                ->onDelete('set null');

            $table->foreign('code_state')
                ->references('code_state')
                ->on('states')
                ->onDelete('set null');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('code_brand')
                ->references('code_brand')
                ->on('brands')
                ->onDelete('set null');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('code_city')
                ->references('code_city')
                ->on('cities')
                ->onDelete('set null');

            $table->foreign('code_category')
                ->references('code_category')
                ->on('categories')
                ->onDelete('set null');
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->foreign('code_state')
                ->references('code_state')
                ->on('states')
                ->onDelete('set null');
        });

        Schema::table('states', function (Blueprint $table) {
            $table->foreign('code_region')
                ->references('code_region')
                ->on('regions')
                ->onDelete('set null');
        });

        Schema::table('regions', function (Blueprint $table) {
            $table->foreign('code_country')
                ->references('code_country')
                ->on('countries')
                ->onDelete('set null');
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (DB::getDriverName() != 'sqlite') {
            Schema::table('users', function (Blueprint $table) {
                $table->dropForeign('users_code_country_foreign');
                $table->dropForeign('users_code_role_foreign');
                $table->dropForeign('users_code_state_foreign');
                $table->dropForeign('users_code_city_foreign');
            });

            Schema::table('products', function (Blueprint $table) {
                $table->dropForeign('users_code_brand_foreign');
                $table->dropForeign('users_user_id_foreign');
                $table->dropForeign('users_code_city_foreign');
                $table->dropForeign('users_code_state_foreign');
                $table->dropForeign('users_code_category_foreign');
            });

            Schema::table('cities', function (Blueprint $table) {
                $table->dropForeign('users_code_state_foreign');
            });

            Schema::table('states', function (Blueprint $table) {
                $table->dropForeign('users_code_region_foreign');
             
            });

            Schema::table('countries', function (Blueprint $table) {
                $table->dropForeign('users_code_country_foreign');
            });
        }
    }
};
