<?php

namespace MicroHis\Persistence;

use MicroHis\Application\WardRepository;
use MicroHis\Domain\Ward;

class InMemoryWardRepository implements WardRepository
{
    /**
     * @var array<int, Ward>
     */
    private array $wards = [];

    private int $nextId = 1;

    public function save(Ward $ward): Ward
    {
        $savedWard = new Ward(
            $this->nextId++,
            $ward->getName(),
            $ward->getFloor(),
            $ward->getBuilding()
        );

        $this->wards[$savedWard->getId()] = $savedWard;

        return $savedWard;
    }

    public function all(): array
    {
        return $this->wards;
    }
}