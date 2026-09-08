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

    <title>Danza Viva Academy</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-100 text-gray-800">


    <!-- ENCABEZADO -->

    <header class="bg-white shadow">

        <div class="max-w-7xl mx-auto px-6 py-5">

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
                               gap-4 text-sm font-medium">


                        <!-- INICIO -->

                        <li>

                            <a href="index.php"
                               class="text-pink-600 font-semibold">

                                Inicio

                            </a>

                        </li>


                        <!-- CLASES -->

                        <li>

                            <a href="clases.php"
                               class="hover:text-pink-600 transition">

                                Clases

                            </a>

                        </li>


                        <!-- HORARIOS -->

                        <li>

                            <a href="horarios.php"
                               class="hover:text-pink-600 transition">

                                Horarios

                            </a>

                        </li>


                        <!-- INSCRIPCIONES -->

                        <li>

                            <a href="inscripciones.php"
                               class="hover:text-pink-600 transition">

                                Inscripciones

                            </a>

                        </li>


                        <!-- CONTACTO -->

                        <li>

                            <a href="contacto.php"
                               class="hover:text-pink-600 transition">

                                Contacto

                            </a>

                        </li>


                        <!-- ================================= -->
                        <!-- USUARIO NO HA INICIADO SESIÓN -->
                        <!-- ================================= -->

                        <?php if (!isset($_SESSION["id_usuario"])): ?>


                            <!-- INICIAR SESIÓN -->

                            <li>

                                <a href="login.php"
                                   class="hover:text-pink-600 transition">

                                    Iniciar sesión

                                </a>

                            </li>


                            <!-- CREAR CUENTA -->

                            <li>

                                <a href="registro.php"
                                   class="bg-pink-600 text-white
                                          px-4 py-2 rounded-lg
                                          font-semibold
                                          hover:bg-pink-700
                                          transition">

                                    Crear cuenta

                                </a>

                            </li>


                        <?php else: ?>


                            <!-- ================================= -->
                            <!-- USUARIO YA INICIÓ SESIÓN -->
                            <!-- ================================= -->


                            <?php if ($_SESSION["rol"] == "admin"): ?>


                                <!-- PANEL ADMINISTRADOR -->

                                <li>

                                    <a href="panel_admin.php"
                                       class="bg-pink-600 text-white
                                              px-4 py-2 rounded-lg
                                              font-semibold
                                              hover:bg-pink-700
                                              transition">

                                        Panel administrador

                                    </a>

                                </li>


                            <?php else: ?>


                                <!-- MI CUENTA -->

                                <li>

                                    <a href="panel_estudiante.php"
                                       class="bg-pink-600 text-white
                                              px-4 py-2 rounded-lg
                                              font-semibold
                                              hover:bg-pink-700
                                              transition">

                                        Mi cuenta

                                    </a>

                                </li>


                            <?php endif; ?>


                            <!-- CERRAR SESIÓN -->

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



    <!-- PORTADA -->

    <section class="bg-pink-100 rounded-b-3xl">

        <div class="max-w-7xl mx-auto px-6 py-20 text-center">


            <p class="text-pink-600 font-semibold
                      uppercase tracking-wide mb-4">

                DANZA Y CULTURA COLOMBIANA

            </p>


            <h2 class="text-4xl md:text-5xl
                       font-bold text-gray-900 mb-6">

                Bienvenidos a Danza Viva Academy

            </h2>


            <p class="max-w-2xl mx-auto
                      text-gray-600 text-lg mb-8">

                Un espacio dedicado al aprendizaje y disfrute
                de la danza colombiana, donde podrás conocer
                diferentes ritmos, niveles y horarios.

            </p>


            <a href="clases.php"
               class="inline-block bg-pink-600 text-white
                      px-6 py-3 rounded-lg font-semibold
                      hover:bg-pink-700 transition">

                Conoce nuestras clases

            </a>

        </div>

    </section>



    <!-- INFORMACIÓN DE LA ACADEMIA -->

    <section class="max-w-7xl mx-auto px-6 py-16">

        <div class="text-center mb-10">


            <p class="text-pink-600 font-semibold
                      uppercase tracking-wide">

                NUESTRA ACADEMIA

            </p>


            <h2 class="text-3xl font-bold
                       text-gray-900 mt-2">

                Un espacio para aprender y disfrutar

            </h2>

        </div>



        <div class="grid md:grid-cols-2
                    gap-8 items-center">


            <div>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Danza Viva Academy es una academia dedicada
                    a la enseñanza y promoción de diferentes
                    expresiones de la danza y la cultura
                    colombiana.

                </p>


                <p class="text-gray-600 leading-relaxed">

                    Nuestro objetivo es ofrecer un espacio donde
                    niños, jóvenes y adultos puedan aprender,
                    practicar y disfrutar de diferentes ritmos
                    de una manera organizada y accesible.

                </p>

            </div>



            <div class="bg-white rounded-2xl
                        shadow p-8 text-center">


                <p class="text-5xl font-bold text-pink-600">

                    6

                </p>


                <p class="text-gray-700
                          font-semibold mt-2">

                    Clases disponibles

                </p>


                <p class="text-gray-500
                          text-sm mt-2">

                    Con diferentes ritmos y niveles.

                </p>

            </div>

        </div>

    </section>



    <!-- CARACTERÍSTICAS -->

    <section class="max-w-7xl mx-auto px-6 py-12">


        <div class="text-center mb-10">


            <p class="text-pink-600 font-semibold
                      uppercase tracking-wide">

                DANZA VIVA ACADEMY

            </p>


            <h2 class="text-3xl font-bold
                       text-gray-900 mt-2">

                Lo que encontrarás en nuestra academia

            </h2>

        </div>



        <div class="grid md:grid-cols-3 gap-6">


            <!-- TARJETA 1 -->

            <div class="bg-pink-50
                        border border-pink-100
                        rounded-2xl p-8 text-center
                        hover:-translate-y-1
                        hover:shadow-lg transition">


                <div class="w-12 h-12 bg-pink-600
                            text-white rounded-full
                            flex items-center
                            justify-center mx-auto
                            mb-5 font-bold">

                    01

                </div>


                <h3 class="text-xl font-bold mb-3">

                    Variedad de ritmos

                </h3>


                <p class="text-gray-600">

                    Conoce y aprende diferentes ritmos
                    representativos de la cultura colombiana.

                </p>

            </div>



            <!-- TARJETA 2 -->

            <div class="bg-pink-50
                        border border-pink-100
                        rounded-2xl p-8 text-center
                        hover:-translate-y-1
                        hover:shadow-lg transition">


                <div class="w-12 h-12 bg-pink-600
                            text-white rounded-full
                            flex items-center
                            justify-center mx-auto
                            mb-5 font-bold">

                    02

                </div>


                <h3 class="text-xl font-bold mb-3">

                    Diferentes niveles

                </h3>


                <p class="text-gray-600">

                    Encuentra clases para principiantes
                    y estudiantes con experiencia.

                </p>

            </div>



            <!-- TARJETA 3 -->

            <div class="bg-pink-50
                        border border-pink-100
                        rounded-2xl p-8 text-center
                        hover:-translate-y-1
                        hover:shadow-lg transition">


                <div class="w-12 h-12 bg-pink-600
                            text-white rounded-full
                            flex items-center
                            justify-center mx-auto
                            mb-5 font-bold">

                    03

                </div>


                <h3 class="text-xl font-bold mb-3">

                    Desde los 5 años

                </h3>


                <p class="text-gray-600">

                    Clases pensadas para diferentes edades
                    y etapas de aprendizaje.

                </p>

            </div>


        </div>

    </section>



    <!-- LLAMADO A LA ACCIÓN -->

    <section class="bg-pink-600 text-white">


        <div class="max-w-7xl mx-auto px-6
                    py-16 text-center">


            <h2 class="text-3xl font-bold mb-4">

                Encuentra tu ritmo

            </h2>


            <p class="mb-8 text-pink-100">

                Conoce nuestras clases y encuentra
                la opción que más se adapte a ti.

            </p>


            <a href="clases.php"
               class="inline-block bg-white
                      text-pink-600 px-6 py-3
                      rounded-lg font-semibold
                      hover:bg-gray-100 transition">

                Ver clases

            </a>

        </div>

    </section>



    <!-- PIE DE PÁGINA -->

    <footer class="bg-gray-900 text-white
                   text-center py-6">


        <p class="text-sm">

            © 2032 Danza Viva Academy

        </p>


    </footer>


</body>

</html>
```
