   <h1>Task Manager con Laravel</h1>
    <ul>
        <li>Aplicación con registro de usuarios, creación de tareas, visualización, edición y comentarios.</li>
        <li>Notificaciones vía email al crear y completar tareas</li>
    </ul>


    <h1>Instalación</h1>
    <h2>Siga estos pasos para configurar y ejecutar el proyecto en su máquina local:</h2>
    <pre>
        <code>git clone https://github.com/apizarro1204/TaskManager.git</code>
    </pre>
    <p>Luego, crea la base de datos necesaria:</p>
    <pre>
        <code>php artisan db:create</code>
    </pre>
    <p>Ejecuta las migraciones iniciales y las semillas:</p>
    <pre>
        <code>php artisan migrate --seed</code>
    </pre>
    <p>No olvides editar las credenciales de tu base de datos en .env</p>
    <pre>
        <code>DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=tubasededatos
            DB_USERNAME=tuusuario
            DB_PASSWORD=tucontraseña
        </code>
    </pre>

    <h2>Uso</h2>
    <p>Una vez que hayas configurado y ejecutado el proyecto, puedes acceder a la aplicación en tu navegador web. Aquí puedes registrar usuarios, crear tareas y realizar diversas operaciones de gestión de tareas.</p>


    <h2>Contacto</h2>
    <p>Si tienes alguna pregunta, sugerencia o comentario, no dudes en ponerte en contacto conmigo a <a href="mailto:apizarro1204@gmail.com">apizarro1204@gmail.com</a>.</p>
