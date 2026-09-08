```php
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Inscripciones | Danza Viva Academy</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-white text-gray-800">


    <!-- ENCABEZADO -->

    <header class="bg-white shadow-sm">

        <div class="max-w-6xl mx-auto px-6 py-5">

            <div class="flex flex-col md:flex-row
                        justify-between items-center gap-4">


                <!-- NOMBRE DE LA ACADEMIA -->

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

                    <ul class="flex flex-wrap
                               justify-center items-center
                               gap-5 text-sm font-medium">


                        <li>

                            <a href="index.php"
                               class="text-gray-600
                                      hover:text-pink-600
                                      transition">

                                Inicio

                            </a>

                        </li>


                        <li>

                            <a href="clases.php"
                               class="text-gray-600
                                      hover:text-pink-600
                                      transition">

                                Clases

                            </a>

                        </li>


                        <li>

                            <a href="horarios.php"
                               class="text-gray-600
                                      hover:text-pink-600
                                      transition">

                                Horarios

                            </a>

                        </li>


                        <li>

                            <a href="inscripciones.php"
                               class="text-pink-600
                                      font-semibold">

                                Inscripciones

                            </a>

                        </li>


                        <li>

                            <a href="contacto.php"
                               class="text-gray-600
                                      hover:text-pink-600
                                      transition">

                                Contacto

                            </a>

                        </li>


                        <!-- USUARIO NO CONECTADO -->

                        <?php if (!isset($_SESSION["id_usuario"])): ?>


                            <li>

                                <a href="login.php"
                                   class="text-gray-600
                                          hover:text-pink-600
                                          transition">

                                    Iniciar sesión

                                </a>

                            </li>


                            <li>

                                <a href="registro.php"
                                   class="bg-pink-600
                                          text-white px-4 py-2
                                          rounded-lg font-semibold
                                          hover:bg-pink-700
                                          transition">

                                    Crear cuenta

                                </a>

                            </li>


                        <?php else: ?>


                            <!-- USUARIO CONECTADO -->

                            <?php if ($_SESSION["rol"] == "admin"): ?>


                                <li>

                                    <a href="panel_admin.php"
                                       class="bg-pink-600
                                              text-white px-4 py-2
                                              rounded-lg font-semibold
                                              hover:bg-pink-700
                                              transition">

                                        Panel administrador

                                    </a>

                                </li>


                            <?php else: ?>


                                <li>

                                    <a href="panel_estudiante.php"
                                       class="bg-pink-600
                                              text-white px-4 py-2
                                              rounded-lg font-semibold
                                              hover:bg-pink-700
                                              transition">

                                        Mi cuenta

                                    </a>

                                </li>


                            <?php endif; ?>


                            <li>

                                <a href="cerrar_sesion.php"
                                   class="text-red-600
                                          hover:text-red-800
                                          transition">

                                    Cerrar sesión

                                </a>

                            </li>


                        <?php endif; ?>


                    </ul>

                </nav>

            </div>

        </div>

    </header>



    <!-- PRESENTACIÓN -->

    <section class="bg-pink-50 py-16">

        <div class="max-w-5xl mx-auto px-6 text-center">


            <p class="text-pink-600 font-semibold
                      tracking-wide uppercase
                      text-sm mb-3">

                Danza Viva Academy

            </p>


            <h2 class="text-4xl md:text-5xl
                       font-bold text-gray-900 mb-5">

                Inscripciones

            </h2>


            <p class="text-gray-600
                      max-w-2xl mx-auto
                      leading-relaxed">

                Elige la clase que quieres realizar
                y forma parte de Danza Viva Academy.

            </p>

        </div>

    </section>



    <!-- INFORMACIÓN -->

    <main class="max-w-5xl mx-auto px-6 py-16">


        <div class="text-center mb-12">


            <p class="text-pink-600 font-semibold
                      text-sm uppercase tracking-wide">

                Da el primer paso

            </p>


            <h3 class="text-3xl font-bold
                       text-gray-900 mt-2">

                Elige tu clase de danza

            </h3>


            <p class="text-gray-600 mt-3
                      max-w-2xl mx-auto">

                Selecciona una de nuestras clases disponibles
                y realiza tu inscripción.

            </p>

        </div>



        <!-- CLASES -->

        <div class="grid grid-cols-1
                    md:grid-cols-2 gap-6">



            <!-- CUMBIA -->

            <div class="bg-white border
                        border-gray-100 rounded-2xl
                        shadow-md overflow-hidden">


                <div class="bg-pink-600 px-6 py-4">

                    <h4 class="text-xl font-bold text-white">

                        Cumbia

                    </h4>

                </div>


                <div class="p-6">


                    <p class="text-gray-600 mb-5">

                        Clase de nivel principiante
                        para aprender los pasos y
                        movimientos básicos de la cumbia.

                    </p>


                    <div class="flex justify-between
                                items-center">


                        <span class="text-sm text-gray-500">

                            Principiante

                        </span>


                        <?php if (isset($_SESSION["id_usuario"])): ?>

                            <form action="guardar_inscripion.php"
                                  method="POST">

                                <input
                                    type="hidden"
                                    name="id_clase"
                                    value="1"
                                >

                                <button
                                    type="submit"
                                    class="bg-pink-600 text-white
                                           px-5 py-2 rounded-lg
                                           font-semibold
                                           hover:bg-pink-700
                                           transition">

                                    Inscribirme

                                </button>

                            </form>

                        <?php else: ?>

                            <a href="login.php"
                               class="bg-pink-600 text-white
                                      px-5 py-2 rounded-lg
                                      font-semibold
                                      hover:bg-pink-700
                                      transition">

                                Iniciar sesión

                            </a>

                        <?php endif; ?>


                    </div>

                </div>

            </div>



            <!-- BAMBUCO -->

            <div class="bg-white border
                        border-gray-100 rounded-2xl
                        shadow-md overflow-hidden">


                <div class="bg-pink-600 px-6 py-4">

                    <h4 class="text-xl font-bold text-white">

                        Bambuco

                    </h4>

                </div>


                <div class="p-6">


                    <p class="text-gray-600 mb-5">

                        Clase de nivel principiante
                        enfocada en conocer los movimientos
                        y características del bambuco.

                    </p>


                    <div class="flex justify-between
                                items-center">


                        <span class="text-sm text-gray-500">

                            Principiante

                        </span>


                        <?php if (isset($_SESSION["id_usuario"])): ?>

                            <form action="guardar_inscripion.php"
                                  method="POST">

                                <input
                                    type="hidden"
                                    name="id_clase"
                                    value="2"
                                >

                                <button
                                    type="submit"
                                    class="bg-pink-600 text-white
                                           px-5 py-2 rounded-lg
                                           font-semibold
                                           hover:bg-pink-700
                                           transition">

                                    Inscribirme

                                </button>

                            </form>

                        <?php else: ?>

                            <a href="login.php"
                               class="bg-pink-600 text-white
                                      px-5 py-2 rounded-lg
                                      font-semibold
                                      hover:bg-pink-700
                                      transition">

                                Iniciar sesión

                            </a>

                        <?php endif; ?>


                    </div>

                </div>

            </div>



            <!-- SANJUANERO -->

            <div class="bg-white border
                        border-gray-100 rounded-2xl
                        shadow-md overflow-hidden">


                <div class="bg-pink-600 px-6 py-4">

                    <h4 class="text-xl font-bold text-white">

                        Sanjuanero

                    </h4>

                </div>


                <div class="p-6">


                    <p class="text-gray-600 mb-5">

                        Clase de nivel intermedio para
                        continuar desarrollando técnicas
                        y movimientos del sanjuanero.

                    </p>


                    <div class="flex justify-between
                                items-center">


                        <span class="text-sm text-gray-500">

                            Intermedio

                        </span>


                        <?php if (isset($_SESSION["id_usuario"])): ?>

                            <form action="guardar_inscripion.php"
                                  method="POST">

                                <input
                                    type="hidden"
                                    name="id_clase"
                                    value="3"
                                >

                                <button
                                    type="submit"
                                    class="bg-pink-600 text-white
                                           px-5 py-2 rounded-lg
                                           font-semibold
                                           hover:bg-pink-700
                                           transition">

                                    Inscribirme

                                </button>

                            </form>

                        <?php else: ?>

                            <a href="login.php"
                               class="bg-pink-600 text-white
                                      px-5 py-2 rounded-lg
                                      font-semibold
                                      hover:bg-pink-700
                                      transition">

                                Iniciar sesión

                            </a>

                        <?php endif; ?>


                    </div>

                </div>

            </div>



            <!-- DANZA ANTIOQUEÑA -->

            <div class="bg-white border
                        border-gray-100 rounded-2xl
                        shadow-md overflow-hidden">


                <div class="bg-pink-600 px-6 py-4">

                    <h4 class="text-xl font-bold text-white">

                        Danza antioqueña

                    </h4>

                </div>


                <div class="p-6">


                    <p class="text-gray-600 mb-5">

                        Clase de nivel principiante para
                        conocer los pasos tradicionales
                        de la danza antioqueña.

                    </p>


                    <div class="flex justify-between
                                items-center">


                        <span class="text-sm text-gray-500">

                            Principiante

                        </span>


                        <?php if (isset($_SESSION["id_usuario"])): ?>

                            <form action="guardar_inscripion.php"
                                  method="POST">

                                <input
                                    type="hidden"
                                    name="id_clase"
                                    value="4"
                                >

                                <button
                                    type="submit"
                                    class="bg-pink-600 text-white
                                           px-5 py-2 rounded-lg
                                           font-semibold
                                           hover:bg-pink-700
                                           transition">

                                    Inscribirme

                                </button>

                            </form>

                        <?php else: ?>

                            <a href="login.php"
                               class="bg-pink-600 text-white
                                      px-5 py-2 rounded-lg
                                      font-semibold
                                      hover:bg-pink-700
                                      transition">

                                Iniciar sesión

                            </a>

                        <?php endif; ?>


                    </div>

                </div>

            </div>



            <!-- DANZA URBANA -->

            <div class="bg-white border
                        border-gray-100 rounded-2xl
                        shadow-md overflow-hidden">


                <div class="bg-pink-600 px-6 py-4">

                    <h4 class="text-xl font-bold text-white">

                        Danza urbana

                    </h4>

                </div>


                <div class="p-6">


                    <p class="text-gray-600 mb-5">

                        Clase de nivel intermedio para
                        practicar diferentes movimientos
                        y estilos de danza urbana.

                    </p>


                    <div class="flex justify-between
                                items-center">


                        <span class="text-sm text-gray-500">

                            Intermedio

                        </span>


                        <?php if (isset($_SESSION["id_usuario"])): ?>

                            <form action="guardar_inscripion.php"
                                  method="POST">

                                <input
                                    type="hidden"
                                    name="id_clase"
                                    value="5"
                                >

                                <button
                                    type="submit"
                                    class="bg-pink-600 text-white
                                           px-5 py-2 rounded-lg
                                           font-semibold
                                           hover:bg-pink-700
                                           transition">

                                    Inscribirme

                                </button>

                            </form>

                        <?php else: ?>

                            <a href="login.php"
                               class="bg-pink-600 text-white
                                      px-5 py-2 rounded-lg
                                      font-semibold
                                      hover:bg-pink-700
                                      transition">

                                Iniciar sesión

                            </a>

                        <?php endif; ?>


                    </div>

                </div>

            </div>



            <!-- CARRANGA -->

            <div class="bg-white border
                        border-gray-100 rounded-2xl
                        shadow-md overflow-hidden">


                <div class="bg-pink-600 px-6 py-4">

                    <h4 class="text-xl font-bold text-white">

                        Carranga

                    </h4>

                </div>


                <div class="p-6">


                    <p class="text-gray-600 mb-5">

                        Clase de nivel principiante para
                        aprender movimientos relacionados
                        con la danza carranguera.

                    </p>


                    <div class="flex justify-between
                                items-center">


                        <span class="text-sm text-gray-500">

                            Principiante

                        </span>


                        <?php if (isset($_SESSION["id_usuario"])): ?>

                            <form action="guardar_inscripion.php"
                                  method="POST">

                                <input
                                    type="hidden"
                                    name="id_clase"
                                    value="6"
                                >

                                <button
                                    type="submit"
                                    class="bg-pink-600 text-white
                                           px-5 py-2 rounded-lg
                                           font-semibold
                                           hover:bg-pink-700
                                           transition">

                                    Inscribirme

                                </button>

                            </form>

                        <?php else: ?>

                            <a href="login.php"
                               class="bg-pink-600 text-white
                                      px-5 py-2 rounded-lg
                                      font-semibold
                                      hover:bg-pink-700
                                      transition">

                                Iniciar sesión

                            </a>

                        <?php endif; ?>


                    </div>

                </div>

            </div>


        </div>



        <!-- AVISO -->

        <div class="mt-12 bg-gray-50
                    rounded-2xl p-8 text-center">


            <?php if (!isset($_SESSION["id_usuario"])): ?>


                <h3 class="text-xl font-bold
                           text-gray-900 mb-3">

                    ¿Quieres inscribirte?

                </h3>


                <p class="text-gray-600 mb-6">

                    Inicia sesión o crea una cuenta
                    para poder realizar tu inscripción.

                </p>


                <div class="flex flex-col sm:flex-row
                            justify-center gap-4">


                    <a href="login.php"
                       class="inline-block bg-pink-600
                              text-white px-8 py-3
                              rounded-lg font-semibold
                              hover:bg-pink-700
                              transition">

                        Iniciar sesión

                    </a>


                    <a href="registro.php"
                       class="inline-block border
                              border-pink-600
                              text-pink-600 px-8 py-3
                              rounded-lg font-semibold
                              hover:bg-pink-50
                              transition">

                        Crear cuenta

                    </a>


                </div>


            <?php else: ?>


                <h3 class="text-xl font-bold
                           text-gray-900 mb-3">

                    ¿Ya elegiste tu clase?

                </h3>


                <p class="text-gray-600 mb-6">

                    Después de inscribirte podrás
                    consultar tus clases desde
                    tu cuenta.

                </p>


                <a href="panel_estudiante.php"
                   class="inline-block bg-pink-600
                          text-white px-8 py-3
                          rounded-lg font-semibold
                          hover:bg-pink-700
                          transition">

                    Ver mi cuenta

                </a>


            <?php endif; ?>


        </div>

    </main>



    <!-- PIE DE PÁGINA -->

    <footer class="bg-gray-900
                   text-white py-8">

        <div class="max-w-6xl mx-auto px-6 text-center">

            <p class="text-sm text-gray-400">

                © 2032 Danza Viva Academy

            </p>

        </div>

    </footer>


</body>

</html>
```
