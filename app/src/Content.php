<?php

declare(strict_types=1);

/*
 * UserFrosting Content Sprinkle (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/sprinkle-content
 * @copyright Copyright (c) 2022 Srinivas Nukala
 * @license   https://github.com/userfrosting/sprinkle-admin/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\Sprinkle\Content;

use UserFrosting\Event\EventListenerRecipe;
use UserFrosting\Sprinkle\Account\Account;
use UserFrosting\Sprinkle\Admin\Admin;
use UserFrosting\Sprinkle\Core\Core;
use UserFrosting\Sprinkle\Account\Event\UserRedirectedAfterLoginEvent;
use UserFrosting\Sprinkle\Admin\Listener\UserRedirectedToDashboard;
use UserFrosting\Sprinkle\CRUD5\CRUD5;
use UserFrosting\Sprinkle\Content\Database\Migrations\v500\ContentTable;
use UserFrosting\Sprinkle\BakeryRecipe;
use UserFrosting\Sprinkle\Core\Sprinkle\Recipe\MigrationRecipe;
use UserFrosting\Sprinkle\Core\Sprinkle\Recipe\SeedRecipe;
use UserFrosting\Sprinkle\Core\Sprinkle\Recipe\TwigExtensionRecipe;
use UserFrosting\Sprinkle\SprinkleRecipe;

use UserFrosting\Theme\AdminLTE\AdminLTE;


class Content implements
    SprinkleRecipe,
    MigrationRecipe,
    EventListenerRecipe,
    TwigExtensionRecipe
//BakeryRecipe
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Content Sprinkle';
    }

    /**
     * {@inheritdoc}
     */
    public function getPath(): string
    {
        return __DIR__ . '/../';
    }

    /**
     * {@inheritdoc}
     */
    public function getSprinkles(): array
    {
        return [
            Core::class,
            Admin::class,
            AdminLTE::class,
            CRUD5::class
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getRoutes(): array
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getServices(): array
    {
        return [];
    }

    /**
     * {@inheritDoc}
     * N.B.: Last listeners will be executed first.
     */
    public function getEventListeners(): array
    {
        return [];
    }

    public function getMigrations(): array
    {
        return [
            // v500
            ContentTable::class,
        ];
    }
    /**
     * {@inheritDoc}
     */
    public function getTwigExtensions(): array
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getBakeryCommands(): array
    {
        return [];
    }
}
