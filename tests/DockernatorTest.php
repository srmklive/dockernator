<?php

namespace Srmklive\Dockernator\Tests;

use PHPUnit\Framework\TestCase;
use Srmklive\Dockernator\Generator as NameGenerator;

class DockernatorTest extends TestCase
{
    /** @var \Srmklive\Dockernator\Generator */
    protected $generator;

    protected function setUp(): void
    {
        $this->generator = new NameGenerator();
    }

    /** @test */
    public function it_can_generate_a_name()
    {
        $name = $this->generator->generate();

        $this->assertTrue(strpos($name, '-') !== false);
        $this->assertNotEmpty($name);
    }

    /** @test */
    public function it_can_set_different_delimiter()
    {
        $prefix = '-';
        $name = $this->generator->setDelimiterString($prefix)->generate();

        $this->assertTrue(strpos($name, $prefix) !== false);
        $this->assertNotEmpty($name);
    }
}