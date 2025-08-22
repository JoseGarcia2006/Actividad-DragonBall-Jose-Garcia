🐉 Proyecto Backend - Tarjetas Dragon Ball Z con Login

📋 Descripción del Proyecto
Este proyecto presenta un sistema web temático de Dragon Ball Z que incluye un formulario de login y una página para mostrar tarjetas de personajes en formato de cards.
El frontend está completamente desarrollado, pero se requiere completar el backend en PHP para que el sistema funcione correctamente.

🎯 Objetivo de la Actividad
Finalizar el desarrollo del backend para implementar un sistema funcional de:
Autenticación de usuarios (login y sesiones)
Gestión de tarjetas personalizadas por usuario

## 🛠️ Cómo Funciona

### 1. Inicio de Sesión
- El usuario ingresa su **nombre de usuario** y **contraseña** en `index.html`.
- Se valida la información con la tabla `usuarios` en la base de datos.
- Si los datos son correctos:
  - Se crea una **sesión PHP** (`$_SESSION['usuario_id']`).
  - El usuario es redirigido a `tarjetas.html`.

### 2. Visualización de Tarjetas
- Al cargar `tarjetas.html`, se realiza una petición al backend.
- Se ejecuta una consulta SQL para obtener las tarjetas del usuario logueado:

- ## 🧰 Tecnologías Utilizadas

### 🖥️ Frontend
- **HTML5** – Estructura de las páginas (`index.html`, `tarjetas.html`)
- **CSS3** – Estilos personalizados con temática de Dragon Ball Z
- **JavaScript** – Lógica dinámica para cargar tarjetas en `tarjetas.js`

### 🖧 Backend (a desarrollar)
- **PHP** – Lenguaje principal para lógica del servidor
- **PHP Sessions** – Para manejo de sesiones e inicio de sesión de usuarios

### 🗃️ Base de Datos
- **MySQL / phpMyAdmin** – Motor de base de datos relacional
- **Consultas SQL** – Uso de `INNER JOIN` para relacionar usuarios con sus tarjetas

