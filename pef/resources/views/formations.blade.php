{{-- filepath: g:\pef\resources\views\formations.blade.php --}}
@extends('layouts.app')

@section('title', 'Étudier en France - Université PEF')

@section('content')
<!-- Contenu principal -->
<main class="flex-grow-1 container py-5">
    <!-- Section accroche -->
    <section class="text-center mb-5">
        <h1 class="fw-bold display-4">Étudier en France avec Université PEF</h1>
        <p class="lead text-muted">"L'avenir commence en France"</p>
        <p class="text-muted">En partenariat avec BM Madagascar et OMNES Education</p>
    </section>

    <!-- Nouvelle section Filieres -->
    <section id="filieres" class="mb-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h2 class="fw-bold mb-4">Nos Filières Disponibles</h2>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="p-4 bg-light rounded h-100">
                                    <i class="bi bi-briefcase fs-1 text-primary"></i>
                                    <h5 class="mt-3">Management & Commerce International</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-4 bg-light rounded h-100">
                                    <i class="bi bi-megaphone fs-1 text-danger"></i>
                                    <h5 class="mt-3">Marketing et Communication</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-4 bg-light rounded h-100">
                                    <i class="bi bi-calculator fs-1 text-success"></i>
                                    <h5 class="mt-3">Finance & Comptabilité</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-4 bg-light rounded h-100">
                                    <i class="bi bi-globe fs-1 text-info"></i>
                                    <h5 class="mt-3">Droit et Relations Internationales</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-4 bg-light rounded h-100">
                                    <i class="bi bi-building fs-1 text-warning"></i>
                                    <h5 class="mt-3">Sciences Politiques</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-4 bg-light rounded h-100">
                                    <i class="bi bi-code-slash fs-1 text-secondary"></i>
                                    <h5 class="mt-3">Informatique et Digital</h5>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-muted">Et bien d'autres filières disponibles !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section des avantages -->
    <div class="row text-center py-5">
        <div class="col-md-4">
            <div class="p-4 shadow rounded bg-white advantage-card">
                <i class="bi bi-passport fs-1 text-primary"></i>
                <h5 class="mt-3">Visa Étudiant Simplifié</h5>
                <p class="text-muted">Procédures accélérées et support complet pour l'obtention de votre visa.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 shadow rounded bg-white advantage-card">
                <i class="bi bi-currency-dollar fs-1 text-success"></i>
                <h5 class="mt-3">Offres de Crédit Avantageuses</h5>
                <p class="text-muted">Financement adapté à votre projet d'études avec taux préférentiels.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 shadow rounded bg-white advantage-card">
                <i class="bi bi-people fs-1 text-danger"></i>
                <h5 class="mt-3">Accompagnement Personnalisé</h5>
                <p class="text-muted">Suivi individualisé tout au long de vos démarches administratives.</p>
            </div>
        </div>
    </div>

    <!-- Options d'études -->
    <section id="formations" class="mb-5">
        <h2 class="text-center fw-bold mb-4">Nos Options d'Études</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow border-0 formation-card">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Option 1 : Bachelor & Master</h4>
                        <h5 class="mt-3">Filières :</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item"><strong>Tronc commun en Sciences de Gestion :</strong><br>
                                Marketing, Commerce, Management, Comptabilité, Finance, Ressources humaines
                            </li>
                            <li class="list-group-item"><strong>Droit, Diplomatie et Relations internationales</strong></li>
                        </ul>
                        
                        <h5 class="mt-3">Parcours :</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item"><strong>B1</strong> - 1ère année</li>
                            <li class="list-group-item"><strong>B2</strong> - 2ème année</li>
                            <li class="list-group-item"><strong>M1</strong> - 4ème année</li>
                        </ul>
                        
                        <h5 class="mt-3">Option 2+1 :</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">2 ans à Madagascar, 1 an en France</li>
                            <li class="list-group-item">Dépôt de dossier et droit de test</li>
                            <li class="list-group-item">Tests : Culture Générale, psychotechnique, anglais, français (écrit) + Entretien de motivation (oral)</li>
                            <li class="list-group-item">Droit d'inscription B1/B2</li>
                            <li class="list-group-item">Frais de scolarité B1</li>
                            <li class="list-group-item">Frais de scolarité B2</li>
                        </ul>
                        
                        <h5 class="mt-3">Option 1+1 :</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1 an à Madagascar, 1 an en France</li>
                            <li class="list-group-item">Dépôt de dossier et droit de test</li>
                            <li class="list-group-item">Test : Entretien de motivation (oral)</li>
                            <li class="list-group-item">Droit d'inscription</li>
                            <li class="list-group-item">Frais de scolarité M1</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow border-0 formation-card">
                    <div class="card-body">
                        <h4 class="card-title text-danger">Option 2 : Départ Direct</h4>
                        <h5 class="mt-3">Programmes disponibles :</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">B1/B2/B3/M1/M2</li>
                        </ul>
                        
                        <h5 class="mt-3">Conditions :</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">Droit de test B1, B2, B3 (Test écrit & oral)</li>
                            <li class="list-group-item">Droit de test M1, M2 (Test Oral)</li>
                            <li class="list-group-item">Frais de coopération entre universités</li>
                            <li class="list-group-item">Frais de scolarité premier cycle (France)</li>
                            <li class="list-group-item">Frais de scolarité second cycle (France)</li>
                            
                        </ul>
                        
                        <div class="alert alert-warning">
                            <strong>Note :</strong> Les frais de scolarité peuvent varier selon l'université choisie.
                            Frais de dossier (Campus France, VISA...), hébergement, garants, billet d'avion... sont à la charge de l'étudiant.
                        </div>
                        
                        <h5 class="mt-3">Calendrier :</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Rentrée en France : septembre/octobre (officielle) ou janvier/février/mars (décalée)</li>
                            <li class="list-group-item">Date d'inscription au test : 4 mois avant la rentrée en France</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modalités d'Admission & Financement -->
    <section id="admission" class="mb-5">
        <h2 class="text-center fw-bold mb-4">Modalités d'Admission & Financement</h2>
        <div class="row">
            <div class="col-md-6">
                <h4 class="mb-3">Pièces à fournir :</h4>
                <ul class="list-group mb-4">
                    <li class="list-group-item">Photocopie CIN / Acte de naissance</li>
                    <li class="list-group-item">02 Photos d'identité</li>
                    <li class="list-group-item">Un CV</li>
                    <li class="list-group-item">Une lettre de motivation</li>
                    <li class="list-group-item">Photocopie du diplôme de baccalauréat / Relevé de notes du baccalauréat</li>
                    <li class="list-group-item">Copie du dernier diplôme reçu</li>
                    <li class="list-group-item">Copie des 3 derniers bulletins de notes</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow border-0 fee-card">
                            <div class="card-header bg-primary text-white">
                                Offre de Financement
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>Crédit étudiant à taux réduit</li>
                                    <li>Plan de paiement échelonné</li>
                                    <li>Subventions partenaires disponibles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow border-0 fee-card">
                            <div class="card-header bg-success text-white">
                                Aides et Subventions
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>Bourses d'excellence</li>
                                    <li>Aides financières personnalisées</li>
                                    <li>Accompagnement pour les dossiers de crédit</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-0 mt-4">
                    <div class="card-header bg-info text-white">
                        Contact
                    </div>
                    <div class="card-body">
                        <p><i class="bi bi-geo-alt"></i> Cap 3000 Andraharo, Bâtiment 2, 2ème étage</p>
                        <p><i class="bi bi-envelope"></i> contact@pef.mg</p>
                        <p><i class="bi bi-telephone"></i> +261 33 53 085 85</p>
                        <p><i class="bi bi-telephone"></i> +261 20 85 085 85</p>
                        <p><i class="bi bi-telephone"></i> +261 38 45 085 85</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section OMNES Education Brochure -->
    <section id="omnes-education" class="mb-5">
        <h2 class="text-center fw-bold mb-4">Programmes en Gestion - OMNES Education</h2>
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-primary">Une Offre Complète de Programmes de Gestion</h4>
                <p>Découvrez une gamme complète de programmes alliant cours interactifs, projets professionnels et expériences terrain :</p>
                <ul>
                    <li>Bachelor of International Management</li>
                    <li>Master in Management (Grande École Programme)</li>
                    <li>MSc</li>
                    <li>Executive Education</li>
                    <li>Digital Executive MBA</li>
                    <li>DBA (Doctor of Business Administration)</li>
                    <li>Summer School</li>
                </ul>
                <div class="mt-4 pt-3 border-top">
                    <h4 class="text-primary">OMNES EDUCATION</h4>
                    <h5 class="text-danger">MBS <small class="text-muted">since 1897</small></h5>
                    <h5 class="text-success">PEFA <small>PARCOURS ÉTUDES EN FRANCE</small></h5>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-danger">Plan de Cours : Années 2 & 3</h4>
                <div class="card h-100 shadow border-0 formation-card">
                    <div class="card-body">
                        <h5 class="fw-bold">2ème Année</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Digital Marketing</li>
                            <li class="list-group-item">Business Development</li>
                            <li class="list-group-item">Project Management</li>
                            <li class="list-group-item">International Business</li>
                            <li class="list-group-item">Business Game</li>
                            <li class="list-group-item">Negotiation</li>
                            <li class="list-group-item">Strategic Management</li>
                            <li class="list-group-item">Marketing & Market Research</li>
                            <li class="list-group-item">Elective Courses</li>
                        </ul>
                        <h5 class="fw-bold mt-4">3ème Année</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Digital Marketing</li>
                            <li class="list-group-item">Business Development</li>
                            <li class="list-group-item">Project Management</li>
                            <li class="list-group-item">International Business</li>
                            <li class="list-group-item">Business Game</li>
                            <li class="list-group-item">Negotiation</li>
                            <li class="list-group-item">Strategic Management</li>
                            <li class="list-group-item">Marketing & Market Research</li>
                            <li class="list-group-item">Elective Courses</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <p class="text-muted">Pour plus d'informations : <a href="https://www.montpellier-bs.com/" target="_blank">Montpellier Business School</a></p>
                    <p class="text-muted">2300 avenue des Moulins, 34185 Montpellier Cedex 4, FRANCE</p>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    .advantage-card, .formation-card, .fee-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .advantage-card:hover, .formation-card:hover, .fee-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.advantage-card, .formation-card, .fee-card');
        cards.forEach(card => {
            card.addEventListener('click', function () {
                alert('Merci de votre intérêt pour nos opportunités d\'études en France !');
            });
        });
    });
</script>
@endsection