
 <main>

    <?php  echo "<link rel='stylesheet' href='" . $cssFile . "'>"; ?>
    
 <h1 class="T1">Contactez-nous</h1>
 <p class="T2">Notre équipe vous répond du lundi au vendredi de 9h à 18H et même parfois plus tard à l'adresse
     contact@pandatea.fr
     <br><br>
     Pour toute question concernant votre commande pensez à indiquer votre numéro de commande et/ou l'email avec
     lequel
     vous avez passé commande.
 </p>

 <!-------------------------------------------------------BOOTSTRAP-------------------------------------------------------->

 <section class="contact">
     <form class="text-center">
         <div class="mb-3 bords">
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                 placeholder="Nom (obligatoire)">
         </div>
         <div class="mb-3">
             <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail (obligatoire)">
         </div>
         <div class="mb-3">
             <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Téléphone">
         </div>
         <div class="mb-3">
             <textarea type="email" class="form-control" rows="10" id="exampleInputEmail1" placeholder="Message"></textarea>
         </div>
         <button type="submit" class="btn btn-primary" id="bouton">ENVOYER</button>
     </form>
 </section>

 <!--------------------------------------------------------------------------------------------------------------->

 <img class="img-contact" src="./img/banniere_contact.PNG">
</main>
