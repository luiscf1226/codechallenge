<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gradient-to-r from-blue-500 to-red-400">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2"></div>
                <nav class="-mx-3 flex flex-1 justify-end">
                    <a href="/login" class="rounded-md px-3 py-2 text-2xl font-semibold text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Log in
                    </a>
                    <a href="/register" class="rounded-md px-3 py-2 text-2xl font-semibold text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Crear Cuenta
                    </a>
                </nav>
            </header>

            <main class="mt-6">
                <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">
                    <div class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10">
                        <div class="relative flex items-center gap-6 lg:items-end">
                            <div class="flex items-start gap-6 lg:flex-col">
                                <div class="pt-3 sm:pt-5 lg:pt-0">
                                    <h1 class="text-4xl font-semibold text-white">¡Bienvenidos al Code Challenge!</h1>
                                    <h2 class="text-3xl font-semibold text-black mt-6">Puedes seguir los siguientes pasos para completar la navegación:</h2>
                                    <ol class="list-decimal pl-8 mt-4 text-2xl">
                                        <li>Crear una cuenta con correo y contraseña (He agregado esta funcionalidad para que tus notas sean personales) 😊.</li>
                                        <li class="mt-2">Accede mediante login a la página de dashboard, en la cual podrás ver tus quehaceres y las tecnologías utilizadas en este proyecto. ✍</li>
                                        <li class="mt-2">Espero que disfrutes de mi página del challenge!😁</li>
                                    </ol>
                                    <p class="mt-6 text-2xl">PD #1: He decidido utilizar Jetstream y Livewire con tailwindcss, espero no haya problemas 😄.</p>
                                    <p class="mt-6 text-2xl">PD #2: He decidido intentado replicar los colores de pixel pay 😜.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="py-16 text-center text-2xl font-semibold text-white">
                Hecho por: Luis Carlos Flores
            </footer>
        </div>
    </div>
</body>
</html>