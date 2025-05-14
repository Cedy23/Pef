{{-- filepath: g:\pef\resources\views\layouts\app.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Université PEF')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        :root {
            --bleu-france: #0055A4;
            --blanc: #FFFFFF;
            --rouge: #EF4135;
            --bleu-clair: #E8F1FF;
            --rouge-clair: #FFE8E6;
        }

        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: var(--bleu-clair);
            color: #1b1b18;
        }

        .navbar-custom {
            background: linear-gradient(90deg, var(--bleu-france) 33%, var(--blanc) 33%, var(--blanc) 66%, var(--rouge) 66%);
        }

        .footer {
            background-color: var(--bleu-france);
            color: white;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Contenu principal -->
    <main class="flex-grow-1 container py-5">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
