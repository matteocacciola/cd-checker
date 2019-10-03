<?php

namespace Selective\CdChecker\Test;

use PHPUnit\Framework\MockObject\MockObject;
use RuntimeException;
use Selective\CdChecker\DependencyFinder;
use PHPUnit\Framework\TestCase;
use SplFileInfo;

class DependencyFinderTest extends TestCase
{
    /**
     * @var DependencyFinder
     */
    private $dependencyFinder;

    /**
     * Setup / construct test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->dependencyFinder = new DependencyFinder();
    }

    /**
     * Test process file with file info false.
     *
     * @return void
     */
    public function testProcessFileWithSplFileInfoFalseExpectRuntimeException()
    {
        $this->expectException(RuntimeException::class);

        $splFileInfo = $this->createMock(SplFileInfo::class);
        $splFileInfo->method('getRealPath')
            ->willReturn(false);

        $this->dependencyFinder->processFile($splFileInfo, []);
    }
}
