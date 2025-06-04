<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Martina')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/img/fondo.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', sans-serif;
        }
        .fondo-overlay {
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            min-height: 100vh;
            padding-top: 80px;
        }
        .navbar-custom {
            background-color:rgb(192, 123, 252); /* Morado pastel */
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white;
            font-weight: bold;
        }
        h1 {
            text-shadow: 1px 1px 2px #00000088;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="/">
                🏠 Inicio
            </a>

            <div class="text-center flex-grow-1">
                <span class="navbar-text fw-bold fs-4 text-white">
                    Desayunos MARTINA
                </span>
            </div>

            <a class="nav-link text-white fw-bold" href="javascript:history.back()">⬅️ Volver</a>
        </div>
    </nav>
    <div class="fondo-overlay d-flex flex-column align-items-center justify-content-start text-center text-white">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey && e.key === 'm') {
            window.location.href = '/admin';
        }
    });
</script>
</body>
</html>
