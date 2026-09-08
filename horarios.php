<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios | Danza Viva Academy</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800">

    <!-- ENCABEZADO -->
    <header class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-5">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

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
                    <ul class="flex flex-wrap justify-center gap-5 text-sm font-medium">

                        <li>
                            <a href="index.php"
                               class="text-gray-600 hover:text-pink-600 transition">
                                Inicio
                            </a>
                        </li>

                        <li>
                            <a href="clases.php"
                               class="text-gray-600 hover:text-pink-600 transition">
                                Clases
                            </a>
                        </li>

                        <li>
                            <a href="horarios.php"
                               class="text-pink-600 font-semibold">
                                Horarios
                            </a>
                        </li>

                        <li>
                            <a href="inscripciones.php"
                               class="text-gray-600 hover:text-pink-600 transition">
                                Inscripciones
                            </a>
                        </li>

                        <li>
                            <a href="contacto.php"
                               class="text-gray-600 hover:text-pink-600 transition">
                                Contacto
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>
        </div>
    </header>


    <!-- PRESENTACIÓN -->
    <section class="bg-pink-50 py-16">

        <div class="max-w-5xl mx-auto px-6 text-center">

            <p class="text-pink-600 font-semibold tracking-wide uppercase text-sm mb-3">
                Danza Viva Academy
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-5">
                Horarios de nuestras clases
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Consulta los días y horarios disponibles para cada clase
                y encuentra la opción que mejor se adapte a tu disponibilidad.
            </p>

        </div>

    </section>


    <!-- HORARIOS -->
    <main class="max-w-6xl mx-auto px-6 py-16">

        <div class="mb-10">

            <p class="text-pink-600 font-semibold text-sm uppercase tracking-wide">
                Horarios disponibles
            </p>

            <h3 class="text-3xl font-bold text-gray-900 mt-2">
                Elige el horario que prefieras
            </h3>

            <p class="text-gray-600 mt-3">
                Cada clase se realiza dos días a la semana para facilitar
                la continuidad del aprendizaje.
            </p>

        </div>


        <!-- TABLA DE HORARIOS -->
        <div class="overflow-x-auto bg-white rounded-2xl shadow-md border border-gray-100">

            <table class="w-full text-left border-collapse">

                <!-- ENCABEZADO DE LA TABLA -->
                <thead>
                    <tr class="bg-pink-600 text-white">

                        <th class="px-6 py-4 font-semibold">
                            Clase
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Nivel
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Días
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Hora de inicio
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Hora de finalización
                        </th>

                    </tr>
                </thead>


                <tbody class="divide-y divide-gray-100">

                    <!-- CUMBIA -->
                    <tr class="hover:bg-pink-50 transition">

                        <td class="px-6 py-5 font-semibold text-gray-900">
                            Cumbia
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Principiante
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Lunes y miércoles
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            4:00 PM
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            5:00 PM
                        </td>

                    </tr>


                    <!-- BAMBUCO -->
                    <tr class="hover:bg-pink-50 transition">

                        <td class="px-6 py-5 font-semibold text-gray-900">
                            Bambuco
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Principiante
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Martes y jueves
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            4:00 PM
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            5:00 PM
                        </td>

                    </tr>


                    <!-- SANJUANERO -->
                    <tr class="hover:bg-pink-50 transition">

                        <td class="px-6 py-5 font-semibold text-gray-900">
                            Sanjuanero
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Intermedio
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Miércoles y viernes
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            5:00 PM
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            6:00 PM
                        </td>

                    </tr>


                    <!-- DANZA ANTIOQUEÑA -->
                    <tr class="hover:bg-pink-50 transition">

                        <td class="px-6 py-5 font-semibold text-gray-900">
                            Danza antioqueña
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Principiante
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Lunes y jueves
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            4:00 PM
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            5:00 PM
                        </td>

                    </tr>


                    <!-- DANZA URBANA -->
                    <tr class="hover:bg-pink-50 transition">

                        <td class="px-6 py-5 font-semibold text-gray-900">
                            Danza urbana
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Intermedio
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Martes y viernes
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            5:00 PM
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            6:00 PM
                        </td>

                    </tr>


                    <!-- CARRANGA -->
                    <tr class="hover:bg-pink-50 transition">

                        <td class="px-6 py-5 font-semibold text-gray-900">
                            Carranga
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Principiante
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            Viernes y sábado
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            10:00 AM
                        </td>

                        <td class="px-6 py-5 text-gray-600">
                            11:00 AM
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- INFORMACIÓN -->
        <div class="mt-10 bg-gray-50 rounded-2xl p-8">

            <h3 class="text-xl font-bold text-gray-900 mb-3">
                Información sobre los horarios
            </h3>

            <p class="text-gray-600 leading-relaxed">
                Las clases se realizan dos días a la semana. Antes de
                realizar una inscripción, revisa los días y el horario
                correspondiente a la clase que deseas elegir.
            </p>

        </div>


        <!-- BOTÓN DE INSCRIPCIÓN -->
        <div class="text-center mt-12">

            <a href="inscripciones.php"
               class="inline-block bg-pink-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-pink-700 transition">
                Inscribirme a una clase
            </a>

        </div>

    </main>


    <!-- PIE DE PÁGINA -->
    <footer class="bg-gray-900 text-white py-8">

        <div class="max-w-6xl mx-auto px-6 text-center">

            <p class="text-sm text-gray-400">
                © 2032 Danza Viva Academy
            </p>

        </div>

    </footer>

</body>
</html>