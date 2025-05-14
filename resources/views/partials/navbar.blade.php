{{-- filepath: g:\pef\resources\views\partials\navbar.blade.php --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo-PEF.PNG') }}" alt="Logo Université PEF" style="height: 80px;" class="me-2">
            <span class="fw-bold text-primary">Université PEF</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-3">
                <li class="nav-item">
                    <a href="/" class="nav-link text-dark fw-semibold">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Inscription</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('student.login') }}" class="btn btn-primary">Connexion Étudiant</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('professor.login') }}" class="btn btn-secondary">Connexion Professeur</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .navbar.scrolled {
        background-color: #f8f9fa;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-link.active {
        color: #007bff !important;
        font-weight: bold;
    }

    .btn {
        transition: transform 0.2s ease;
    }

    .btn:hover {
        transform: scale(1.1);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Change navbar background on scroll
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Highlight active link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add('active');
            }
        });
    });
</script>
