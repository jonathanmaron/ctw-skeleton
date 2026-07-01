<?php
declare(strict_types=1);

namespace CtwTest\Skeleton;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

/**
 * Placeholder test so the PHPUnit suite has at least one test to execute.
 *
 * ctw-skeleton is an empty template package with no source classes yet, which
 * makes PHPUnit 13 report "No tests executed!". This keeps `composer test`
 * green; replace it with real tests once the skeleton gains source classes.
 */
#[CoversNothing]
final class SkeletonTest extends TestCase
{
    public function testSuiteExecutes(): void
    {
        $this->expectNotToPerformAssertions();
    }
}
