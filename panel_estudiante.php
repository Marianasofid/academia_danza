```php id="9k2mx7"
<?php

session_start();
require_once "conexion.php";

if (!isset($_SESSION["id_usuario"])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION["rol"] != "estudiante") {
    header("Location: index.php");
    exit();
}

$id_usuario = $_SESSION["id_usuario"];

$consulta = "SELECT i.id_inscripcion, i.fecha_inscripcion,
                    c.nombre, c.nivel, c.precio
             FROM inscripcion i
             INNER JOIN clase c
             ON i.id_clase = c.id_clase
             WHERE i.id_usuario = ?
             ORDER BY i.fecha_inscripcion DESC";

$stmt = $conexion->prepare($consulta);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();

$resultado = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mi cuenta - Danza Viva Academy</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 text-gray-800">

    <!-- ENCABEZADO -->

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

                <nav class="flex flex-wrap gap-4">

                    <a href="index.php"
                       class="text-gray-600 hover:text-pink-600">
                        Inicio
                    </a>

                    <a href="clases.php"
                       class="text-gray-600 hover:text-pink-600">
                        Clases
                    </a>

                    <a href="horarios.php"
                       class="text-gray-600 hover:text-pink-600">
                        Horarios
                    </a>

                    <a href="inscripciones.php"
                       class="text-gray-600 hover:text-pink-600">
                        Inscripciones
                    </a>

                    <a href="cerrar_sesion.php"
                       class="text-red-600 hover:text-red-700 font-semibold">
                        Cerrar sesión
                    </a>

                </nav>

            </div>

        </div>

    </header>


    <!-- BIENVENIDA -->

    <section class="bg-pink-100 py-14 text-center">

        <h2 class="text-4xl font-bold text-gray-900 mb-3">

            ¡Hola,
            <?php echo htmlspecialchars($_SESSION["nombre"]); ?>!

        </h2>

        <p class="text-gray-600">
            Este es tu espacio personal en Danza Viva Academy.
        </p>

    </section>


    <!-- CONTENIDO -->

    <main class="max-w-6xl mx-auto px-6 py-12">

        <!-- INFORMACIÓN DEL USUARIO -->

        <div class="bg-white rounded-2xl shadow-lg p-8 mb-10">

            <h3 class="text-2xl font-bold text-gray-900 mb-6">
                Mis datos
            </h3>

            <div class="grid md:grid-cols-2 gap-4">

                <div>
                    <p class="text-sm text-gray-500">
                        Nombre completo
                    </p>

                    <p class="font-semibold">
                        <?php
                        echo htmlspecialchars(
                            $_SESSION["nombre"] . " " . $_SESSION["apellido"]
                        );
                        ?>
                    </p>
                </div>


                <div>

                    <p class="text-sm text-gray-500">
                        Correo electrónico
                    </p>

                    <p class="font-semibold">
                        <?php echo htmlspecialchars($_SESSION["correo"]); ?>
                    </p>

                </div>

            </div>

        </div>


        <!-- INSCRIPCIONES -->

        <div class="mb-6">

            <h3 class="text-3xl font-bold text-gray-900">
                Mis clases
            </h3>

            <p class="text-gray-600 mt-2">
                Aquí puedes consultar las clases en las que estás inscrito.
            </p>

        </div>


        <?php if ($resultado->num_rows > 0): ?>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <?php while ($clase = $resultado->fetch_assoc()): ?>

                    <div class="bg-white rounded-2xl shadow-lg p-6">

                        <h4 class="text-xl font-bold text-pink-600 mb-3">

                            <?php
                            echo htmlspecialchars($clase["nombre"]);
                            ?>

                        </h4>


                        <p class="mb-2">

                            <span class="font-semibold">
                                Nivel:
                            </span>

                            <?php
                            echo htmlspecialchars($clase["nivel"]);
                            ?>

                        </p>


                        <p class="mb-2">

                            <span class="font-semibold">
                                Precio:
                            </span>

                            $<?php
                            echo number_format(
                                $clase["precio"],
                                0,
                                ",",
                                "."
                            );
                            ?>

                        </p>


                        <p class="text-sm text-gray-500">

                            Inscrito el:

                            <?php
                            echo date(
                                "d/m/Y",
                                strtotime($clase["fecha_inscripcion"])
                            );
                            ?>

                        </p>

                    </div>

                <?php endwhile; ?>

            </div>

        <?php else: ?>

            <div class="bg-white rounded-2xl shadow p-8 text-center">

                <h4 class="text-xl font-bold mb-3">
                    Todavía no tienes clases inscritas.
                </h4>

                <p class="text-gray-600 mb-6">
                    Explora nuestras clases y elige la que más te guste.
                </p>

                <a
                    href="inscripciones.php"
                    class="inline-block bg-pink-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-pink-700"
                >
                    Ver clases disponibles
                </a>

            </div>

        <?php endif; ?>


        <!-- BOTÓN -->

        <div class="text-center mt-10">

            <a
                href="inscripciones.php"
                class="inline-block bg-pink-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-pink-700"
            >
                Inscribirme a otra clase
            </a>

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
```
