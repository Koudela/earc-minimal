<?php
/**
 * e-Arc Framework - the explicit Architecture Framework
 *
 * @package earc/minimal
 * @link https://github.com/Koudela/eArc-minimal/
 * @copyright Copyright (c) 2018 Thomas Koudela
 * @license http://opensource.org/licenses/MIT MIT License
 */

// autoloader for (composer) dependencies (is PSR-4 compatible)
require __DIR__ . '/../vendor/autoload.php';

// bootstrap the application
new \eArc\App\configurationDomains\bootstrapService\bootstrapServiceAPI();
