<?php

namespace Data\Pair;

/**
 * Class Pair
 *
 * Pair data structure
 *
 * @package Data\Pair
 */
class Pair
{
    /**
     * @var mixed $first
     */
    private $first;

    /**
     * @var mixed $second
     */
    private $second;

    /**
     * Pair constructor.
     * @param mixed $a
     * @param mixed $b
     */
    public function __construct($a, $b)
    {
        $this->first = $a;
        $this->second = $b;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $str = "{$this->car()}, {$this->cdr()}";
        return $str;
    }

    /**
     * @return mixed
     */
    public function car()
    {
        return $this->first;
    }

    /**
     * @return mixed
     */
    public function cdr()
    {
        return $this->second;
    }
}
