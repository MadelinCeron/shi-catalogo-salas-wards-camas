# Semana 11 — Prototipo navegable

## Módulo

**ASII-06 — Catálogo de salas, wards y camas**
**Estudiante:** Madelin Jazmín Cerón Molina
**GitHub:** `MadelinCeron`

## 1. Objetivo

Crear un prototipo navegable del módulo **Catálogo de salas, wards y camas**, aplicando los criterios de componentes, UX, accesibilidad y diseño responsive definidos en semanas anteriores.

## 2. Alcance

El prototipo permite representar las principales acciones del módulo:

* Consultar wards.
* Visualizar información básica de cada Ward.
* Consultar camas asociadas.
* Identificar el estado de las camas.
* Simular el registro de una cama.
* Regresar al listado principal.

No utiliza backend ni base de datos real.

## 3. Pantallas

### Listado de Wards

Muestra los wards disponibles y permite consultar sus camas.

### Listado de camas

Muestra:

* Código.
* Ward.
* Estado.

### Registro de cama

Incluye:

* Ward.
* Código.
* Estado.
* Acción para guardar.

## 4. Navegación

```text
Inicio
  ↓
Listado de Wards
  ↓
Ver camas
  ↓
Listado de camas
  ↓
Registrar cama
```

El usuario puede regresar al listado anterior durante el recorrido.

## 5. Criterios aplicados

El prototipo considera:

* Navegación sencilla.
* Botones y textos claros.
* Estados visibles mediante texto.
* Formularios con etiquetas.
* Uso mediante teclado.
* Diseño adaptable.
* Mensajes de confirmación.
* Separación visual de la información.

## 6. Tecnologías

El prototipo utiliza:

* HTML.
* CSS.
* JavaScript.

Se utilizan únicamente para demostrar visualmente el comportamiento esperado del módulo.

## 7. Evidencia

Los archivos del prototipo se encuentran en:

```text
semana-11/prototipo/
```

Estructura:

```text
prototipo/
├── index.html
├── styles.css
└── app.js
```

## 8. Conclusión

El prototipo permite visualizar el flujo principal del módulo **ASII-06** antes de realizar una implementación completa.

La propuesta reúne los criterios de UX, accesibilidad y responsive definidos durante las semanas anteriores.
