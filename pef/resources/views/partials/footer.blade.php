{{-- filepath: g:\pef\resources\views\partials\footer.blade.php --}}
<footer id="contact" class="footer mt-auto py-5 bg-light border-top">
    <div class="container">
        <div class="row text-center text-md-start">
            <!-- Université PEF -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-primary">UNIVERSITÉ PEF</h5>
                <p class="text-muted">Parcours Études et Formations</p>
                <p class="fst-italic">"L'excellence à portée de main"</p>
                <p class="text-muted small">Habilitée par l'État - Arrêté N° 34-520 / 2023-15-MESupRES</p>
            </div>

            <!-- Contact -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-primary">Contact</h5>
                <p class="text-muted"><strong>Téléphone :</strong><br>
                    +261 20 85 085 85<br>
                    +261 38 45 085 85
                </p>
                <p class="text-muted"><strong>Email :</strong><br>
                    <a href="mailto:contact@pef.mg" class="text-decoration-none text-primary">contact@pef.mg</a>
                </p>
                <!-- Bouton interactif -->
                <button id="contactButton" class="btn btn-primary mt-3">Nous Contacter</button>
            </div>

            <!-- Adresse et Formations -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-primary">Adresse</h5>
                <p class="text-muted">Cap 3000 Andraharo,<br>Bâtiment 2, 2ème étage</p>

                <h5 class="fw-bold text-primary mt-4">Formations</h5>
                <ul class="list-unstyled text-muted">
                    <li>Formation en présentiel</li>
                    <li>Formation en ligne</li>
                </ul>
            </div>
        </div>

        <hr class="border-light">
        <p class="mt-3 text-center text-muted small">© 2025 UNIVERSITÉ PEF - Parcours Études et Formations. Tous droits réservés.</p>
    </div>
</footer>

<style>
    footer {
        background: linear-gradient(90deg, #f8f9fa, #e9ecef);
        transition: background-color 0.3s ease;
    }

    footer:hover {
        background: linear-gradient(90deg, #e9ecef, #f8f9fa);
    }

    .footer h5 {
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: transform 0.2s ease, background-color 0.3s ease;
    }

    .btn-primary:hover {
        transform: scale(1.1);
        background-color: #0056b3;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const contactButton = document.getElementById('contactButton');
        contactButton.addEventListener('click', function () {
            alert('Merci de nous contacter ! Nous vous répondrons dans les plus brefs délais.');
        });
    });
</script>
