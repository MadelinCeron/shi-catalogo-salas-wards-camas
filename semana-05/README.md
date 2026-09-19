# Semana 05 — Contrato API y plan de integración

## Módulo

**ASII-06 — Catálogo de salas, wards y camas**

**Estudiante:** Madelin Jazmín Cerón Molina
**GitHub:** `MadelinCeron`

---

## 1. Objetivo

Definir un contrato API inicial para consultar y administrar wards y camas, además de establecer un plan básico de integración con otros módulos del Sistema Hospitalario Integrado.

---

## 2. Recursos principales

El módulo trabaja con:

* `Ward`
* `Bed`

Relación:

```text
Ward 1 -------- * Bed
```

Cada cama pertenece a un Ward.

Estados operativos:

* `disponible`
* `ocupada`
* `limpieza`
* `mantenimiento`

---

## 3. Endpoints principales

### Wards

```http
GET /api/wards
GET /api/wards/{id}
POST /api/wards
PUT /api/wards/{id}
```

Ejemplo de registro:

```json
{
  "name": "Pediatría",
  "floor": "2",
  "building": "A"
}
```

### Camas

```http
GET /api/beds
GET /api/wards/{id}/beds
POST /api/beds
PUT /api/beds/{id}
PATCH /api/beds/{id}/status
GET /api/beds?status=disponible
```

Ejemplo de registro:

```json
{
  "ward_id": 1,
  "code": "PED-01",
  "status": "disponible"
}
```

Ejemplo de cambio de estado:

```json
{
  "status": "ocupada"
}
```

---

## 4. Respuestas

Respuesta correcta:

```json
{
  "success": true,
  "data": {}
}
```

Respuesta con error:

```json
{
  "success": false,
  "message": "Descripción del error"
}
```

---

## 5. Códigos HTTP

| Código | Uso                   |
| ------ | --------------------- |
| 200    | Operación exitosa     |
| 201    | Recurso creado        |
| 400    | Solicitud inválida    |
| 401    | No autenticado        |
| 403    | Sin permisos          |
| 404    | Recurso no encontrado |
| 422    | Error de validación   |
| 500    | Error interno         |

---

## 6. Validaciones principales

* El Ward debe existir.
* El código de cama es obligatorio.
* El estado debe ser válido.
* Cada cama debe pertenecer a un Ward.
* Las operaciones deben respetar el tenant correspondiente.

---

## 7. Plan de integración

### Admisión

Puede consultar camas disponibles:

```http
GET /api/beds?status=disponible
```

ASII-06 proporciona la información, pero no realiza la admisión.

### Traslados

Puede consultar wards y camas para conocer posibles destinos.

La lógica del traslado permanece fuera de ASII-06.

### Altas

Puede consultar la cama relacionada con el paciente y coordinar la actualización de su estado.

---

## 8. Flujo general

```text
Módulo consumidor
        ↓
Petición HTTP
        ↓
API ASII-06
        ↓
Application
        ↓
Repository
        ↓
Persistencia
        ↓
Respuesta JSON
```

---

## 9. Responsabilidades

### ASII-06

* Administración de wards.
* Administración de camas.
* Estados operativos.
* Consultas del catálogo.
* Contrato API.

### Otros módulos

* Admisiones.
* Traslados.
* Altas.
* Pacientes.
* Usuarios y permisos.

---

## 10. Alcance de la Semana 05

Esta entrega incluye:

* Contrato API.
* Endpoints principales.
* Payloads básicos.
* Respuestas.
* Códigos HTTP.
* Validaciones.
* Plan de integración.

No incluye implementación completa de backend o frontend.

---

## 11. Conclusión

La Semana 05 define cómo otros módulos podrán comunicarse con ASII-06 mediante un contrato API claro.

También establece un plan de integración que mantiene separadas las responsabilidades del catálogo y de los demás módulos hospitalarios.
