<?php

namespace Alura\Pdo\Domain\Model;

class Phone
{
    private ?int $id;
    private string $area_code;
    private string $number;

    public function __construct(?int $id, string $area_code, string $number)
    {
        $this->id = $id;
        $this->name = $area_code;
        $this->birthDate = $number;
    }

    public function formattedPhone(): string
    {
        return "($this->area_code) $this->number";
    }
}
