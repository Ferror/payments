<?php
declare(strict_types=1);

final class Clock
{
    private int $time;

    public static function fromDateTime(\DateTime $dateTime): self
    {
        return new self($dateTime->getTimestamp());
    }

    public function __construct(int $time)
    {
        $this->time = $time;
    }

    public function getTime(): int
    {
        return $this->time;
    }
}
