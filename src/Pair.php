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
     * @var Pair $second
     */
    private $second;

    /**
     * Pair constructor.
     * @param mixed $a
     * @param Pair|null $b
     */
    public function __construct($a = null, Pair $b = null)
    {
        $this->first = $a;
        $this->second = $b;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $strArr = [];
        $strArr[] = $this->getValue() == null ? 'null' : $this->getValue();
        $strArr[] =  $this->getNext() == null ? 'null' : $this->getNext();
        $str = implode(",", $strArr);
        return $str;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->first;
    }

    /**
     * @return Pair|null
     */
    public function getNext(): ?Pair
    {
        return $this->second;
    }
}
