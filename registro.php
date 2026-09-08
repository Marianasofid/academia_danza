<?php

require_once "conexion.php";

$mensaje = "";
$tipo_mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $correo = trim($_POST["correo"]);
    $password = $_POST["password"];

    if ($nombre == "" || $apellido == "" || $correo == "" || $password == "") {

        $mensaje = "Por favor, completa todos los campos.";
        $tipo_mensaje = "error";

    } else {

        // Verificar si el correo ya existe
        $consulta = "SELECT id_usuario FROM usuario WHERE correo = ?";
        $resultado = $conexion->prepare($consulta);
        $resultado->bind_param("s", $correo);
        $resultado->execute();
        $resultado->store_result();

        if ($resultado->num_rows > 0) {

            $mensaje = "Ya existe una cuenta con este correo.";
            $tipo_mensaje = "error";

        } else {

            // Encriptar la contraseña
            $password_segura = password_hash($password, PASSWORD_DEFAULT);

            // Todos los usuarios nuevos serán estudiantes
            $rol = "estudiante";

            $consulta = "INSERT INTO usuario 
                        (nombre, apellido, correo, password, rol) 
                        VALUES (?, ?, ?, ?, ?)";

            $resultado = $conexion->prepare($consulta);
            $resultado->bind_param(
                "sssss",
                $nombre,
                $apellido,
                $correo,
                $password_segura,
                $rol
            );

            if ($resultado->execute()) {

                $mensaje = "Cuenta creada correctamente. Ya puedes iniciar sesión.";
                $tipo_mensaje = "exito";

            } else {

                $mensaje = "Ocurrió un error al crear la cuenta.";
                $tipo_mensaje = "error";
            }
        }

        $resultado->close();
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crear cuenta - Danza Viva Academy</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 text-gray-800">

    <!-- ENCABEZADO -->

    <header class="bg-white shadow">

        <div class="max-w-7xl mx-auto px-6 py-5">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <div class="text-center md:text-left">

                    <h1 class="text-2xl font-bold text-pink-600">
                        Danza Viva Academy
                    </h1>

                    <p class="text-sm text-gray-500">
                        Movimiento · Expresión · Pasión
                    </p>

                </div>

                <!-- MENÚ -->

                <nav>

                    <ul class="flex flex-wrap justify-center items-center gap-4 text-sm font-medium">

                        <li>
                            <a href="index.php"
                               class="hover:text-pink-600 transition">
                                Inicio
                            </a>
                        </li>

                        <li>
                            <a href="clases.php"
                               class="hover:text-pink-600 transition">
                                Clases
                            </a>
                        </li>

                        <li>
                            <a href="horarios.php"
                               class="hover:text-pink-600 transition">
                                Horarios
                            </a>
                        </li>

                        <li>
                            <a href="inscripciones.php"
                               class="hover:text-pink-600 transition">
                                Inscripciones
                            </a>
                        </li>

                        <li>
                            <a href="contacto.php"
                               class="hover:text-pink-600 transition">
                                Contacto
                            </a>
                        </li>

                        <!-- BOTÓN CREAR CUENTA -->

                        <li>

                            <a href="registro.php"
                               class="bg-pink-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-pink-700 transition">

                                Crear cuenta

                            </a>

                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </header>


    <!-- ENCABEZADO DE LA PÁGINA -->

    <section class="bg-pink-100 py-16">

        <div class="max-w-4xl mx-auto px-6 text-center">

            <p class="text-pink-600 font-semibold uppercase tracking-wide mb-3">
                DANZA VIVA ACADEMY
            </p>

            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Crea tu cuenta
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto">
                Regístrate en nuestra academia para poder realizar
                inscripciones a las clases disponibles.
            </p>

        </div>

    </section>


    <!-- FORMULARIO -->

    <main class="max-w-xl mx-auto px-6 py-12">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                Registro de estudiante
            </h3>


            <!-- MENSAJE -->

            <?php if ($mensaje != ""): ?>

                <?php if ($tipo_mensaje == "exito"): ?>

                    <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg mb-6">

                        <?php echo $mensaje; ?>

                    </div>

                <?php else: ?>

                    <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-6">

                        <?php echo $mensaje; ?>

                    </div>

                <?php endif; ?>

            <?php endif; ?>


            <form action="registro.php" method="POST" class="space-y-5">

                <!-- NOMBRE -->

                <div>

                    <label for="nombre"
                           class="block text-sm font-semibold text-gray-700 mb-2">

                        Nombre

                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-500"
                    >

                </div>


                <!-- APELLIDO -->

                <div>

                    <label for="apellido"
                           class="block text-sm font-semibold text-gray-700 mb-2">

                        Apellido

                    </label>

                    <input
                        type="text"
                        id="apellido"
                        name="apellido"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-500"
                    >

                </div>


                <!-- CORREO -->

                <div>

                    <label for="correo"
                           class="block text-sm font-semibold text-gray-700 mb-2">

                        Correo electrónico

                    </label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-500"
                    >

                </div>


                <!-- CONTRASEÑA -->

                <div>

                    <label for="password"
                           class="block text-sm font-semibold text-gray-700 mb-2">

                        Contraseña

                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-500"
                    >

                </div>


                <!-- BOTÓN -->

                <button
                    type="submit"
                    class="w-full bg-pink-600 text-white py-3 rounded-lg font-semibold hover:bg-pink-700 transition">

                    Crear cuenta

                </button>

            </form>


            <!-- ENLACE LOGIN -->

            <div class="text-center mt-6">

                <p class="text-gray-600 text-sm">

                    ¿Ya tienes una cuenta?

                    <a href="login.php"
                       class="text-pink-600 font-semibold hover:text-pink-700">

                        Inicia sesión

                    </a>

                </p>

            </div>

        </div>

    </main>


    <!-- PIE DE PÁGINA -->

    <footer class="bg-gray-900 text-white text-center py-6">

        <p class="text-sm">
            © 2032 Danza Viva Academy
        </p>

    </footer>

</body>

</html>