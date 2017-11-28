<?php namespace October\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesCountriesTables extends Migration
{

    public function up()
    {
        
        Schema::create('october_test_categories_countries', function($table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('country_id')->unsigned()->nullable()->index();
            $table->integer('category_id')->unsigned()->nullable()->index();

            $table->boolean('is_published')->default(false);
            $table->boolean('sort_order')->default(1);
            
            $table->primary(['country_id','category_id'],'country_category');
        });
    }


    public function down()
    {
        Schema::dropIfExists('october_test_categories_countries');
    }

}
