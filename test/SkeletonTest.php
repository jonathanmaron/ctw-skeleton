<?php
declare(strict_types=1);

namespace CtwTest\Skeleton;

use Ctw\Skeleton\Skeleton;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Unit tests for the ctw-skeleton placeholder class.
 *
 * ctw-skeleton is a template package whose only source file is an intentionally
 * empty placeholder class. These tests confirm the placeholder exists, can be
 * instantiated, and exposes no public API, so the coverage source filter has a
 * file to match and `composer test` stays green.
 */
#[CoversClass(Skeleton::class)]
final class SkeletonTest extends TestCase
{
    /**
     * Test that a Skeleton instance is produced when the class is constructed with no arguments.
     */
    public function testConstructorReturnsSkeletonInstanceWhenInstantiatedWithoutArguments(): void
    {
        $skeleton = new Skeleton();

        // @phpstan-ignore-next-line
        self::assertInstanceOf(Skeleton::class, $skeleton);
    }

    /**
     * Test that the placeholder is declared final when its class definition is reflected.
     */
    public function testSkeletonClassIsDeclaredFinalWhenReflected(): void
    {
        $reflection = new ReflectionClass(Skeleton::class);

        self::assertTrue($reflection->isFinal());
    }

    /**
     * Test that the placeholder exposes no public methods when its class definition is reflected.
     */
    public function testSkeletonClassDeclaresNoMethodsWhenReflected(): void
    {
        $reflection = new ReflectionClass(Skeleton::class);

        self::assertCount(0, $reflection->getMethods());
    }
}
