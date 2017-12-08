<?php require 'header.php'; ?>

    <main role="main" class="container">
        <!-- Form register -->
        <form data-toggle="validator">
            <p class="h5 text-center mb-4">Se connecter</p>

            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input required type="text" id="orangeForm-name" class="form-control">
                <label for="orangeForm-name">Nom</label>
            </div>
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input required type="email" id="orangeForm-email" class="form-control">
                <label for="orangeForm-email">Email</label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input required type="password" id="orangeForm-pass" class="form-control">
                <label for="orangeForm-pass">Mot de passe</label>
            </div>

            <div class="text-center">
                <a href="dashboard" class="btn btn-deep-orange">Valider</a>
            </div>

        </form>
        <!-- Form register -->
    </main>


<?php require 'footer.php'; ?>