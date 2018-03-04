<?php

declare(strict_types=1);

namespace XML\Tests;

use Spatie\Snapshots\MatchesSnapshots;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    use MatchesSnapshots;
}
