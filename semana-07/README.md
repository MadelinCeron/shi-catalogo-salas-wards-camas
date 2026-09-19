# Semana 07 — Componentes del módulo

## Módulo

**ASII-06 — Catálogo de salas, wards y camas**

**Estudiante:** Madelin Jazmín Cerón Molina
**GitHub:** `MadelinCeron`

---

## 1. Objetivo

Identificar y documentar los componentes principales del módulo **Catálogo de salas, wards y camas**, indicando sus responsabilidades y la relación entre ellos.

La organización por componentes permite mantener separadas las funciones de presentación, aplicación, dominio y persistencia.

---

## 2. Componentes principales

El módulo se organiza en:

* Presentación.
* Aplicación.
* Dominio.
* Persistencia.

Flujo general:

```text
Presentación
     ↓
Aplicación
     ↓
Dominio
     ↓
Repository
     ↓
Persistencia
```

Cada componente mantiene una responsabilidad específica.

---

## 3. Presentación

La capa de presentación recibe solicitudes del usuario o de otros módulos.

Componente principal:

```text
WardBedController
```

Responsabilidades:

* Recibir solicitudes.
* Validar datos básicos.
* Invocar casos de uso.
* Preparar respuestas.
* Evitar lógica de negocio.

Ejemplo:

```text
Solicitud
   ↓
WardBedController
   ↓
Caso de uso
```

---

## 4. Aplicación

La capa de aplicación coordina las operaciones del módulo.

Entre sus operaciones se encuentran:

* Crear Ward.
* Registrar camas.
* Consultar camas.
* Cambiar estados.

Los casos de uso utilizan interfaces Repository para acceder a la información.

```text
Controller
    ↓
Caso de uso
    ↓
Repository
```

La aplicación no debe depender directamente de la base de datos.

---

## 5. Dominio

El dominio representa los conceptos principales del catálogo.

### Ward

Representa una sala o unidad hospitalaria.

Responsabilidades:

* Mantener sus datos principales.
* Representar la unidad a la que pertenecen las camas.

### Bed

Representa una cama hospitalaria.

Responsabilidades:

* Mantener su código.
* Mantener el Ward relacionado.
* Mantener su estado operativo.

### BedStatus

Representa los estados permitidos de una cama:

* `disponible`
* `ocupada`
* `limpieza`
* `mantenimiento`

El dominio contiene las reglas principales del módulo.

---

## 6. Repository

Las interfaces Repository permiten separar la lógica de aplicación de la tecnología utilizada para almacenar información.

Interfaces principales:

```text
WardRepository
BedRepository
```

### WardRepository

Puede definir operaciones como:

* Guardar Ward.
* Buscar por identificador.
* Listar wards.

### BedRepository

Puede definir operaciones como:

* Guardar cama.
* Buscar cama.
* Listar por Ward.
* Consultar por estado.


## 7. Persistencia

La capa de persistencia implementa los contratos Repository.

Ejemplo:

```text
WardRepository
      ↑
PdoWardRepository
```

```text
BedRepository
      ↑
PdoBedRepository
```

También pueden utilizarse implementaciones en memoria para pruebas:

```text
InMemoryWardRepository
InMemoryBedRepository
```

Esto permite cambiar la forma de almacenamiento sin modificar la lógica del dominio.


## 8. Relación entre componentes

Ejemplo del registro de una cama:

```text
Usuario
   ↓
WardBedController
   ↓
Caso de uso
   ↓
BedRepository
   ↓
PdoBedRepository
   ↓
Base de datos
```

El controlador no accede directamente a la base de datos.

---

## 9. Responsabilidades por capa

### Presentación

Comunicación con el exterior.

### Aplicación

Coordinación de casos de uso.

### Dominio

Entidades y reglas del negocio.

### Persistencia

Almacenamiento y recuperación de información.

Esta separación evita concentrar toda la lógica en un solo componente.

---

## 10. Beneficios

La organización por componentes permite:

* Mantener responsabilidades claras.
* Reducir acoplamiento.
* Facilitar pruebas.
* Facilitar mantenimiento.
* Sustituir la persistencia sin modificar el dominio.
* Mejorar la organización del módulo.

---

## 11. Dependencias

Las dependencias principales siguen esta dirección:

```text
Presentación
     ↓
Aplicación
     ↓
Dominio
```

La persistencia implementa los contratos definidos mediante Repository.

El dominio no depende de controladores, vistas ni tecnologías de base de datos.


## 12. Relación con semanas anteriores

La Semana 03 definió la arquitectura inicial.

La Semana 04 aplicó la separación por capas y Repository.

La Semana 05 definió el contrato API y el plan de integración.

La Semana 07 organiza estos elementos en componentes con responsabilidades claras.


## 13. Alcance

Esta semana incluye:

* Identificación de componentes.
* Responsabilidad de cada componente.
* Relación entre capas.
* Uso de Repository.
* Flujo general del módulo.
* Separación de responsabilidades.

No se agregan nuevas reglas funcionales.


## 14. Conclusión

La definición de componentes organiza el módulo **ASII-06** manteniendo separadas las responsabilidades de presentación, aplicación, dominio y persistencia.

Esta estructura facilita el mantenimiento y evolución del catálogo de salas, wards y camas.
