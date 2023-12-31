<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('package_name',50)->unique();
            $table->string('type',50)->nullable();
			$table->decimal('cost_per_month',10,2);
			$table->decimal('cost_per_year',10,2);
            $table->string('websites_limit');
            $table->string('recurring_transaction');
			$table->string('online_payment');
			$table->tinyInteger('is_featured')->default(0);
			$table->text('others')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
