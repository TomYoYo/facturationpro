<?php
/**
 * Whoops - php errors for cool kids
 * @author Filipe Dobreira <http://github.com/filp>
 *
 * Bootstraper for PHPUnit tests.
 */
$loader = require_once __DIR__ . '/../vendor/autoload.php';
$loader->add('FacturationPro\\', __DIR__.'/Route/');
$loader->add('FacturationPro\\', __DIR__.'/Entity/');
