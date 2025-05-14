<!-- filepath: d:\pef\resources\views\admin\admin-dashboard.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Administrateur</title>

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
                        <h3 class="mb-0">Tableau de bord Administrateur</h3>
                    </div>
                    <div class="dashboard-body bg-light">
                        <p class="fw-bold">Bonjour, Administrateur !</p>
                        <p class="text-muted">Vous pouvez importer les emplois du temps et les plannings ici :</p>

                        <!-- Formulaire pour l'emploi du temps des étudiants -->
                        <div class="mb-4">
                            <h5>Importer l'emploi du temps des étudiants</h5>
                            <form method="POST" action="{{ route('admin.uploadStudentSchedule') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="studentSchedule" class="form-label">Choisir une image</label>
                                    <input type="file" class="form-control" id="studentSchedule" name="studentSchedule" accept="image/*" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Importer</button>
                            </form>
                        </div>

                        <!-- Formulaire pour le planning des professeurs -->
                        <div class="mb-4">
                            <h5>Importer le planning des professeurs</h5>
                            <form method="POST" action="{{ route('admin.uploadProfessorSchedule') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="professorSchedule" class="form-label">Choisir une image</label>
                                    <input type="file" class="form-control" id="professorSchedule" name="professorSchedule" accept="image/*" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Importer</button>
                            </form>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        <!-- Bouton de déconnexion -->
                        <form method="POST" action="{{ route('admin.logout') }}">
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
