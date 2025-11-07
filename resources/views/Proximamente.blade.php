<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact - Próximamente</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('{{ asset('images/FondoMenu.jpg') }}');
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Times New Roman', Times, serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: white;
            border-bottom: 1px solid #e0e0e0;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-text {
            width: 150px;
            height: 80px;
        }

        .texto {
            font-size: 24px;
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .boton-menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #6366f1;
            font-weight: bold;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .boton-menu:hover {
            transform: translateY(-3px);
            opacity: 0.8;
        }

        .boton-menu span {
            font-size: 18px;
        }

        .region-text {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        /* CONTENEDOR PRINCIPAL */
        .contenedor-principal {
            margin-top: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 120px);
            padding: 40px 20px;
        }

        .proximamente-card {
            background: rgba(240, 238, 232, 0.95);
            border-radius: 15px;
            padding: 80px 60px;
            max-width: 700px;
            width: 100%;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .icono-reloj {
            font-size: 80px;
            margin-bottom: 30px;
            animation: pulso 2s infinite;
        }

        @keyframes pulso {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        .titulo-principal {
            color: #4a4a4a;
            font-size: 56px;
            font-weight: bold;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .subtitulo {
            color: #666;
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .linea-decorativa {
            width: 150px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #c9a76b, transparent);
            margin: 30px auto;
        }

        .loader {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 30px;
        }

        .loader span {
            width: 12px;
            height: 12px;
            background: #c9a76b;
            border-radius: 50%;
            animation: bounce 1.4s infinite ease-in-out both;
        }

        .loader span:nth-child(1) {
            animation-delay: -0.32s;
        }

        .loader span:nth-child(2) {
            animation-delay: -0.16s;
        }

        @keyframes bounce {
            0%, 80%, 100% {
                transform: scale(0);
            }
            40% {
                transform: scale(1);
            }
        }

        footer {
            background-color: white;
            padding: 30px 40px;
            border-top: 2px solid #e0e0e0;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: auto;
        }

        footer a {
            background: #6366f1;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        footer a:hover {
            background: #4f46e5;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    
    <header>
        <div class="logo-container">
            <img src="{{ asset('images/LogoPagina.jpg') }}" alt="Logo" class="logo-text">
        </div>
        
        <nav class="texto">
            <a href="{{ url('principal') }}" class="boton-menu">
                <img src="{{ asset('images/Regiones.jpg') }}" alt="Regiones" class="region-text">
                <span>Regiones</span>
            </a>
            
            <a href="{{ url('personajes') }}" class="boton-menu">
                <img src="{{ asset('images/Personajes.jpg') }}" alt="Personajes" class="region-text">
                <span>Personajes</span>
            </a>
            
            <a href="{{ url('inicio') }}" class="boton-menu">
                <img src="{{ asset('images/Registro.jpg') }}" alt="Registro" class="region-text">
                <span>Inicio Sesión</span>
            </a>
        </nav>
    </header>

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="contenedor-principal">
        <div class="proximamente-card">
            <div class="icono-reloj">⏳</div>
            
            <h1 class="titulo-principal">Próximamente</h1>
            
            <div class="linea-decorativa"></div>
            
            <p class="subtitulo">Estamos trabajando al máximo para darte lo mejor</p>
            
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <a href="{{ url('principal') }}">← Volver al Inicio</a>
    </footer>

</body>
</html>