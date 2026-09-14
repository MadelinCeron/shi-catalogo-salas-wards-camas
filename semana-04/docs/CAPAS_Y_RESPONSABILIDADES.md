# Semana 04 — Arquitectura en capas y patrón Repository

## Módulo

Catálogo de salas, wards y camas.

## Flujo trabajado

Creación de sala y cama con control de estado operativo.

## Objetivo

Continuar el mismo Micro-HIS desarrollado durante la Semana 03,
incorporando una organización MVC y el patrón Repository.

---

## Arquitectura MVC

### Model

El modelo está representado principalmente por las entidades del dominio:

- Ward
- Bed
- BedStatus

Estas clases contienen la información y reglas propias del módulo.

### View

La vista se encuentra en:

`src/Presentation/WardBedView.php`

Su responsabilidad es generar la interfaz HTML que permite ingresar:

- nombre de Ward;
- piso;
- edificio;
- código de cama;
- estado operativo;
- notas.

La vista no contiene consultas SQL.

### Controller

El controlador se encuentra en:

`src/Presentation/WardBedController.php`

Su función es recibir los datos enviados por la vista y delegar la operación
al caso de uso de Application.

El controlador no contiene SQL ni reglas de negocio.

---

## Capas

### Presentation

Responsable de la interacción con el usuario.

Objetos principales:

- WardBedController
- WardBedView
- public/index.php

### Application

Coordina el flujo del sistema.

Objetos principales:

- CreateWardAndBed
- WardRepository
- BedRepository

Application utiliza interfaces Repository y no conoce los detalles de PDO.

### Domain

Contiene el núcleo del negocio.

Objetos principales:

- Ward
- Bed
- BedStatus

Responsabilidades:

- validar datos propios de Ward;
- validar datos propios de Bed;
- representar estados operativos válidos.

### Persistence

Contiene las implementaciones concretas del acceso a datos.

Adaptadores disponibles:

- PdoWardRepository
- PdoBedRepository
- InMemoryWardRepository
- InMemoryBedRepository

---

## Patrón Repository

Las interfaces:

- WardRepository
- BedRepository

definen las operaciones que Application necesita para almacenar y consultar datos.

La implementación concreta puede variar sin modificar el caso de uso.

### Adaptadores PDO

Los adaptadores PDO permiten persistir información en una base de datos.

Utilizan sentencias preparadas para separar valores de las consultas SQL.

### Adaptadores InMemory

Los adaptadores InMemory almacenan objetos temporalmente en arreglos.

Son útiles para:

- pruebas automatizadas;
- dobles de prueba;
- ejecutar casos de uso sin depender de una base de datos real.

---

## Objetos reutilizables

Los principales objetos reutilizables son:

- WardRepository
- BedRepository
- PdoWardRepository
- PdoBedRepository
- InMemoryWardRepository
- InMemoryBedRepository
- WardBedController
- WardBedView
- CreateWardAndBed

---

## Dependencias

El flujo principal queda organizado así:

```text
View
  ↓
Controller
  ↓
Application
  ↓
Domain

Application
  ↓
Repository Interface
  ↓
Persistence Adapter
  ↓
Base de datos / InMemory