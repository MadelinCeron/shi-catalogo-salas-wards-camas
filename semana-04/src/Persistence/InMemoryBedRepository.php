<?php

namespace MicroHis\Persistence;

use MicroHis\Application\BedRepository;
use MicroHis\Domain\Bed;

class InMemoryBedRepository implements BedRepository
{
    /**
     * @var array<int, Bed>
     */
    private array $beds = [];

    private int $nextId = 1;

    public function save(Bed $bed): Bed
    {
        $savedBed = new Bed(
            $this->nextId++,
            $bed->getWardId(),
            $bed->getCode(),
            $bed->getStatus(),
            $bed->getNotes()
        );

        $this->beds[$savedBed->getId()] = $savedBed;

        return $savedBed;
    }

    public function codeExistsInWard(
        int $wardId,
        string $code
    ): bool {
        foreach ($this->beds as $bed) {
            if (
                $bed->getWardId() === $wardId
                && strtoupper($bed->getCode()) === strtoupper(trim($code))
            ) {
                return true;
            }
        }

        return false;
    }

    public function all(): array
    {
        return $this->beds;
    }
}