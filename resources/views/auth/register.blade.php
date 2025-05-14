<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('images/register-bg.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }
        .register-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 30px;
            max-width: 600px; /* Augmentation de la largeur */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 50%;
            right: 5%; /* Positionné à droite */
            transform: translateY(-50%);
        }
        .register-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .register-header h3 {
            font-weight: bold;
            color: #333;
        }
        .btn-primary {
            background-color: #390cb6;
            border: none;
        }
        .btn-primary:hover {
            background-color: #160868;
        }
        .btn-outline-primary {
            border-color: #2f1085;
            color: #220e7e;
        }
        .btn-outline-primary:hover {
            background-color: #2c0f92;
            color: #fff;
        }
        .form-control:focus {
            border-color: #390cb6;
            box-shadow: 0 0 5px rgba(57, 12, 182, 0.5);
        }
        .text-danger {
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <h3>Créer un compte</h3>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Nom complet</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Entrez votre nom complet" required>
                @error('name')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <!-- Prenom Field -->
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" class="form-control" placeholder="Entrez votre prénom" required>
                @error('prenom')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Entrez votre adresse e-mail" required>
                @error('email')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Entrez un mot de passe sécurisé" required>
                @error('password')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmez le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmez votre mot de passe" required>
            </div>

            <!-- Role Selection -->
            <div class="mb-3">
                <label for="role" class="form-label">S'inscrire en tant que</label>
                <select name="role" id="role" class="form-select" required>
                    <option value="student">Étudiant</option>
                    <option value="professor">Professeur</option>
                </select>
                @error('role')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
            <div class="mt-3 text-center">
                <a href="{{ url('/') }}" class="btn btn-outline-primary w-100">Retour à l'accueil</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
