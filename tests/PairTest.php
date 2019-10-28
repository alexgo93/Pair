<?php

require_once __DIR__ . '/../src/Pair.php';

use Data\Pair\Pair;
use PHPUnit\Framework\TestCase;

Class PairTest extends TestCase
{
    private $pair;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->pair = new Pair(1, new Pair(3,4));
        parent::__construct($name, $data, $dataName);
    }

    public function testPairCreating(): void
    {
        $this->assertInstanceOf(Pair::class, $this->pair, "Your object is not instance of Pair");
    }

    public function testCarMethod(): void
    {
        $this->assertTrue($this->pair->car() == 1, "Car method returns value isn't equals assertion value");
    }

    public function testCdrMethod(): void
    {
        $this->assertTrue("3, 4" == $this->pair->cdr(), "Cdr method returns value isn't equals assertion value");
    }

    public function testPairToString(): void
    {
        $this->assertIsString((string)$this->pair, "Return value not a string type");
    }
}