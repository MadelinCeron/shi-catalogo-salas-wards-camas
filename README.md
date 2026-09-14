# Sistema Hospitalario Integrado 2026

## Catálogo de salas, wards y camas

### Presentación

Este repositorio corresponde al módulo **Catálogo de salas, wards y camas** del proyecto académico **Sistema Hospitalario Integrado 2026**.

El objetivo del módulo es gestionar las salas o unidades hospitalarias y las camas asociadas a cada una de ellas, incluyendo el control de su estado operativo.

El flujo principal trabajado es:

> **Creación de sala y cama con control de estado operativo.**

El proyecto se desarrolla progresivamente por semanas. Cada carpeta contiene el código, documentación, diagramas, pruebas y evidencias correspondientes a cada etapa.

---

## Información general

| Dato | Información |
|---|---|
| Estudiante | Madelin Jazmín Cerón Molina |
| GitHub | MadelinCeron |
| Proyecto | Sistema Hospitalario Integrado 2026 |
| Módulo | Catálogo de salas, wards y camas |
| Rama principal | `main` |
| Rama de integración | `developer` |

---

# Avance por semanas

## Semana 01 — Diagramas UML ✅

Se realizó el análisis inicial del módulo mediante **diagramas UML**, incluyendo casos de uso, actividad y secuencia.

También se documentó la evidencia Git y los archivos necesarios para la defensa de la actividad.

📁 Más información: [`semana-01/`](semana-01/)

---

## Semana 02 — Requisitos y principios SOLID ✅

Se definieron los **requisitos funcionales y no funcionales**, criterios de aceptación y reglas principales del módulo.

También se trabajó con principios **SOLID**, especialmente la separación de responsabilidades.

📁 Más información: [`semana-02/`](semana-02/)

---

## Semana 03 — Diseño arquitectónico y Micro-HIS ✅

Se inició la implementación de un **Micro-HIS en PHP 8.2+ vanilla**, organizado en las capas:

`Presentation → Application → Domain → Persistence`

Se incorporó persistencia mediante **PDO**, reglas de dominio, pruebas automatizadas y documentación arquitectónica C4/UML.

📁 Más información: [`semana-03/`](semana-03/)

---

## Semana 04 — Arquitectura en capas y Repository ✅

Se continuó el Micro-HIS de la Semana 03 incorporando una organización **MVC** y el patrón **Repository**.

Se implementaron adaptadores **PDO e InMemory**, separación entre View y Controller, nuevas pruebas y documentación de capas y responsabilidades.

📁 Más información: [`semana-04/`](semana-04/)

---

# Estado actual

| Semana | Tema | Estado |
|---|---|---|
| 01 | Diagramas UML | ✅ Completada |
| 02 | Requisitos y SOLID | ✅ Completada |
| 03 | Diseño arquitectónico y Micro-HIS | ✅ Completada |
| 04 | MVC y patrón Repository | ✅ Completada |

---

# Arquitectura actual

Hasta la Semana 04, el módulo mantiene la siguiente organización general:

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
Repository
  ↓
Persistence
  ├── PDO
  └── InMemory
```

---

# Tecnologías utilizadas

- PHP 8.2+
- PDO
- SQLite
- HTML
- CSS
- PlantUML
- Git
- GitHub

---

# Organización del repositorio

```text
shi-catalogo-salas-wards-camas/
│
├── semana-01/
├── semana-02/
├── semana-03/
├── semana-04/
├── docs/
├── .gitignore
└── README.md
```

Cada carpeta semanal contiene su propio `README.md` con la explicación detallada del trabajo realizado.

---

# Repositorio público

https://github.com/MadelinCeron/shi-catalogo-salas-wards-camas

---

## Proyecto académico

**Sistema Hospitalario Integrado 2026**

**Módulo:** Catálogo de salas, wards y camas.

El repositorio continuará actualizándose conforme se desarrollen las siguientes semanas del curso.