```php
<?php

session_start();
require_once "conexion.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = trim($_POST["correo"]);
    $password = $_POST["password"];

    if ($correo == "" || $password == "") {

        $mensaje = "Completa todos los campos.";

    } else {

        $consulta = "SELECT * FROM usuario WHERE correo = ?";

        $resultado = $conexion->prepare($consulta);

        $resultado->bind_param("s", $correo);

        $resultado->execute();

        $datos = $resultado->get_result();

        if ($datos->num_rows == 1) {

            $usuario = $datos->fetch_assoc();

            if (password_verify($password, $usuario["password"])) {

                $_SESSION["id_usuario"] = $usuario["id_usuario"];
                $_SESSION["nombre"] = $usuario["nombre"];
                $_SESSION["apellido"] = $usuario["apellido"];
                $_SESSION["correo"] = $usuario["correo"];
                $_SESSION["rol"] = $usuario["rol"];

                if ($usuario["rol"] == "admin") {

                    header("Location: panel_admin.php");

                } else {

                    header("Location: panel_estudiante.php");

                }

                exit();

            } else {

                $mensaje = "Correo o contraseña incorrectos.";
            }

        } else {

            $mensaje = "Correo o contraseña incorrectos.";
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

    <title>Iniciar sesión - Danza Viva Academy</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 text-gray-800">

    <header class="bg-white shadow">

        <div class="max-w-6xl mx-auto px-6 py-5">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <div>

                    <h1 class="text-2xl font-bold text-pink-600">
                        Danza Viva Academy
                    </h1>

                    <p class="text-sm text-gray-500">
                        Movimiento · Expresión · Pasión
                    </p>

                </div>

                <nav>

                    <a href="index.php"
                       class="text-gray-600 hover:text-pink-600">
                        Inicio
                    </a>

                    <span class="mx-2 text-gray-300">|</span>

                    <a href="registro.php"
                       class="text-pink-600 font-semibold">
                        Crear cuenta
                    </a>

                </nav>

            </div>

        </div>

    </header>


    <section class="bg-pink-100 py-14 text-center">

        <h2 class="text-4xl font-bold text-gray-900 mb-3">
            Iniciar sesión
        </h2>

        <p class="text-gray-600">
            Accede a tu cuenta de Danza Viva Academy.
        </p>

    </section>


    <main class="max-w-md mx-auto px-6 py-12">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <?php if ($mensaje != ""): ?>

                <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-6">

                    <?php echo htmlspecialchars($mensaje); ?>

                </div>

            <?php endif; ?>


            <form method="POST" class="space-y-5">

                <div>

                    <label class="block font-semibold mb-2">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        name="correo"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-500"
                    >

                </div>


                <div>

                    <label class="block font-semibold mb-2">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-500"
                    >

                </div>


                <button
                    type="submit"
                    class="w-full bg-pink-600 text-white py-3 rounded-lg font-semibold hover:bg-pink-700 transition"
                >
                    Iniciar sesión
                </button>

            </form>


            <div class="text-center mt-6">

                <p class="text-gray-600">

                    ¿No tienes una cuenta?

                    <a href="registro.php"
                       class="text-pink-600 font-semibold">
                        Crear cuenta
                    </a>

                </p>

            </div>

        </div>

    </main>


    <footer class="bg-gray-900 text-white text-center py-6">

        <p class="text-sm">
            © 2032 Danza Viva Academy
        </p>

    </footer>

</body>

</html>
```
