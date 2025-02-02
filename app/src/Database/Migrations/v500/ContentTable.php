<?php

/**
 * Content  (http://www.srinivasnukala.com)
 *
 * @link      https://github.com/ssnukala/ufsprinkle-content/
 * @copyright Copyright (c) 2013-2016 Srinivas Nukala
 */

namespace UserFrosting\Sprinkle\Content\Database\Migrations\v500;


use UserFrosting\Sprinkle\Core\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use UserFrosting\Sprinkle\CRUD5\Controller\Utility\CRUDUtilityController as CRUDUtil;

/**
 * Content table migration
 * Version 4.0.0
 *
 * See https://laravel.com/docs/5.4/migrations#tables
 * @extends Migration
 * @author Srinivas Nukala (https://srinivasnukala.com)
 */
class ContentTable extends Migration
{
    public static $dependencies = [];

    /**
     * {@inheritDoc}
     */
    public function up(): void
    {
        if (!$this->schema->hasTable('cm_content')) {
            $this->schema->create('cm_content', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->char('type', 2)->default('GN');
                $table->string('locale', 10)->default('en_US');
                $table->dateTime('publish_date');
                $table->dateTime('archive_date');
                $table->string('slug', 50);
                $table->string('title', '255');
                $table->text('body')->nullable();
                $table->string('tags', 500)->nullable();
                $table->json('meta')->nullable();
                $table->char('status', 1)->default('A');
                $table->string('created_by', 50)->nullable();
                $table->string('updated_by', 50)->nullable();
                $table->timestamps();
                $table->softDeletes();
                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
            });
        }
        /* *
         * Add premissions for this table
         * /
        if ($this->schema->hasTable('permissions')) {
            // Skip this if table is not empty
            $adminroles = ['group-admin', 'site-admin',];
            CRUDUtil::createCRUDPermissions('cm_content', $adminroles);
        }
            */
    }

    /**
     * {@inheritDoc}
     */
    public function down(): void
    {
        if ($this->schema->hasTable('cm_content')) {
            $this->schema->drop('cm_content');
        }
        //CRUDUtil::deleteCRUDPermissions('cm_content');
    }
}