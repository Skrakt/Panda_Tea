<?php  echo "<link rel='stylesheet' href='" . $cssFile . "'>"; ?>

<form action="./?action=registerUser" method="post" class="col-md-5 marge">
    <h1 class="T1">Je créer mon compte</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom</label>
        <input class="form-control" name="Nom">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Prénom</label>
        <input class="form-control" name="Prenom">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-mail*</label>
        <input class="form-control" name="Email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe*</label>
        <input class="form-control" name="Mdp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirmer le mot de passe*</label>
        <input class="form-control" name="Mdp2">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary" name="submit" value="singUp">S'INSCRIRE</button>
        <p class="T3">En créant un compte, vous acceptez nos conditions générales et notre politique de
            confidentialité & cookies.</p>
    </div>
</form>


