<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, , minimum-scale=1, user-scalable=no"><!--responsive---->
    <link rel="shortcut icon" href="./css/img/logo.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/><!--bootstrap----->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="./css/main.css"/><!---css------>

    <title> Projet valero </title>
  </head>
  <body>

     <!-- carte de visite -->

    <div id="fondtete">
      <div class="imagefond">
        <div class="opaque">

        </div>
      </div>
      <header class="texteentete">
        <h1>JOSE VALERO</h1>
        <h1>Plombier - Chauffagiste - Assainissement</h1>
        <h3>Siret: 065265 254</h3>
        <div class="sectionimage">
          <img class="logo" src="./css/img/newlogo.png" alt="" /><!--img logo-->
        </div>
        <ul class="groupCoordonnees">
          <li class="listecoordonne"><a href="tel:0686485940">Tel: 06.86.48.59.40</a></li>
          <li class="listecoordonne">Email: jvservices34@gmail.com</li>
        </ul>
      </header>
    </div>

    <!-- Barre de nav -->

    <nav class=" col-xs-12 containernav">
        <ul class="groupelistenav">
          <li class="listenav"><a class="js-scrollTo" href="#presentation">Présentation</a></li>
          <li class="listenav"><a class="js-scrollTo" href="#prestation">Prestations</a></li>
          <li class="listenav"><a class="js-scrollTo" href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- section présentation -->

    <section class=" col-xs-12 toutessections">
      <header>
        <h2 id="presentation">Présentation</h2>
      </header>
      <article class="texte">
          <p>
            J’exerce le métier de plombier/chauffagiste depuis 1979.
            J'interviens dans tout type de chantier.
            Je travaille dans le neuf comme dans la rénovation.
            Ma mobilité et mon expérience professionnelle me permettent de répondre au mieux à vos attentes.
          </p>
      </article>
    </section>

    <!-- section prestation -->

    <section class=" col-xs-12 toutessections">
      <header>
        <h2 id="prestation">Mes services</h2>
      </header>

 <!--images en bootstrap-->

 <div class="container">
    <div class="row">
     <div class="col-sm-6 col-md-4 col-md-offset-1">
       <div class="thumbnail">
         <img class="taillephoto" src="./css/img/plomberie1.jpg">
           <h3>Plomberie</h3>
           <ul class="groupelisteprestation">
             <li class="listeprestation">Installation sanitaire (tout type)</li>
             <li class="listeprestation">Localisation fuite d'eau</li>
             <li class="listeprestation">Réparation fuite d'eau</li>
           </ul>
       </div>
       </div>
       <div class="col-sm-6 col-md-4 col-md-offset-2">
         <div class="thumbnail">
           <img class="taillephoto" src="./css/img/renov1.jpg">
             <h3>Rénovation</h3>
             <ul class="groupelisteprestation">
               <li class="listeprestation">Création / Rénovation de salle de bain</li>
               <li class="listeprestation">Pose de carrelage</li>
               <li class="listeprestation">Modifications électriques</li>
             </ul>
         </div>
     </div>
   </div>

   <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-1">
     <div class="thumbnail">
       <img class="taillephoto" src="./css/img/assainissement.jpg">
         <h3>Assainissement</h3>
         <ul class="groupelisteprestation">
           <li class="listeprestation">Recherche/réparation de fuite d'eau</li>
           <li class="listeprestation">Distributions des réseaux d'alimentation</li>
           <li class="listeprestation">Pose de meuble de salle de bain</li>
           <li class="listeprestation">Appareil de traitement de l'eaux</li>
           <li class="listeprestation">Ballon thermodynamique</li>
           <li class="listeprestation">Remplacement ballon électrique</li>
         </ul>
     </div>
   </div>
   <div class="col-sm-6 col-md-4 col-md-offset-2">
     <div class="thumbnail">
       <img class="taillephoto" src="./css/img/chauffagerie1.jpg">
         <h3>Chauffagerie</h3>
         <ul>
           <li class="listeprestation">Pompe à chaleur</li>
           <li class="listeprestation">Chauffage au sol</li>
           <li class="listeprestation">Installateur chaudière</li>
           <li class="listeprestation">Remplacement chaudière</li>
           <li class="listeprestation">Radiateur</li>
           <li class="listeprestation">Agréage du gaz</li>
         </ul>
     </div>
   </div>
 </div>
</div>

    </section>

    <!--section formulaire -->

    <footer class="col-xs-12 contact" id="contact">
  <section>
    <article class="textecontact">
      <p>

      </p>
    </article>

<div class="container">
  <div class="starter-template">

    <?php if(array_key_exists('errors', $_SESSION)): ?>
        <div class="alert alert-danger">
            <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
    <?php endif; ?>
    <?php if(array_key_exists('success', $_SESSION)): ?>
        <div class="alert alert-success">
          Votre email a bien été envoyé
        </div>
    <?php endif; ?>

    <form action="post_contact.php" method="POST">
      <div class="row">
        <div class="col-xs-4">
          <div class="form-group">
            <label for="inputname">Votre nom</label>
            <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-4">
          <div class="form-group">
            <label for="inputprenom">Votre prénom</label>
            <input type="text" name="prenom" class="form-control" id="inputprenom" value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-4">
          <div class="form-group">
            <label for="inputemail">Votre email</label>
            <input type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="inputobjet">Objet</label>
            <input type="text" name="objet" class="form-control" id="inputobjet" value="<?= isset($_SESSION['inputs']['objet']) ? $_SESSION['inputs']['objet'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="inputtelephone">Telephone</label>
            <input type="text" name="telephone" class="form-control" id="inputtelephone" value="<?= isset($_SESSION['inputs']['telephone']) ? $_SESSION['inputs']['telephone'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group ">
            <label for="inputmessage">Votre message</label>
            <textarea id="inputmessage" name="message" class="form-control champMessage"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary test col-xs-2 col-xs-offset-5">Envoyer</button>
        </div>
      </div>
    </form>

  </div>
</div>

 </section>
 <p class="copyright">José VALERO © Copyright 2016 Tous droits réservés</p>


</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="./js/smoothscroll.js"></script>
</body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);

?>
