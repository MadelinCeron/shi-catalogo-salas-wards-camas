# Semana 09 — Usabilidad y accesibilidad

## Módulo

**ASII-06 — Catálogo de salas, wards y camas**
**Estudiante:** Madelin Jazmín Cerón Molina
**GitHub:** `MadelinCeron`

## 1. Objetivo

Definir criterios básicos de **usabilidad y accesibilidad** para el módulo de salas, wards y camas, buscando que las acciones principales sean fáciles de comprender y utilizar por personal autorizado.

## 2. Usabilidad

La interfaz debe permitir realizar las tareas principales con pocos pasos.
Acciones frecuentes:

* Consultar wards.
* Consultar camas.
* Buscar camas disponibles.
* Registrar Ward.
* Registrar cama.
* Editar información.
* Cambiar estado de una cama.

Las acciones deben utilizar nombres claros y mantenerse en posiciones consistentes.

## 3. Navegación

Flujo principal:

```text id="nav09"
Listado de Wards
      ↓
Seleccionar Ward
      ↓
Listado de camas
      ↓
Consultar / registrar / editar
```

El usuario debe poder regresar fácilmente al listado anterior.

## 4. Formularios

Los formularios deben:

* Mostrar etiquetas claras.
* Identificar campos obligatorios.
* Mantener un orden lógico.
* Mostrar errores cerca del campo correspondiente.
* Conservar los datos ingresados cuando exista un error.

Ejemplo:

```text id="form09"
Nombre del Ward *
[________________]

Piso
[________________]

Edificio
[________________]

[Guardar]
```

## 5. Mensajes

Los mensajes deben explicar claramente el resultado de una acción.

Éxito:

```text id="ok09"
Cama registrada correctamente.
```

Error:

```text id="err09"
Complete los campos obligatorios.
```

Permisos:

```text id="perm09"
No tiene permisos para realizar esta operación.
```

## 6. Accesibilidad con teclado

Las funciones principales deben poder utilizarse mediante teclado.
Se debe permitir:

* Navegar con `Tab`.
* Activar botones con teclado.
* Acceder a formularios sin utilizar únicamente el mouse.
* Mantener visible el elemento que tiene el foco.

Orden sugerido:

```text id="tab09"
Búsqueda → Filtros → Nueva cama → Listado → Acciones
```

## 7. Etiquetas y controles

Cada campo debe tener una etiqueta relacionada.
Ejemplo correcto:

```text id="label09"
Código de cama
[PED-01]
```

No se debe depender únicamente del texto de ejemplo dentro del campo para explicar su función.

## 8. Estados y colores

Los estados pueden diferenciarse visualmente, pero el color no debe ser el único indicador.

Ejemplo:

```text id="status09"
Disponible
Ocupada
Limpieza
Mantenimiento
```

El nombre del estado siempre debe aparecer como texto.

## 9. Contraste y legibilidad

La interfaz debe mantener:

* Texto fácil de leer.
* Contraste suficiente entre texto y fondo.
* Tamaños de fuente legibles.
* Botones claramente identificables.
* Espacio adecuado entre elementos interactivos.

## 10. Errores de validación

Los errores deben indicar:

1. Qué ocurrió.
2. Dónde ocurrió.
3. Qué debe corregir el usuario.

Ejemplo:

```text id="validation09"
El código de cama es obligatorio.
```

Es preferible a un mensaje genérico como:

```text id="generic09"
Error.
```

## 11. Búsqueda y filtros

Los filtros deben ser fáciles de identificar y modificar.
Filtros principales:

* Ward.
* Código de cama.
* Estado.

Ejemplo:

```text id="filter09"
Ward: Pediatría
Estado: Disponible
```

También debe existir una forma clara de limpiar los filtros.

## 12. Estados vacíos

Si no existen registros, se debe informar al usuario.
Ejemplo:

```text id="empty09"
No hay camas registradas en este Ward.
```

Si tiene permisos:

```text id="action09"
Registrar cama
```

## 13. Confirmaciones

Las acciones importantes deben solicitar confirmación cuando sea necesario.
Ejemplo:

```text id="confirm09"
¿Desea cambiar el estado de esta cama?
```

Las acciones normales de consulta no deben mostrar confirmaciones innecesarias.

## 14. Criterios de revisión

Para evaluar la propuesta se utilizarán los siguientes criterios:

* El usuario comprende las acciones disponibles.
* Los formularios muestran etiquetas claras.
* Los errores explican cómo corregir el problema.
* La navegación puede realizarse con teclado.
* El foco es visible.
* Los estados no dependen únicamente del color.
* Los textos mantienen buena legibilidad.
* Las tareas frecuentes requieren pocos pasos.

## 15. Alcance

Esta semana incluye:

* Usabilidad de navegación.
* Formularios.
* Mensajes.
* Accesibilidad con teclado.
* Etiquetas.
* Estados.
* Contraste y legibilidad.
* Validaciones.
* Búsqueda y filtros.

No incluye todavía la implementación visual definitiva del módulo.

## 16. Conclusión

Los criterios de usabilidad y accesibilidad definidos permiten que **ASII-06** presente información de wards y camas de forma clara y facilite las tareas frecuentes del personal autorizado.

La propuesta busca reducir errores de interacción y evitar que elementos importantes dependan únicamente del color o del uso del mouse.
