<main>
        <?php  echo "<link rel='stylesheet' href='" . $cssFile . "'>"; ?>
        <section class="row client justify-content-center">
            <form class="col-md-5">
                <h1 class="T1">Se connecter</h1>
                <div class="col m-3">
                    <label for="exampleInputEmail1" class="form-label"></label>
                    <form action="connexionUser.php" method="post">
                        <p>Email : <input type="text" name="Email" /></p>
                        <p>Mot de Passe : <input type="text" name="Mdp" /></p>
                        <input type="submit" name="connexionUser" value="Connexion">
                    </form>
                    <div class="text-center">
                        <p class="T2">Mot de passe oublié ?</p>
                    </div>
                </div>
            </form>
            
        </section>
    </main>
