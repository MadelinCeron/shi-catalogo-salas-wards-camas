# Evidencia Git — Semana 04

## Estudiante

Madelin Jazmín Cerón Molina

## Módulo

Catálogo de salas, wards y camas.

## Rama

`feature/week-04-repository`

## Actividad

Arquitectura en capas y patrón Repository.

## Avance realizado

Durante la Semana 04 se continuó el mismo Micro-HIS desarrollado en la Semana 03.

Se incorporaron:

- organización MVC;
- View independiente;
- Controller sin SQL;
- interfaces Repository;
- adaptadores PDO;
- adaptadores InMemory;
- pruebas de Repository InMemory;
- documentación de capas y responsabilidades;
- análisis de repositorio de datos compartido.

## Arquitectura

La solución mantiene las siguientes responsabilidades:

- Presentation
- Application
- Domain
- Persistence

## Repository

Interfaces:

- WardRepository
- BedRepository

Implementaciones PDO:

- PdoWardRepository
- PdoBedRepository

Implementaciones InMemory:

- InMemoryWardRepository
- InMemoryBedRepository

## Pruebas realizadas

Se ejecutó:

```bash
php semana-04/tests/inmemory.php