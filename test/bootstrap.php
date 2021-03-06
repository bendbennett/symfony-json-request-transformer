<?php

/*
 * This file is part of the qandidate/symfony-json-request-transformer package.
 *
 * (c) Qandidate.com <opensource@qandidate.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (file_exists($file = __DIR__ . '/../vendor/autoload.php')) {
    $loader = require_once $file;
    $loader->add('Qandidate', __DIR__);
} else {
    throw new RuntimeException('Install dependencies to run test suite.');
}
