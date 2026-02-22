<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporación Frío Box, C.A. | Refrigeración Industrial Barquisimeto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        fbRed: '#D31B22',
                        fbBlue: '#003366',
                        fbDarkBlue: '#001A33',
                        fbLightGray: '#F8FAFC',
                    }
                }
            }
        }

        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
    <style>
        .geometric-bg {
            background-color: #387cc0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%20%23d31b22' fill-opacity='0.05'%3E%3Cpath d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        /* Ajuste para que el logo grande no oculte contenido al hacer scroll */
        :target {
            scroll-margin-top: 120px;
        }
    </style>
</head>
<body class="bg-fbLightGray font-sans text-slate-900">

    <!-- MENÚ DE NAVEGACIÓN -->
    <nav class="bg-fbBlue shadow-xl sticky top-0 z-50 border-b-4 border-fbRed">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4 lg:py-2">
                <!-- Logo Contenedor (Ajustado para tamaño grande) -->
                <div class="flex-shrink-0 flex items-center">
                    <div class="bg-white p-2 rounded-xl shadow-lg border-2 border-fbRed overflow-hidden flex items-center justify-center" style="width: 100px; height: 100px;">
                        <!-- Aquí tu logo de 400x400 se ajustará proporcionalmente a 140px pero manteniendo su nitidez -->
                        <img src="img/logo.png" alt="Corporación Frío Box" class="max-w-full max-h-full object-contain" onerror="this.src='https://via.placeholder.com/400x400/FFFFFF/D31B22?text=FRIO+BOX'">
                    </div>
                    <div class="ml-4 hidden lg:block">
                        <span class="block text-2xl font-black text-white leading-tight tracking-tighter">CORPORACIÓN<br>FRÍO BOX</span>
                        <span class="text-xs tracking-[0.3em] text-fbRed font-bold uppercase italic">Soluciones Térmicas</span>
                    </div>
                </div>

                <!-- Links Desktop -->
                <div class="hidden md:flex space-x-6 lg:space-x-10 items-center">
                    <a href="#inicio" class="text-white hover:text-fbRed font-bold uppercase text-sm tracking-widest transition-colors">Inicio</a>
                    <a href="#productos" class="text-white hover:text-fbRed font-bold uppercase text-sm tracking-widest transition-colors">Productos</a>
                    <a href="#servicios" class="text-white hover:text-fbRed font-bold uppercase text-sm tracking-widest transition-colors">Servicios</a>
                    <a href="#contacto" class="text-white hover:text-fbRed font-bold uppercase text-sm tracking-widest transition-colors">Contacto</a>
                    <a href="#asistente" class="bg-fbRed text-white px-6 py-3 rounded-xl hover:bg-white hover:text-fbRed transition-all shadow-lg font-black text-xs uppercase italic">
                        <i class="fa-solid fa-robot mr-2"></i>Asistente IA
                    </a>
                </div>

                <!-- Botón Móvil -->
                <div class="md:hidden">
                    <button onclick="toggleMenu()" class="text-white focus:outline-none p-3 bg-fbDarkBlue rounded-lg">
                        <i class="fa-solid fa-bars text-3xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú Desplegable Móvil -->
        <div id="mobile-menu" class="hidden md:hidden bg-fbDarkBlue border-t border-fbRed/30 px-4 pt-4 pb-8 space-y-2">
            <a href="#inicio" onclick="toggleMenu()" class="block text-white py-4 border-b border-white/5 font-bold uppercase tracking-widest">Inicio</a>
            <a href="#productos" onclick="toggleMenu()" class="block text-white py-4 border-b border-white/5 font-bold uppercase tracking-widest">Productos</a>
            <a href="#servicios" onclick="toggleMenu()" class="block text-white py-4 border-b border-white/5 font-bold uppercase tracking-widest">Servicios</a>
            <a href="#contacto" onclick="toggleMenu()" class="block text-white py-4 border-b border-white/5 font-bold uppercase tracking-widest">Contacto</a>
            <a href="#asistente" onclick="toggleMenu()" class="block bg-fbRed text-center text-white py-5 rounded-xl font-black mt-6 italic uppercase">Calculadora IA</a>
        </div>
    </nav>

    <!-- SECCIÓN INICIO -->
    <section id="inicio" class="relative pt-16 pb-20 md:pt-32 md:pb-40 overflow-hidden px-4">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div class="z-10 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-fbBlue text-white text-xs font-black uppercase tracking-widest mb-8">
                    <i class="fa-solid fa-location-dot text-fbRed"></i> Barquisimeto - Venezuela
                </div>
                <h1 class="text-5xl md:text-8xl font-black text-fbBlue leading-[0.9] mb-8 tracking-tighter uppercase italic">
                    Frío de <br><span class="text-fbRed">Alto Nivel</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-600 mb-12 max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium">
                    Diseñamos y construimos la infraestructura térmica que su industria necesita. Especialistas en cavas, túneles y obra civil en el estado Lara.
                </p>
                <div class="flex flex-col sm:flex-row gap-5 justify-center lg:justify-start">
                    <a href="#contacto" class="bg-fbBlue text-white px-10 py-5 rounded-2xl font-black uppercase italic shadow-2xl shadow-fbBlue/40 hover:bg-fbRed hover:-translate-y-1 transition-all text-center">Cotizar Proyecto</a>
                    <a href="#asistente" class="bg-white border-4 border-fbBlue text-fbBlue px-10 py-5 rounded-2xl font-black uppercase italic hover:bg-fbBlue hover:text-white transition-all text-center">Consultar con IA</a>
                </div>
            </div>
            
            <div class="relative mt-12 lg:mt-0">
                <div class="relative w-full aspect-square max-w-lg mx-auto">
                    <!-- Decoración geométrica -->
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-fbRed rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-fbBlue rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
                    
                    <div class="relative h-full bg-white rounded-[4rem] shadow-2xl overflow-hidden border-[12px] border-white">
                        <img src="img/hero.png" alt="Instalación Industrial" class="w-full h-full object-cover" onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&q=80&w=800'">
                        <div class="absolute inset-0 bg-gradient-to-t from-fbBlue/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-10 left-10">
                            <span class="bg-fbRed text-white px-4 py-1 font-black italic uppercase text-sm italic">Proyecto Destacado</span>
                            <h3 class="text-2xl font-black text-white uppercase italic mt-2">Sala de Deposte Porcino</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN PRODUCTOS -->
    <section id="productos" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4 text-center md:text-left">
                <div>
                    <h2 class="text-5xl font-black text-fbBlue uppercase italic tracking-tighter leading-none">Catálogo <br><span class="text-fbRed italic">Industrial</span></h2>
                </div>
                <p class="text-slate-400 font-bold uppercase tracking-widest text-sm max-w-xs">Soluciones de refrigeración para cada sector productivo.</p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Producto 1 -->
                <div class="group bg-fbLightGray rounded-[3rem] p-4 hover:bg-fbBlue transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-6">
                        <img src="img/cava.png" alt="Cavas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=500'">
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="font-black text-fbBlue group-hover:text-white uppercase italic text-xl mb-2 transition-colors">Cavas Cuarto</h3>
                        <p class="text-sm text-slate-500 group-hover:text-white/70 transition-colors">Modularidad y eficiencia térmica extrema.</p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="group bg-fbLightGray rounded-[3rem] p-4 hover:bg-fbBlue transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-6">
                        <img src="img/tunel.png" alt="Túneles" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" onerror="this.src='https://images.unsplash.com/photo-1517059224940-d4af9eec41b7?auto=format&fit=crop&q=80&w=500'">
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="font-black text-fbBlue group-hover:text-white uppercase italic text-xl mb-2 transition-colors">Túneles IQF</h3>
                        <p class="text-sm text-slate-500 group-hover:text-white/70 transition-colors">Congelación rápida para grandes volúmenes.</p>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="group bg-fbLightGray rounded-[3rem] p-4 hover:bg-fbBlue transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-6">
                        <img src="img/rieles.png" alt="Rieles" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" onerror="this.src='https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?auto=format&fit=crop&q=80&w=500'">
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="font-black text-fbBlue group-hover:text-white uppercase italic text-xl mb-2 transition-colors">Sistemas Aéreos</h3>
                        <p class="text-sm text-slate-500 group-hover:text-white/70 transition-colors">Rielería en canal de alta resistencia.</p>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="group bg-fbLightGray rounded-[3rem] p-4 hover:bg-fbBlue transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <div class="aspect-square rounded-[2.5rem] overflow-hidden mb-6">
                        <img src="img/puerta.png" alt="Puertas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" onerror="this.src='https://images.unsplash.com/photo-1516937941344-00b4e0337589?auto=format&fit=crop&q=80&w=500'">
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="font-black text-fbBlue group-hover:text-white uppercase italic text-xl mb-2 transition-colors">Puertas Especiales</h3>
                        <p class="text-sm text-slate-500 group-hover:text-white/70 transition-colors">Correderas y batientes de alto tráfico.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS Y OBRA CIVIL -->
    <section id="servicios" class="py-24 bg-fbBlue text-white overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <div class="space-y-8">
                <h2 class="text-5xl font-black uppercase italic tracking-tighter leading-none">Más que frío,<br><span class="text-fbRed italic">Ingeniería Civil</span></h2>
                <p class="text-lg opacity-80 leading-relaxed">
                    Un proyecto de refrigeración falla si su base no es la adecuada. En **Frío Box** nos encargamos de todo el proceso de obra civil especializada.
                </p>
                <div class="grid gap-6 mt-10">
                    <div class="flex gap-6 items-start">
                        <div class="w-16 h-16 bg-fbRed rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg rotate-3 italic font-black">01</div>
                        <div>
                            <h4 class="text-xl font-bold uppercase mb-2">Pisos Térmicos</h4>
                            <p class="text-sm opacity-60">Losas aisladas con barrera de vapor y refuerzos estructurales.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 items-start">
                        <div class="w-16 h-16 bg-fbRed rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg -rotate-3 italic font-black">02</div>
                        <div>
                            <h4 class="text-xl font-bold uppercase mb-2">Salas de Proceso</h4>
                            <p class="text-sm opacity-60">Diseño arquitectónico bajo normas sanitarias internacionales.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 items-start">
                        <div class="w-16 h-16 bg-fbRed rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg rotate-3 italic font-black">03</div>
                        <div>
                            <h4 class="text-xl font-bold uppercase mb-2">Montaje Electromecánico</h4>
                            <p class="text-sm opacity-60">Instalación de compresores, evaporadores y tableros inteligentes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-fbDarkBlue p-2 rounded-[4rem] shadow-2xl">
                    <div class="bg-white/5 p-12 rounded-[3.5rem] border border-white/10 italic text-center">
                        <i class="fa-solid fa-hard-hat text-7xl text-fbRed mb-8"></i>
                        <h3 class="text-3xl font-black mb-4">¿TIENE UN PLANO?</h3>
                        <p class="opacity-70 mb-8">Nuestros ingenieros en Barquisimeto lo revisan y optimizan su presupuesto.</p>
                        <a href="#contacto" class="inline-block bg-white text-fbBlue px-10 py-5 rounded-2xl font-black uppercase tracking-widest hover:bg-fbRed hover:text-white transition-all">Enviar Plano</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fondo decorativo -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-fbRed/5 skew-x-12 translate-x-32"></div>
    </section>

    <!-- ASISTENTE IA -->
    <section id="asistente" class="py-24 bg-white px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <div class="w-20 h-20 bg-fbRed text-white rounded-3xl flex items-center justify-center text-4xl mx-auto mb-6 shadow-xl rotate-12">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <h2 class="text-4xl font-black text-fbBlue italic uppercase tracking-tighter">Consultor de Ingeniería IA</h2>
                <p class="text-slate-500 font-medium mt-4">Simule su proyecto y obtenga dimensiones técnicas al instante.</p>
            </div>
            
            <div class="bg-fbDarkBlue rounded-[3rem] shadow-3xl overflow-hidden border-[12px] border-fbDarkBlue ring-1 ring-fbRed">
                <div id="chat-box" class="h-[450px] overflow-y-auto p-8 space-y-6 bg-slate-50">
                    <!-- Mensaje Inicial -->
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-fbBlue text-white rounded-xl flex items-center justify-center text-xs font-bold shadow-lg flex-shrink-0">FB</div>
                        <div class="bg-white p-6 rounded-3xl rounded-tl-none shadow-md border border-slate-100 text-sm md:text-base leading-relaxed max-w-[85%]">
                            Saludos. Soy la unidad de cálculo de **Frío Box**. <br><br>Para ayudarle, dígame: **¿Qué producto desea almacenar y qué cantidad (toneladas o cestas)?**
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-fbDarkBlue flex flex-col sm:flex-row gap-4">
                    <input type="text" id="user-msg" placeholder="Ej: Necesito una cava para 50 toneladas de carne..." class="flex-1 p-5 rounded-2xl focus:outline-none focus:ring-4 focus:ring-fbRed text-sm font-medium">
                    <button onclick="enviarConsulta()" class="bg-fbRed text-white px-10 py-5 rounded-2xl font-black uppercase italic hover:bg-white hover:text-fbRed transition-all shadow-xl">
                        Calcular
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section id="contacto" class="py-24 bg-fbLightGray border-t border-slate-200 px-4">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 lg:gap-32">
            <div>
                <h2 class="text-5xl font-black italic uppercase mb-8 tracking-tighter leading-none text-fbBlue">Contacto <br><span class="text-fbRed italic underline decoration-4 underline-offset-8 uppercase">Directo</span></h2>
                <p class="text-lg text-slate-500 mb-12">Visítenos en nuestra sede o solicite una visita técnica a su planta.</p>
                <div class="space-y-4">
                    <div class="flex items-center gap-6 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 group hover:border-fbRed transition-all">
                        <div class="w-12 h-12 bg-fbBlue rounded-xl flex items-center justify-center text-white group-hover:bg-fbRed transition-colors italic font-black">01</div>
                        <span class="font-bold text-slate-700">Zona Industrial II, Barquisimeto.</span>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 group hover:border-fbRed transition-all">
                        <div class="w-12 h-12 bg-fbBlue rounded-xl flex items-center justify-center text-white group-hover:bg-fbRed transition-colors italic font-black">02</div>
                        <span class="font-bold text-slate-700">+58 424-5388701</span>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white rounded-3xl shadow-sm border border-slate-100 group hover:border-fbRed transition-all">
                        <div class="w-12 h-12 bg-fbBlue rounded-xl flex items-center justify-center text-white group-hover:bg-fbRed transition-colors italic font-black">03</div>
                        <span class="font-bold text-slate-700">proyectos@friobox.com</span>
                    </div>
                </div>
            </div>
            <div class="bg-fbBlue p-10 rounded-[3.5rem] shadow-3xl text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-fbRed/20 -translate-y-10 translate-x-10 blur-2xl"></div>
                <form class="space-y-5 relative z-10">
                    <div class="space-y-1">
                        <label class="text-[10px] font-black uppercase tracking-widest text-white/50">Nombre Completo</label>
                        <input type="text" class="w-full p-4 bg-white/10 rounded-xl focus:ring-2 focus:ring-fbRed focus:outline-none text-white border border-white/10">
                    </div>
                    <div class="space-y-1">
                        <label class="text-[10px] font-black uppercase tracking-widest text-white/50">Correo Corporativo</label>
                        <input type="email" class="w-full p-4 bg-white/10 rounded-xl focus:ring-2 focus:ring-fbRed focus:outline-none text-white border border-white/10">
                    </div>
                    <div class="space-y-1">
                        <label class="text-[10px] font-black uppercase tracking-widest text-white/50">Su Requerimiento</label>
                        <textarea rows="4" class="w-full p-4 bg-white/10 rounded-xl focus:ring-2 focus:ring-fbRed focus:outline-none text-white border border-white/10"></textarea>
                    </div>
                    <button class="w-full bg-fbRed text-white py-5 rounded-2xl font-black uppercase italic tracking-widest hover:bg-white hover:text-fbRed transition-all shadow-xl">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-fbDarkBlue text-white/30 py-12 text-center border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4">
             <div class="flex justify-center mb-6">
                <div class="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center text-white/50 italic font-black italic">FB</div>
             </div>
             <p class="text-xs uppercase tracking-widest font-black text-white/50">Corporación Frío Box, C.A.</p>
             <p class="text-[10px] mt-4 leading-relaxed">Barquisimeto, Estado Lara, Venezuela. <br> Expertos en Ingeniería de Refrigeración Industrial.</p>
        </div>
    </footer>

    <!-- Botón WhatsApp Flotante -->
    <a href="https://wa.me/584245388701" class="fixed bottom-6 right-6 w-16 h-16 bg-[#25D366] text-white rounded-full flex items-center justify-center text-3xl shadow-2xl z-[100] hover:scale-110 transition-transform">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- SCRIPT IA -->
    <script>
        const apiKey = ""; 

        async function enviarConsulta() {
            const input = document.getElementById('user-msg');
            const box = document.getElementById('chat-box');
            const msj = input.value.trim();
            if(!msj) return;

            mostrarMensaje('user', msj);
            input.value = '';

            const promptSistema = `Eres el Director de Ingeniería de Corporación Frío Box, C.A. en Barquisimeto.
            Tu tono es serio, técnico, experto pero servicial.
            Si te piden dimensiones para una cava:
            - Calcula el volumen aproximado.
            - Sugiere paneles de 100mm (congelación) o 60mm (conservación).
            - Menciona la importancia de la obra civil (losas aisladas).
            - Ofrece equipos como Copeland, Bock o Bitzer.
            Siempre termina invitándolos a la oficina en Barquisimeto para un cálculo final exacto.`;

            try {
                const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=${apiKey}`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        contents: [{ parts: [{ text: msj }] }],
                        systemInstruction: { parts: [{ text: promptSistema }] }
                    })
                });
                const data = await response.json();
                const respuestaIA = data.candidates?.[0]?.content?.parts?.[0]?.text || "No logré procesar el cálculo. Por favor, escriba sus requerimientos en el formulario de contacto.";
                mostrarMensaje('ai', respuestaIA);
            } catch (e) {
                mostrarMensaje('ai', "Error en el servidor de cálculo.");
            }
        }

        function mostrarMensaje(rol, texto) {
            const box = document.getElementById('chat-box');
            const wrap = document.createElement('div');
            wrap.className = `flex ${rol === 'user' ? 'justify-end' : 'justify-start'} mb-6`;
            const bubble = document.createElement('div');
            bubble.className = rol === 'user' 
                ? 'bg-fbRed text-white p-6 rounded-[2rem] rounded-tr-none text-sm md:text-base font-medium max-w-[85%] shadow-xl' 
                : 'bg-white p-6 rounded-[2rem] rounded-tl-none shadow-md border border-slate-100 text-sm md:text-base leading-relaxed max-w-[85%] text-slate-700';
            
            // Reemplazo simple de saltos de línea por <br>
            bubble.innerHTML = texto.replace(/\n/g, '<br>');
            wrap.appendChild(bubble);
            box.appendChild(wrap);
            box.scrollTop = box.scrollHeight;
        }
    </script>
</body>
</html>