<h2>Evaluación de conocimientos del framework Laravel</h2>
Primer proyecto desarrollado con Laravel, siguiendo los requerimientos de la empresa. Para comenzar, se debe crear la base de datos "laravel" 
en tu base de datos, a continuación ejecutar el comando
php artisan migrate:seed 
y se crearán las tablas users, escuelas y  alumnos con datos faker. 
También se creará el usuario "admin@admin.com" con contraseña "password" que permitirá acceder a la gestión.

Proyecto en Laravel para administrar escuelas y sus alumnos:
• Una escuela tendrá como mínimo los siguientes campos
    o Nombre (requerido)
    o Dirección (requerido)
    o Logotipo (mínimo 200x200 y como máximo 2MB)
    o Correo electrónico
    o Teléfono
    o Página web
• Un alumno tendrá como mínimo:
    o Nombre (requerido)
    o Apellidos (requerido)
    o Fecha de nacimiento (requerido)
    o Ciudad
    o Escuela (clave foranea a escuela)
    
• Usar las migraciones y los Seeds de Laravel para crear el esquema anterior de modelo de datos
• Usar los Resource Controller de Laravel para crear la funcionalidad CRUD de los modelos, creando el menú y los botones necesarios para gestionar cada uno de ellos.
• Usar la paginación para mostrar las listas de cada uno
• Guardar los logotipos de las escuelas para que sean públicos.
• Crear un usuario administrador que pueda entrar a la gestión y pueda administrar las escuelas y los alumnos, con usuario admin@admin.com y contraseña password.
• Utilizar un diseño Bootstrap para que sea adaptativo
• El diseño no será importante para la valoración.
