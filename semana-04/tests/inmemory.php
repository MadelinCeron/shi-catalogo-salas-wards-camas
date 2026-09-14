<?php

require_once __DIR__
    . '/../src/Domain/BedStatus.php';

require_once __DIR__
    . '/../src/Domain/Ward.php';

require_once __DIR__
    . '/../src/Domain/Bed.php';

require_once __DIR__
    . '/../src/Application/WardRepository.php';

require_once __DIR__
    . '/../src/Application/BedRepository.php';

require_once __DIR__
    . '/../src/Persistence/InMemoryWardRepository.php';

require_once __DIR__
    . '/../src/Persistence/InMemoryBedRepository.php';

use MicroHis\Domain\Bed;
use MicroHis\Domain\BedStatus;
use MicroHis\Domain\Ward;
use MicroHis\Persistence\InMemoryBedRepository;
use MicroHis\Persistence\InMemoryWardRepository;

function verify(
    bool $condition,
    string $message
): void {
    if (! $condition) {
        throw new RuntimeException($message);
    }
}

/*
|--------------------------------------------------------------------------
| Prueba 1: guardar Ward en memoria
|--------------------------------------------------------------------------
*/

$wardRepository = new InMemoryWardRepository();

$ward = $wardRepository->save(
    new Ward(
        null,
        'Pediatría',
        '2',
        'A'
    )
);

verify(
    $ward->getId() === 1,
    'El Ward debería obtener ID 1.'
);

verify(
    count($wardRepository->all()) === 1,
    'Debe existir un Ward almacenado.'
);

/*
|--------------------------------------------------------------------------
| Prueba 2: guardar cama en memoria
|--------------------------------------------------------------------------
*/

$bedRepository = new InMemoryBedRepository();

$bed = $bedRepository->save(
    new Bed(
        null,
        $ward->getId(),
        'PED-01',
        BedStatus::AVAILABLE,
        'Dato ficticio'
    )
);

verify(
    $bed->getId() === 1,
    'La cama debería obtener ID 1.'
);

verify(
    count($bedRepository->all()) === 1,
    'Debe existir una cama almacenada.'
);

/*
|--------------------------------------------------------------------------
| Prueba 3: detectar código existente dentro del Ward
|--------------------------------------------------------------------------
*/

verify(
    $bedRepository->codeExistsInWard(
        $ward->getId(),
        'PED-01'
    ),
    'PED-01 debería existir dentro del Ward.'
);

/*
|--------------------------------------------------------------------------
| Prueba 4: comparación sin distinguir mayúsculas
|--------------------------------------------------------------------------
*/

verify(
    $bedRepository->codeExistsInWard(
        $ward->getId(),
        'ped-01'
    ),
    'La búsqueda debe detectar el código sin importar mayúsculas.'
);

/*
|--------------------------------------------------------------------------
| Prueba 5: código inexistente
|--------------------------------------------------------------------------
*/

verify(
    ! $bedRepository->codeExistsInWard(
        $ward->getId(),
        'PED-99'
    ),
    'PED-99 no debería existir.'
);

echo "Pruebas InMemory ejecutadas correctamente." . PHP_EOL;