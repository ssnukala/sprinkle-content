<?php

/**
 * Helper - Classes
 *
 * @link      https://github.com/ssnukala/ufsprinkle-regsevak
 * @copyright Copyright (c) 2013-2016 Srinivas Nukala
 */

$app->get('/', 'UserFrosting\Sprinkle\Content\Controller\Site\SiteController:pageIndex')
    ->add('checkEnvironment')
    ->setName('index');

$app->group('/api/content', function () {
    $rController = 'UserFrosting\Sprinkle\Content\Controller\CRUD\ContentCRUDController';

    $this->post('', $rController . ':create');
    $this->post('/c/{content_id}', $rController . ':update');
    $this->post('/c/{content_id}/{field}', $rController . ':updateField');

    $cDtController = 'UserFrosting\Sprinkle\Content\Controller\Datatables\ContentDTController';
    $this->post('/dt', $cDtController . ':getList');
})->add('authGuard');

$app->group('/content', function () {
    $rController = 'UserFrosting\Sprinkle\Content\Controller\CRUD\ContentCRUDController';
    $this->get('', $rController . ':pageList')->setName('uri_content');
})->add('authGuard');

$app->group('/test-content', function () {
    $rController = 'UserFrosting\Sprinkle\Content\Controller\CRUD\ContentCRUDController';
    $this->get('', $rController . ':pageTest')->setName('uri_test');
})->add('authGuard');