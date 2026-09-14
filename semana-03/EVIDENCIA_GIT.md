# Evidencia Git — Semana 03

## Estudiante

Madelin Jazmín Cerón Molina

## Módulo

Catálogo de salas, wards y camas.

## Rama

`feature/week-03-micro-his`

## Actividad

Diseño arquitectónico, vistas y patrones.

## Avance realizado

Durante la Semana 03 se desarrolló un Micro-HIS en PHP 8.2+ vanilla para el flujo:

**Creación de sala y cama con control de estado operativo.**

La solución contiene:

- Presentation.
- Application.
- Domain.
- Persistence.
- PDO.
- Sentencias preparadas.
- Interfaces Repository.
- Controlador.
- Pruebas automatizadas.
- Vista arquitectónica C4/UML.

## Pruebas

Se encuentran cubiertos:

- camino feliz;
- regla de dominio;
- error de persistencia;
- código duplicado;
- estado operativo inválido.

## Artefactos de arquitectura

- `docs/arquitectura-c4.puml`
- `docs/ARQUITECTURA.md`

## Flujo Git

```text
main
└── developer
    └── feature/week-03-micro-his