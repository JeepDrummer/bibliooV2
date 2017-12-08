<?php require 'header.php';?>
    <main role="main" class="container">
        <!-- Form register -->
        <form>
            <p class="h5 text-center mb-4">Réservation</p>

            <!--Checkbox butons-->
            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="text" id="orangeForm-name" class="form-control">
                <label for="orangeForm-name">Nom</label>
            </div>

            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="text" id="orangeForm-forname" class="form-control">
                <label for="orangeForm-forname">Prénom</label>
            </div>
            <div>
                <select id="select-formation">
                    <option value="" disabled selected>Formation</option>
                    <option value="valeur1">DL</option>
                    <option value="valeur2">CDI</option>
                </select>
            </div>

            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="email" id="orangeForm-email" class="form-control">
                <label for="orangeForm-email">Email</label>
            </div>
            <div class="text-center">
                <button class="btn btn-deep-orange">Valider</button>
            </div>

        </form>
        <!-- Form register -->
    </main>

<?php require 'footer.php'; ?>