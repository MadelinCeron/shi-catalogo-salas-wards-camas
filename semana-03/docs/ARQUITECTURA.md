# Arquitectura — Semana 03

## Módulo

Catálogo de salas, wards y camas.

## Flujo trabajado

Creación de sala y cama con control de estado operativo.

## Tecnología

El Micro-HIS fue desarrollado utilizando PHP 8.2+ vanilla, sin framework.

## Capas

### Presentation

Gestiona la entrada y salida del sistema.

Incluye:

- formulario web;
- controlador.

El controlador recibe los datos y delega la ejecución hacia Application.

### Application

Coordina el caso de uso principal.

Incluye:

- CreateWardAndBed;
- WardRepository;
- BedRepository.

Application depende de interfaces Repository y no de PDO directamente.

### Domain

Contiene las entidades y reglas de negocio.

Incluye:

- Ward;
- Bed;
- BedStatus.

El dominio valida información propia del módulo como:

- nombre obligatorio de Ward;
- código obligatorio de cama;
- pertenencia de la cama a un Ward;
- estados operativos permitidos.

### Persistence

Implementa el acceso a datos mediante PDO.

Incluye:

- PdoWardRepository;
- PdoBedRepository.

Las consultas utilizan sentencias preparadas.

## Dependencias

El flujo principal es:

Presentation → Application → Domain

Application → Repository

Persistence → Repository → Base de datos

## Decisión arquitectónica

La lógica de negocio no se encuentra dentro del controlador ni en las consultas SQL.

Esto permite separar responsabilidades y facilita las pruebas automatizadas.