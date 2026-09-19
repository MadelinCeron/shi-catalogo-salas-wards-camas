# Semana 10 — Diseño responsive

## Módulo

**ASII-06 — Catálogo de salas, wards y camas**
**Estudiante:** Madelin Jazmín Cerón Molina
**GitHub:** `MadelinCeron`

## 1. Objetivo

Definir el comportamiento responsive del módulo **Catálogo de salas, wards y camas**, permitiendo que la información y las acciones principales puedan utilizarse correctamente desde computadoras, tablets y dispositivos móviles.

## 2. Dispositivos considerados

La interfaz debe adaptarse a:

* Escritorio.
* Tablet.
* Teléfono móvil.

El contenido debe reorganizarse según el espacio disponible sin perder información importante.

## 3. Distribución general

### Escritorio

En pantallas grandes se pueden mostrar:

* Título y acciones en una misma fila.
* Filtros horizontales.
* Listados en tabla.
* Varias acciones visibles por registro.

### Tablet

En tablets:

* Los filtros pueden dividirse en varias filas.
* Las tablas deben evitar desbordamiento horizontal.
* Los botones deben conservar un tamaño adecuado.

### Móvil

En pantallas pequeñas:

* Los elementos se organizan verticalmente.
* Los formularios utilizan todo el ancho disponible.
* Las acciones principales permanecen visibles.
* Las tablas pueden transformarse en tarjetas o listas.

## 4. Listado de Wards

En escritorio:

```text
Nombre | Piso | Edificio | Camas | Acciones
```

En móvil:

```text
Pediatría
Piso: 2
Edificio: A
Camas: 12
[Ver camas] [Editar]
```

La información principal debe mantenerse visible en ambos formatos.

## 5. Listado de camas

En escritorio:

```text
Código | Ward | Estado | Acciones
```

En móvil:

```text
PED-01
Ward: Pediatría
Estado: Disponible
[Ver] [Editar]
```

La vista móvil debe priorizar código, Ward y estado.

## 6. Formularios

Los formularios deben adaptarse al ancho de la pantalla.

Escritorio:

```text
Nombre        Piso
[________]    [________]

Edificio
[__________________]
```

Móvil:

```text
Nombre
[________________]

Piso
[________________]

Edificio
[________________]
```

Los campos no deben salir del área visible.

## 7. Filtros

Los filtros principales son:

* Ward.
* Estado.
* Código de cama.

En escritorio pueden mostrarse en una fila.

En móvil deben organizarse verticalmente:

```text
Ward
[Seleccionar]

Estado
[Seleccionar]

Código
[Buscar]

[Aplicar filtros]
```

## 8. Navegación

La navegación debe conservar las mismas acciones principales en cualquier tamaño de pantalla.

Flujo:

```text
Wards
  ↓
Detalle
  ↓
Camas
  ↓
Ver / registrar / editar
```

El cambio de dispositivo no debe modificar el flujo funcional.

## 9. Botones y acciones

Los botones deben:

* Tener texto legible.
* Ser fáciles de seleccionar.
* Mantener separación entre ellos.
* No quedar fuera de pantalla.
* Priorizar las acciones frecuentes.

En móvil, varias acciones pueden mostrarse verticalmente cuando no exista suficiente espacio.

## 10. Estados de cama

Los estados deben mantenerse visibles en cualquier dispositivo:

* `disponible`
* `ocupada`
* `limpieza`
* `mantenimiento`

El texto del estado no debe ocultarse por falta de espacio.

## 11. Imágenes y elementos visuales

Si se utilizan iconos o elementos gráficos:

* Deben adaptarse al contenedor.
* No deben provocar desplazamiento horizontal.
* No deben sustituir información textual importante.

## 12. Criterios responsive

La interfaz debe cumplir:

* Sin desplazamiento horizontal innecesario.
* Formularios adaptables.
* Texto legible.
* Botones accesibles.
* Información principal visible.
* Filtros utilizables.
* Tablas adaptadas a pantallas pequeñas.
* Navegación consistente.

## 13. Pruebas propuestas

Se debe revisar el módulo en diferentes tamaños:

```text
Móvil   → pantalla pequeña
Tablet  → pantalla mediana
Desktop → pantalla grande
```

Se verificará:

* Distribución.
* Legibilidad.
* Formularios.
* Botones.
* Listados.
* Filtros.
* Navegación.

## 14. Alcance

Esta semana incluye:

* Adaptación para escritorio.
* Adaptación para tablet.
* Adaptación para móvil.
* Comportamiento de tablas.
* Formularios responsive.
* Filtros.
* Botones y navegación.

No incluye todavía el prototipo navegable final.

## 15. Conclusión

El diseño responsive permite que **ASII-06** mantenga sus funciones principales en distintos tamaños de pantalla.

La propuesta prioriza la información de wards y camas, evita desbordamientos y mantiene accesibles las acciones más importantes en escritorio, tablet y móvil.
