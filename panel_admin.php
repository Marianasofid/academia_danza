```php
<?php
session_start();

// Verificar que el usuario haya iniciado sesión
if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit();
}

// Verificar que sea administrador
if ($_SESSION["rol"] != "admin") {
    header("Location: panel_estudiante.php");
    exit();
}

$nombre = $_SESSION["nombre"];
$apellido = $_SESSION["apellido"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panel de Administrador - Danza Viva Academy</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Encabezado -->
    <header class="bg-white shadow">

        <div class="max-w-6xl mx-auto px-6 py-5">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <div>
                    <h1 class="text-2xl font-bold text-pink-600">
                        Danza Viva Academy
                    </h1>

                    <p class="text-sm text-gray-500">
                        Panel de administrador
                    </p>
                </div>

                <a href="cerrar_sesion.php"
                   class="bg-red-500 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-600">
                    Cerrar sesión
                </a>

            </div>

        </div>

    </header>


    <!-- Bienvenida -->
    <section class="bg-pink-100 py-12">

        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-gray-900">
                ¡Bienvenido, <?php echo htmlspecialchars($nombre); ?>!
            </h2>

            <p class="text-gray-600 mt-2">
                Este es el panel de administración de Danza Viva Academy.
            </p>

        </div>

    </section>


    <!-- Opciones -->
    <main class="max-w-6xl mx-auto px-6 py-12">

        <h2 class="text-2xl font-bold mb-8 text-center">
            Administración de la academia
        </h2>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


            <!-- Clases -->
            <div class="bg-white rounded-2xl shadow p-6">

                <h3 class="text-xl font-bold text-pink-600 mb-3">
                    Clases
                </h3>

                <p class="text-gray-600 mb-5">
                    Consulta la información de las clases disponibles en la academia.
                </p>

                <a href="clases.php"
                   class="inline-block bg-pink-600 text-white px-5 py-2 rounded-lg hover:bg-pink-700">
                    Ver clases
                </a>

            </div>


            <!-- Horarios -->
            <div class="bg-white rounded-2xl shadow p-6">

                <h3 class="text-xl font-bold text-pink-600 mb-3">
                    Horarios
                </h3>

                <p class="text-gray-600 mb-5">
                    Consulta los horarios de las diferentes clases.
                </p>

                <a href="horarios.php"
                   class="inline-block bg-pink-600 text-white px-5 py-2 rounded-lg hover:bg-pink-700">
                    Ver horarios
                </a>

            </div>


            <!-- Inscripciones -->
            <div class="bg-white rounded-2xl shadow p-6">

                <h3 class="text-xl font-bold text-pink-600 mb-3">
                    Inscripciones
                </h3>

                <p class="text-gray-600 mb-5">
                    Consulta las inscripciones realizadas por los estudiantes.
                </p>

                <a href="inscripciones.php"
                   class="inline-block bg-pink-600 text-white px-5 py-2 rounded-lg hover:bg-pink-700">
                    Ver inscripciones
                </a>

            </div>


            <!-- Recursos -->
            <div class="bg-white rounded-2xl shadow p-6">

                <h3 class="text-xl font-bold text-pink-600 mb-3">
                    Recursos
                </h3>

                <p class="text-gray-600 mb-5">
                    Consulta los recursos disponibles para los estudiantes.
                </p>

                <a href="recursos.php"
                   class="inline-block bg-pink-600 text-white px-5 py-2 rounded-lg hover:bg-pink-700">
                    Ver recursos
                </a>

            </div>


            <!-- Contacto -->
            <div class="bg-white rounded-2xl shadow p-6">

                <h3 class="text-xl font-bold text-pink-600 mb-3">
                    Contacto
                </h3>

                <p class="text-gray-600 mb-5">
                    Consulta la información de contacto de la academia.
                </p>

                <a href="contacto.php"
                   class="inline-block bg-pink-600 text-white px-5 py-2 rounded-lg hover:bg-pink-700">
                    Ver contacto
                </a>

            </div>


            <!-- Página principal -->
            <div class="bg-white rounded-2xl shadow p-6">

                <h3 class="text-xl font-bold text-pink-600 mb-3">
                    Sitio web
                </h3>

                <p class="text-gray-600 mb-5">
                    Regresa a la página principal de Danza Viva Academy.
                </p>

                <a href="index.php"
                   class="inline-block bg-pink-600 text-white px-5 py-2 rounded-lg hover:bg-pink-700">
                    Ir al inicio
                </a>

            </div>

        </div>

    </main>


    <!-- Pie de página -->
    <footer class="bg-gray-900 text-white text-center py-6">

        <p class="text-sm">
            © 2032 Danza Viva Academy
        </p>

    </footer>

</body>

</html>
```
