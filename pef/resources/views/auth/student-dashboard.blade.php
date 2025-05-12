<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Étudiant</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-card {
            border-radius: 15px;
            overflow: hidden;
        }
        .dashboard-header {
            background: linear-gradient(90deg, #007bff, #0056b3);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .dashboard-body {
            padding: 30px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg dashboard-card">
                    <div class="dashboard-header">
                        <h3 class="mb-0">Tableau de bord Étudiant</h3>
                    </div>
                    <div class="dashboard-body bg-light">
                        <p class="fw-bold">Bonjour, {{ Auth::guard('student')->user()->name }} !</p>
                        <p class="text-muted">Voici votre emploi du temps pour aujourd'hui :</p>

                        <!-- Affichage de l'image de l'emploi du temps -->
                        <div class="text-center mb-4">
                            @if(Storage::exists('public/student-schedule.jpg'))
                            <img src="{{ Storage::exists('public/student-schedule.jpg') ? asset('storage/student-schedule.jpg') : asset('images/default-schedule.jpg') }}" alt="Emploi du temps" class="img-fluid rounded shadow">
                        @else
                            <p class="text-muted">Aucun emploi du temps disponible pour le moment.</p>
                        @endif

                        <!-- Bouton de déconnexion -->
                        <form method="POST" action="{{ route('student.logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger w-100">Se déconnecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
