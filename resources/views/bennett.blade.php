<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact - Bennett</title>
    
    <!-- Ícono -->
    <link rel="icon" type="image/png" href="{{ asset('images/icono.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('{{ asset('images/fondobennett.jpg') }}');
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Times New Roman', Times, serif;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: white;
            border-bottom: 2px solid #89351e;
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

        .contenedor-principal {
            margin-top: 120px;
            padding: 40px 20px;
            min-height: calc(100vh - 120px);
        }

        .seccion-cards {
            max-width: 1200px;
            margin: 0 auto 50px;
        }

        .titulo-principal {
            color: white;
            font-size: 42px;
            margin-bottom: 10px;
            text-shadow: 0px 0px 10px rgba(0,0,0,0.8);
            font-weight: bold;
        }

        .titulo-seccion {
            color: white;
            font-size: 36px;
            margin-bottom: 30px;
            text-shadow: 0px 0px 10px rgba(0,0,0,0.8);
            font-weight: bold;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.3);
        }

        .card-img-top {
            height: 300px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            background: #ac7d5b;
        }

        .card-title {
            color: #461a16;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card-text {
            color: #333;
            font-size: 14px;
            line-height: 1.6;
        }

        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px auto;
            max-width: 1200px;
        }

        .video-container iframe {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        footer {
            background-color: #f1b11a;
            padding: 30px 40px;
            border-top: 2px solid #89351e;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        footer a {
            background: #ac7d5b;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            border-bottom: 2px solid #89351e;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        footer a:hover {
            background: #ac7d5b;
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
            
            <a href="{{ url('inicio-sesion') }}" class="boton-menu">
                <img src="{{ asset('images/Registro.jpg') }}" alt="Registro" class="region-text">
                <span>Inicio Sesión</span>
            </a>
        </nav>
    </header>

    <div class="contenedor-principal">

        <div class="seccion-cards">
            <h1 class="titulo-principal">Bennett</h1>
            <h2 class="titulo-seccion">⭐ Mejores armas 5 estrellas para Bennett</h2>
            
            <div class="cards-grid">
                <div class="card">
                    <img src="{{ asset('images/aquila.jpg') }}" class="card-img-top" alt="Crescent">
                    <div class="card-body">
                        <h5 class="card-title">Aquila Favonia</h5>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/mistpliter.jpg') }}" class="card-img-top" alt="Vortex">
                    <div class="card-body">
                        <h5 class="card-title">mistpliter</h5>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/skywardblade.jpg') }}" class="card-img-top" alt="Zhongli">
                    <div class="card-body">
                        <h5 class="card-title">skyward blade</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="seccion-cards">
            <h2 class="titulo-seccion">💎 Mejores armas 4 y 3 estrellas para Bennett</h2>
            
            <div class="cards-grid">
                <div class="card">
                    <img src="{{ asset('images/alley.jpg') }}" class="card-img-top" alt="homa">
                    <div class="card-body">
                        <h5 class="card-title">alley flash</h5>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/rencor.jpg') }}" class="card-img-top" alt="skyward">
                    <div class="card-body">
                        <h5 class="card-title">Prototipo rencor</h5>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/blackcliff.jpg') }}" class="card-img-top" alt="prototype">
                    <div class="card-body">
                        <h5 class="card-title">blackcliff</h5>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/festering.jpg') }}" class="card-img-top" alt="Favonius">
                    <div class="card-body">
                        <h5 class="card-title">festering desire</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="seccion-cards">
            <h2 class="titulo-seccion">🎭 Artefactos Recomendados</h2>
            
            <div class="cards-grid">
                <div class="card">
                    <img src="{{ asset('images/noblesse.jpg') }}" class="card-img-top" alt="Artefacto 1">
                    <div class="card-body">
                        <h5 class="card-title">Nobleza</h5>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/doncella.jpg') }}" class="card-img-top" alt="Artefacto 2">
                    <div class="card-body">
                        <h5 class="card-title">maiden beloved</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="seccion-cards">
            <h2 class="titulo-seccion">📊 Stats Recomendados</h2>
            
            <div class="cards-grid">
                <div class="card">
                    <img src="{{ asset('images/relojnobleza.jpg') }}" class="card-img-top" alt="Stats DPS">
                    <div class="card-body">
                        <h5 class="card-title">Reloj</h5>
                        <p class="card-text">Prioriza vida o recarga de energia al momento de elegir el artefacto</p>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/copanobleza.jpg') }}" class="card-img-top" alt="Stats Support">
                    <div class="card-body">
                        <h5 class="card-title">Copa</h5>
                        <p class="card-text">Enfocate en que el artefacto tenga vida</p>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('images/tiaranobleza.jpg') }}" class="card-img-top" alt="Stats Tank">
                    <div class="card-body">
                        <h5 class="card-title">Tiara</h5>
                        <p class="card-text">Busca que tenga vida</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/r6Xsrsfm-b0?si=8c3PgEiiu1cNvZRn" 
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    <footer>
        <a href="{{ url('principal') }}">← Volver al Inicio</a>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
