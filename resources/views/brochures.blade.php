{{-- filepath: g:\pef\resources\views\brochures.blade.php --}}
@extends('layouts.app')

@section('title', 'Brochures - Université PEF')

@section('content')
<main class="container py-5">
    <h1 class="text-center display-4 fw-bold mb-5">UPEF Presentiel et UPEF En ligne</h1>
    <div class="row">

        <!-- Brochure Université PEF -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body">
                    <h2 class="card-title text-primary">Informations UPEF-PRESENTIEL et UPEF-EN LIGNE</h2>
                    <p class="card-text">"Université PEF, l'excellence à portée de main"</p>

                    <h4>Formations proposées</h4>
                    <ul>
                        <li>Formation en présentiel</li>
                        <li>Formation en ligne</li>
                    </ul>

                    <h4>Avantages</h4>
                    <ul>
                        <li>Wi-Fi illimité via Fibre optique</li>
                        <li>Cours de Chinois Mandarin gratuit</li>
                        <li>Cadre en ville et très accessible</li>
                        <li>Parking disponible</li>
                    </ul>

                    <!-- Programmes détaillés -->
                    <div class="accordion mt-4" id="programsAccordion">

                        <!-- INFO -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingInfo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseInfo" aria-expanded="false" aria-controls="collapseInfo">
                                    <strong>INFORMATIQUE (INFO)</strong>
                                </button>
                            </h2>
                            <div id="collapseInfo" class="accordion-collapse collapse" aria-labelledby="headingInfo"
                                data-bs-parent="#programsAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Administration Réseaux</li>
                                        <li>Génie Logiciel et Base de données</li>
                                    </ul>
                                    <h5 class="mt-3">Conditions spécifiques :</h5>
                                    <ul>
                                        <li>Sélection de dossier et entretien</li>
                                        <li>Droit d'inscription</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- DDRI -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDdri">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseDdri" aria-expanded="false" aria-controls="collapseDdri">
                                    <strong>Droit, Diplomatie et Relations Internationales (DDRI)</strong>
                                </button>
                            </h2>
                            <div id="collapseDdri" class="accordion-collapse collapse" aria-labelledby="headingDdri"
                                data-bs-parent="#programsAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Droit privé</li>
                                        <li>Droit public</li>
                                        <li>Diplomatie et Relations Internationales</li>
                                    </ul>
                                    <h5 class="mt-3">Conditions spécifiques :</h5>
                                    <ul>
                                        <li>Sélection de dossier et entretien</li>
                                        <li>Droit d'inscription</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- MAA -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingMaa">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseMaa" aria-expanded="false" aria-controls="collapseMaa">
                                    <strong>Management et Administration des Affaires (MAA)</strong>
                                </button>
                            </h2>
                            <div id="collapseMaa" class="accordion-collapse collapse" aria-labelledby="headingMaa"
                                data-bs-parent="#programsAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Finance et Comptabilité</li>
                                        <li>Entrepreneuriat</li>
                                    </ul>
                                    <h5 class="mt-3">Conditions spécifiques :</h5>
                                    <ul>
                                        <li>Sélection de dossier et entretien</li>
                                        <li>Droit d'inscription</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Brochure Conditions et Contact -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body">
                    <h2 class="card-title text-danger">Conditions et Contact</h2>

                    <div class="accordion" id="conditionsAccordion">

                        <!-- Conditions générales -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingGeneral">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseGeneral" aria-expanded="true"
                                    aria-controls="collapseGeneral">
                                    <h4>Conditions générales d'admission</h4>
                                </button>
                            </h2>
                            <div id="collapseGeneral" class="accordion-collapse collapse show"
                                aria-labelledby="headingGeneral" data-bs-parent="#conditionsAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Entretien de motivation</li>
                                        <li>Médiation de dossier</li>
                                        <li>Droit d'inscription</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Pièces à fournir -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDocuments">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseDocuments" aria-expanded="false"
                                    aria-controls="collapseDocuments">
                                    <h4>Pièces à fournir</h4>
                                </button>
                            </h2>
                            <div id="collapseDocuments" class="accordion-collapse collapse"
                                aria-labelledby="headingDocuments" data-bs-parent="#conditionsAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Photocopie CIN / Acte de naissance</li>
                                        <li>02 photos d'identité</li>
                                        <li>Un CV</li>
                                        <li>Une lettre de motivation</li>
                                        <li>Photocopie du diplôme de baccalauréat / Relevés de notes du baccalauréat</li>
                                        <li>Copie du dernier diplôme reçu (pour les niveaux supérieurs à L1)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingContact">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseContact" aria-expanded="false"
                                    aria-controls="collapseContact">
                                    <h4>Contact</h4>
                                </button>
                            </h2>
                            <div id="collapseContact" class="accordion-collapse collapse"
                                aria-labelledby="headingContact" data-bs-parent="#conditionsAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li><i class="bi bi-telephone"></i> +261 20 85 085 85 / +261 38 45 085 85</li>
                                        <li><i class="bi bi-envelope"></i> contact@pef.mg</li>
                                        <li><i class="bi bi-geo-alt"></i> Cap 3000 Andraharo, Bâtiment 2, 2ème étage</li>
                                    </ul>
                                    <p class="text-muted mt-3">
                                        Université PEF habilitée par l'État - Arrêté N° 34-520 / 2023-15-MESJupRES
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                   

    <!-- Nouvelle section : Informations supplémentaires -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h2 class="text-center text-success mb-4">Informations Supplémentaires - Université UPEF</h2>
                    <p>L’université PEF (Université Parcours Études en France) propose un accompagnement personnalisé aux étudiants souhaitant poursuivre leurs études en France ou à l’international.</p>

                    <h4>Nos atouts :</h4>
                    <ul>
                        <li>Suivi et accompagnement jusqu’à l’obtention du visa étudiant</li>
                        <li>Partenariats avec des établissements en France, au Canada et ailleurs</li>
                        <li>Sessions d'information régulières avec d’anciens étudiants</li>
                    </ul>

                    <h4>Types d’accompagnement :</h4>
                    <ul>
                        <li>Orientation académique</li>
                        <li>Préparation aux entretiens Campus France</li>
                        <li>Aide à la constitution du dossier (Parcoursup, études hors-Parcoursup)</li>
                        <li>Préparation linguistique (DALF/DELF, TOEFL, etc.)</li>
                    </ul>

                    <h4>Contact dédié :</h4>
                    <ul>
                        <li><i class="bi bi-envelope"></i> orientation@pef.mg</li>
                        <li><i class="bi bi-telephone"></i> +261 34 12 345 67</li>
                    </ul>

                    <p class="mt-3 text-muted">
                        Pour plus d’informations, veuillez consulter nos brochures détaillées ou prendre rendez-vous avec notre conseiller pédagogique.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
.accordion-button:not(.collapsed) {
    background-color: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
}
.table th {
    white-space: nowrap;
}
</style>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@endsection
