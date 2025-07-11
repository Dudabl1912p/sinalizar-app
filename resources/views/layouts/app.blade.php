<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sinalizar')</title>

    <!-- Bootstrap e ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    @vite(['resources/css/estilo.css', 'resources/js/mascara-telefone.js'])

    <link rel="icon" href="{{ asset('imagens/favicon.png') }}" type="image/x-icon">

    @stack('styles')

</head>
<body>

    <!-- Navbar -->
    <x-navbar />
    

    {{-- Conteúdo das páginas --}}
    <main>
        @yield('content')
    </main>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>