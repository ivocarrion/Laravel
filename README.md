<h2>Evaluación de conocimientos del framework Laravel</h2>
<p>Primer proyecto desarrollado con Laravel, siguiendo los requerimientos de la empresa. Para comenzar, se debe crear la base de datos "laravel" en tu base de datos, a continuación ejecutar el comando <code>php artisan migrate:seed</code> y se crearán las tablas users, escuelas y  alumnos con datos faker. <br/>
También se creará el usuario <code>admin@admin.com</code> con contraseña <code>password</code> que permitirá acceder a la gestión.</p>
<p>
Proyecto en Laravel para administrar escuelas y sus alumnos:<br/>
<ul>
<li>Una escuela tendrá como mínimo los siguientes campos</li>
    <ul>
        <li>Nombre (requerido)</li>
         <li> Dirección (requerido)</li>
         <li> Logotipo (mínimo 200x200 y como máximo 2MB)</li>
         <li> Correo electrónico</li>
         <li> Teléfono</li>
         <li> Página web</li>
    </ul>
<li>Un alumno tendrá como mínimo:</li>
    <ul>
        <li> Nombre (requerido)</li>
        <li>Apellidos (requerido)</li>
        <li>Fecha de nacimiento (requerido)</li>
        <li>Ciudad</li>
        <li>Escuela (clave foranea a escuela)</li>
    </ul>
  </ul>  
</p>
  <p>
 <li>Usar las migraciones y los Seeds de Laravel para crear el esquema anterior de modelo de datos</li>
 <li>Usar los Resource Controller de Laravel para crear la funcionalidad CRUD de los modelos, creando el menú y los botones necesarios para gestionar cada uno de ellos.</li>
 <li>Usar la paginación para mostrar las listas de cada uno</li>
 <li>Guardar los logotipos de las escuelas para que sean públicos.</li>
 <li>Crear un usuario administrador que pueda entrar a la gestión y pueda administrar las escuelas y los alumnos, con usuario admin@admin.com y contraseña password.</li>
 <li>Utilizar un diseño Bootstrap para que sea adaptativo</li>
 <li>El diseño no será importante para la valoración.</li>
</p>
