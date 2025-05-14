@extends('layouts.app')

@section('title', 'Accueil - Université PEF')

@section('content')
<div class="container py-5">
    <!-- Section d'introduction -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4">Bienvenue à l'Université PEF</h1>
        <p class="lead text-muted">Découvrez nos informations et notre engagement pour l'excellence.</p>
        <a href="{{ route('formations') }}" class="btn btn-primary btn-lg px-4">
            Voir plus d'informations sur nos formations PEF
        </a>
        <a href="{{ route('brochures') }}" class="btn btn-secondary btn-lg px-4">
            Accéder à l'information UPEF
        </a>
    </div>
</div>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide shadow rounded mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/accueil-1.jpeg') }}" class="d-block w-100 rounded" alt="Slide 1" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="bg-dark bg-opacity-50 p-2 rounded">Bienvenue à l'Université PEF</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/accueil-2.jpeg') }}" class="d-block w-100 rounded" alt="Slide 2" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="bg-dark bg-opacity-50 p-2 rounded">Découvrez nos formations</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/accueil-3.jpeg') }}" class="d-block w-100 rounded" alt="Slide 3" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="bg-dark bg-opacity-50 p-2 rounded">Rejoignez-nous dès aujourd'hui</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

    <!-- Section des avantages -->
    <div class="row text-center py-5">
        <div class="col-md-4">
            <div class="p-4 shadow rounded bg-white advantage-card">
                <i class="bi bi-wifi fs-1 text-primary"></i>
                <h5 class="mt-3">Wi-Fi illimité</h5>
                <p class="text-muted">Accès internet via fibre optique.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 shadow rounded bg-white advantage-card">
                <i class="bi bi-translate fs-1 text-success"></i>
                <h5 class="mt-3">Cours de Chinois</h5>
                <p class="text-muted">Apprenez le mandarin gratuitement.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 shadow rounded bg-white advantage-card">
                <i class="bi bi-geo-alt fs-1 text-danger"></i>
                <h5 class="mt-3">Cadre accessible</h5>
                <p class="text-muted">Situé en ville avec parking sécurisé.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .carousel-caption h5 {
        animation: fadeIn 1.5s ease-in-out;
    }

    .advantage-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .advantage-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.advantage-card');
        cards.forEach(card => {
            card.addEventListener('click', function () {
                alert('Merci de votre intérêt pour nos services !');
            });
        });
    });
</script>
@endsection
