<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact - Personajes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #D0DFF7;
            background-size: cover;
            font-family: 'Times New Roman', Times, serif;
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

        .contenedor-principal {
            margin-top: 120px;
            padding: 40px 20px;
            min-height: calc(100vh - 120px);
        }

        .titulo-personajes {
            color: white;
            font-size: 48px;
            margin-bottom: 40px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            font-weight: bold;
        }

        .letra-divisor {
            color: white;
            font-size: 32px;
            margin-top: 40px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            font-weight: bold;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 10px;
        }

        .personajes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 25px;
            max-width: 1400px;
            margin: 0 auto 30px;
        }

        .boton-personaje {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: all 0.3s ease;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .boton-personaje:hover {
            transform: translateY(-8px);
            color: #6366f1;
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.3);
            background: white;
        }

        .boton-personaje img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .boton-personaje:hover img {
            transform: scale(1.1);
        }

        .boton-personaje span {
            font-size: 16px;
            text-align: center;
        }

        footer {
            background-color: white;
            padding: 30px 40px;
            border-top: 2px solid #e0e0e0;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: 40px;
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
          <a href="{{ url('/principal') }}" class="boton-menu">
                <img src="{{ asset('images/Regiones.jpg') }}" alt="Regiones" class="region-text">
                <span>Regiones</span>
            </a>
            
           <a href="{{ url('/personajes') }}" class="boton-menu">
                <img src="{{ asset('images/Personajes.jpg') }}" alt="Personajes" class="region-text">
                <span>Personajes</span>
            </a>
            
           <a href="{{ url('/inicio-sesion') }}" class="boton-menu">
                <img src="{{ asset('images/Registro.jpg') }}" alt="Registro" class="region-text">
                <span>Inicio Sesion</span>
            </a>
        </nav>
    </header>

    <div class="contenedor-principal">
        <h1 class="titulo-personajes">Personajes</h1>

        {{-- SECCIONES DE PERSONAJES --}}
        {{-- A --}}
        <h2 class="letra-divisor">A</h2>
        <div class="personajes-grid">
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/albedo.jpg') }}"><span>Albedo</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/amber.jpg') }}"><span>Amber</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/aino.jpg') }}"><span>Aino</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/arlecchino.jpg') }}"><span>Arlecchino</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/alhacen.jpg') }}"><span>Alhacen</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/arataki.jpg') }}"><span>Arataki Itto</span></a>
        </div>

        {{-- B --}}
        <h2 class="letra-divisor">B</h2>
        <div class="personajes-grid">
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/barbara.jpg') }}"><span>Barbara</span></a>
            <a href="{{ url('bennett') }}" class="boton-personaje"><img src="{{ asset('images/bennett.jpg') }}"><span>Bennett</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/beidou.jpg') }}"><span>Beidou</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/baizhu.jpg') }}"><span>Baizhu</span></a>
        </div>

        {{-- C --}}
<h2 class="letra-divisor">C</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/chongyun.jpg') }}"><span>Chongyun</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/chiori.jpg') }}"><span>Chiori</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/charlotte.jpg') }}"><span>Charlotte</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/candace.jpg') }}"><span>Candace</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/collei.jpg') }}"><span>Collei</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/chongyun.jpg') }}"><span>Chongyun</span></a>
</div>

{{-- D --}}
<h2 class="letra-divisor">D</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/diluc.jpg') }}"><span>Diluc</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/dehya.jpg') }}"><span>Dehya</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/diona.jpg') }}"><span>Diona</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/dori.jpg') }}"><span>Dori</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/daona.jpg') }}"><span>Daona</span></a>
</div>

{{-- E --}}
<h2 class="letra-divisor">E</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/eula.jpg') }}"><span>Eula</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/emo.jpg') }}"><span>Emo</span></a>
</div>

{{-- F --}}
<h2 class="letra-divisor">F</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/fischl.jpg') }}"><span>Fischl</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/furina.jpg') }}"><span>Furina</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/faruzan.jpg') }}"><span>Faruzan</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/freminet.jpg') }}"><span>Freminet</span></a>
</div>

{{-- G --}}
<h2 class="letra-divisor">G</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/ganyu.jpg') }}"><span>Ganyu</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/gorou.jpg') }}"><span>Gorou</span></a>
</div>

{{-- H --}}
<h2 class="letra-divisor">H</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/hutao.jpg') }}"><span>Hu Tao</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/heizou.jpg') }}"><span>Heizou</span></a>
</div>

{{-- I --}}
<h2 class="letra-divisor">I</h2>
<div class="personajes-grid">
    <a href="{{ url('ifa') }}" class="boton-personaje"><img src="{{ asset('images/ifa.jpg') }}"><span>Ifa</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/ineffa.jpg') }}"><span>Ineffa</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/iansan.jpg') }}"><span>Iansan</span></a>
</div>


        {{-- L --}}
        <h2 class="letra-divisor">L</h2>
        <div class="personajes-grid">
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/laila.jpg') }}"><span>Laila</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/lan.jpg') }}"><span>Lan Yan</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/lauma.jpg') }}"><span>Lauma</span></a>
            <a href="{{ url('lisa') }}" class="boton-personaje"><img src="{{ asset('images/lisa.jpg') }}"><span>Lisa</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/lynette.jpg') }}"><span>Lynette</span></a>
            <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/lyney.jpg') }}"><span>Lyney</span></a>
        </div>

        {{-- N --}}
<h2 class="letra-divisor">N</h2>
<div class="personajes-grid">
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/nahida.jpg') }}"><span>Nahida</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/navia.jpg') }}"><span>Navia</span></a>
    <a href="{{ url('Neuvillette') }}" class="boton-personaje"><img src="{{ asset('images/neuvillette.jpg') }}"><span>Neuvillette</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/ningguang.jpg') }}"><span>Ningguang</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/nilou.jpg') }}"><span>Nilou</span></a>
</div>

{{-- O --}}
<h2 class="letra-divisor">O</h2>
<div class="personajes-grid">
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/ororon.jpg') }}"><span>Ororon</span></a>
</div>

{{-- P --}}
<h2 class="letra-divisor">P</h2>
<div class="personajes-grid">
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/paimon.jpg') }}"><span>Paimon</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/paella.jpg') }}"><span>Paella</span></a>
</div>

{{-- Q --}}
<h2 class="letra-divisor">Q</h2>
<div class="personajes-grid">
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/qiqi.jpg') }}"><span>Qiqi</span></a>
</div>

{{-- R --}}
<h2 class="letra-divisor">R</h2>
<div class="personajes-grid">
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/razor.jpg') }}"><span>Razor</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/rosaria.jpg') }}"><span>Rosaria</span></a>
</div>

{{-- S --}}
<h2 class="letra-divisor">S</h2>
<div class="personajes-grid">
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/sayu.jpg') }}"><span>Sayu</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/sucrose.jpg') }}"><span>Sucrose</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/sigewinne.jpg') }}"><span>Sigewinne</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/shenhe.jpg') }}"><span>Shenhe</span></a>
</div>

{{-- T --}}
<h2 class="letra-divisor">T</h2>
<div class="personajes-grid">
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/tartaglia.jpg') }}"><span>Tartaglia</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/thonar.jpg') }}"><span>Thonar</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/thoma.jpg') }}"><span>Thoma</span></a>
</div>

{{-- V --}}
<h2 class="letra-divisor">V</h2>
<div class="personajes-grid">
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/venti.jpg') }}"><span>Venti</span></a>
    <a href="{{ url('Proximamente') }}" class="boton-personaje"><img src="{{ asset('images/vistra.jpg') }}"><span>Vistra</span></a>
</div>

{{-- W --}}
<h2 class="letra-divisor">W</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/wriothesley.jpg') }}"><span>Wriothesley</span></a>
</div>

{{-- X --}}
<h2 class="letra-divisor">X</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/xiao.jpg') }}"><span>Xiao</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/xinyan.jpg') }}"><span>Xinyan</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/xingqiu.jpg') }}"><span>Xingqiu</span></a>
</div>

{{-- Y --}}
<h2 class="letra-divisor">Y</h2>
<div class="personajes-grid">
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/yaemiko.jpg') }}"><span>Yae Miko</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/yanfei.jpg') }}"><span>Yanfei</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/yelan.jpg') }}"><span>Yelan</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/yoimiya.jpg') }}"><span>Yoimiya</span></a>
    <a href="{{ url('proximamente') }}" class="boton-personaje"><img src="{{ asset('images/yaoyao.jpg') }}"><span>Yaoyao</span></a>
</div>

{{-- Z --}}
<h2 class="letra-divisor">Z</h2>
<div class="personajes-grid">
    <a href="{{ url('zhongli') }}" class="boton-personaje"><img src="{{ asset('images/zhongli.jpg') }}"><span>Zhongli</span></a>
</div>
    

    <footer>
        <a href="{{ url('principal') }}">← Volver al Inicio</a>
    </footer>

</body>
</html>