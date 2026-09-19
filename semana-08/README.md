# Semana 08 — Experiencia de usuario (UX)

## Módulo

**ASII-06 — Catálogo de salas, wards y camas**
**Estudiante:** Madelin Jazmín Cerón Molina
**GitHub:** `MadelinCeron`

## 1. Objetivo

Definir la experiencia de usuario del módulo **Catálogo de salas, wards y camas**, considerando las acciones principales, el flujo de navegación, la organización de la información y la retroalimentación que recibe el usuario.

## 2. Usuarios principales

Los usuarios considerados son:

* Administrador hospitalario.
* Personal autorizado.
* Personal relacionado con admisiones y gestión hospitalaria.

Cada usuario debe visualizar únicamente las opciones permitidas según sus permisos.

## 3. Necesidades del usuario

El usuario debe poder:

* Consultar wards.
* Consultar camas por Ward.
* Identificar el estado de una cama.
* Registrar wards.
* Registrar camas.
* Actualizar información.
* Cambiar el estado de una cama.
* Localizar camas disponibles.

## 4. Pantallas principales

### Listado de Wards

Debe mostrar:

* Nombre.
* Piso.
* Edificio.
* Cantidad de camas.
* Acciones disponibles.

Acciones principales:

* Ver detalle.
* Editar.
* Consultar camas.
* Registrar Ward.

### Detalle de Ward

Debe mostrar:

* Nombre.
* Piso.
* Edificio.
* Camas relacionadas.

### Listado de camas

Debe mostrar:

* Código.
* Ward.
* Estado.
* Acciones.

Ejemplo:

```text
PED-01 | Pediatría | Disponible
PED-02 | Pediatría | Ocupada
PED-03 | Pediatría | Limpieza
```

### Formulario de Ward

Campos principales:

* Nombre.
* Piso.
* Edificio.

### Formulario de cama

Campos principales:

* Ward.
* Código.
* Estado.

El Ward debe seleccionarse entre los registros existentes.

## 5. Flujo de consulta

```text
Usuario
   ↓
Listado de Wards
   ↓
Selecciona Ward
   ↓
Listado de camas
   ↓
Consulta información
```

## 6. Flujo de registro

```text
Listado de camas
      ↓
Nueva cama
      ↓
Completar formulario
      ↓
Validar datos
      ↓
Guardar
      ↓
Confirmación
```

Después de guardar, el usuario debe recibir confirmación de la operación.

## 7. Cambio de estado

Estados permitidos:

* `disponible`
* `ocupada`
* `limpieza`
* `mantenimiento`

Antes de guardar se debe validar la operación.

Ejemplo:

```text
Estado actualizado correctamente.
```

## 8. Mensajes al usuario

### Éxito

```text
Ward registrado correctamente.
Cama registrada correctamente.
```

### Error

```text
Complete los campos obligatorios.
No se encontró la cama solicitada.
```

### Permisos

```text
No tiene permisos para realizar esta operación.
```

## 9. Organización visual

Orden sugerido:

```text
Título
Descripción breve
Filtros o búsqueda
Acción principal
Listado de información
Acciones por registro
```

Las acciones importantes deben ser fáciles de localizar.

## 10. Búsqueda y filtros

Se pueden utilizar filtros como:

* Ward.
* Estado de cama.
* Código de cama.

Ejemplo:

```text
Estado: Disponible
Ward: Pediatría
```

## 11. Estados vacíos

Cuando no existan registros:

```text
No hay camas registradas en este Ward.
```

Si el usuario tiene permisos:

```text
Registrar cama
```

## 12. Confirmaciones

Las operaciones que modifican información importante deben mostrar confirmación.

Ejemplo:

```text
¿Desea cambiar el estado de esta cama?
```

## 13. Consistencia

Las pantallas deben utilizar de forma consistente:

* Nombres de campos.
* Botones.
* Estados.
* Mensajes.
* Orden de información.
* Acciones.

## 14. Criterios básicos de UX

La propuesta busca:

* Navegación sencilla.
* Información clara.
* Acciones visibles.
* Formularios breves.
* Retroalimentación después de cada operación.
* Mensajes de error comprensibles.
* Estados fáciles de reconocer.
* Pocos pasos para tareas frecuentes.

## 15. Relación con el módulo

ASII-06 permite administrar y consultar wards y camas, pero no incluye:

* Admisión de pacientes.
* Traslados completos.
* Altas hospitalarias.
* Administración de usuarios.

Estas funciones corresponden a otros módulos.

## 16. Flujo general de UX

```text
Ingreso al módulo
      ↓
Listado de Wards
      ↓
Seleccionar Ward
      ↓
Consultar camas
      ↓
Ver / registrar / editar
      ↓
Confirmación
```

## 17. Alcance de la Semana 08

Incluye:

* Usuarios principales.
* Necesidades del usuario.
* Pantallas principales.
* Flujos de navegación.
* Formularios.
* Mensajes.
* Búsqueda y filtros.
* Estados vacíos.
* Criterios básicos de UX.

No incluye todavía el diseño visual definitivo.

## 18. Conclusión

La propuesta de UX busca que el módulo **ASII-06** permita consultar y administrar wards y camas de forma clara y sencilla.

Los flujos definidos reducen pasos innecesarios y proporcionan retroalimentación durante las principales operaciones del catálogo hospitalario.
