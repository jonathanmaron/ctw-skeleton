<?php
declare(strict_types=1);

use ComposerUnused\ComposerUnused\Configuration\Configuration;
use ComposerUnused\ComposerUnused\Configuration\NamedFilter;

/**
 * Packages excluded from the unused check by their exact name.
 *
 * Composer Unused proves the "php" platform requirement by finding core
 * functions, classes or constants in the scanned source. The only source file
 * this template ships is Ctw\Skeleton\Skeleton, an intentionally empty
 * placeholder that references no core symbol, so "php" is reported as unused.
 *
 * Delete this file once real classes replace the placeholder: the requirement
 * proves itself from that point on, and keeping the filter would hide a genuine
 * finding.
 */
return static function (Configuration $configuration): Configuration {
    $configuration->addNamedFilter(NamedFilter::fromString('php'));

    return $configuration;
};
