<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content=" José Valero Plombier. J'ai créé une entreprise spécialisée dans l'installation sanitaire, le chauffage et la plomberie." />
    <meta name="author" content="Jimmy Friedblatt, Thibaut Figueres, José Valéro"/>
    <meta name="keywords" content="jose, valero, plomberie, plombier, assainissement, chauffagiste, chauffage, sanitaire, rénovation, travaux,
    plombier montpellier, lunel, plombier lunel, montpellier, Saint-Just, Lunel-Viel, plomberie Saint-Just, plomberie Lunel-Viel, devis"/>
    <meta name="viewport" content="width=device-width, , minimum-scale=1, user-scalable=no"><!--responsive---->
    <link rel="shortcut icon" href="./css/img/logo.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/><!--bootstrap----->
    <link rel="stylesheet" href="./css/main.css"/><!---css------>

    <title> JV services </title>
  </head>
  <body>

<!--div fondtete-->

    <div id="fondtete">
      <div class="imagefond">
        <div class="opaque">

        </div>
      </div>
      <header id="home" class="texteentete">
        <h1>JOSE VALERO</h1>
        <h1>Plombier - Chauffagiste - Assainissement</h1>
        <h3>Tel : <a href="tel:0686485940">06.86.48.59.40</a></h3>
        <div class="sectionimage">
          <img class="logo" src="./css/img/logo3.png" alt="" /><!--img logo-->
        </div>
        <ul class="groupCoordonnees">
          <li class="listecoordonne">Siret : 415 009 133</li>
          <li class="listecoordonne">Email: jvservicesvalero@gmail.com</li>
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
            Je suis une entreprise spécialisée dans
            l'installation sanitaire, le chauffage et la plomberie.
            J'interviens dans tout type de chantier,
            dans le neuf comme dans la rénovation.
            Ma mobilité ainsi que mon expérience professionnelle me permettent
            de répondre au mieux à vos attentes.
          </p>
      </article>
    </section>

    <!-- section prestation -->

    <section class=" col-xs-12 toutessections">
      <header>
        <h2 id="prestation">Mes services</h2>
      </header>

 <!--images en bootstrap-->

 <div class="container presta">
    <div class="row rowprestation">
     <div class="col-sm-6 col-md-4 col-md-offset-1">
       <div class="thumbnail">
         <img class="taillephoto" src="./css/img/plomberie1.jpg">
           <h3>Plomberie</h3>
           <ul class="groupelisteprestation">
             <li class="listeprestation">Installation sanitaire (tout type)</li>
             <li class="listeprestation">Recherche / réparation de fuite d'eau</li>
             <li class="listeprestation">Distributions des réseaux d'alimentation</li>
             <li class="listeprestation">Appareil de traitement de l'eau</li>
             <li class="listeprestation">Pose et remplacement de ballon électrique</li>
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

   <div class="row rowprestation">
    <div class="col-sm-6 col-md-4 col-md-offset-1">
     <div class="thumbnail">
       <img class="taillephoto" src="./css/img/assainissement.jpg">
         <h3>Assainissement</h3>
         <ul class="groupelisteprestation">
           <li class="listeprestation">Distributions d'évacuations aériennes</li>
           <li class="listeprestation">Distributions d'évacuations enterrées</li>
         </ul>
     </div>
   </div>
   <div class="col-sm-6 col-md-4 col-md-offset-2">
     <div class="thumbnail">
       <img class="taillephoto" src="./css/img/chauffagerie1.jpg">
         <h3>Chauffage</h3>
         <ul class="groupelisteprestation">
           <li class="listeprestation">Pose et remplacement de chaudière (tout type)</li>
           <li class="listeprestation">Chauffage au sol</li>
           <li class="listeprestation">Radiateur</li>
           <li class="listeprestation">Qualification gaz</li>
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

<div class="container formulaire">
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
      <div class="row rowformulaire">
        <div class="col-xs-3 col-xs-offset-3 taillechamp centragechamp">
          <div class="form-group">
            <label for="inputname">Nom</label>
            <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-3 taillechamp">
          <div class="form-group">
            <label for="inputprenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="inputprenom" value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-3 col-xs-offset-3 taillechamp centragechamp">
          <div class="form-group">
            <label for="inputemail">Email</label>
            <input type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-3 testage taillechamp">
          <div class="form-group">
            <label for="inputtelephone">Téléphone</label>
            <input type="text" name="telephone" class="form-control" id="inputtelephone" value="<?= isset($_SESSION['inputs']['telephone']) ? $_SESSION['inputs']['telephone'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6 col-xs-offset-3 messageobjet">
          <div class="form-group">
            <label for="inputobjet">Objet</label>
            <input type="text" name="objet" class="form-control" id="inputobjet" value="<?= isset($_SESSION['inputs']['objet']) ? $_SESSION['inputs']['objet'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6 col-xs-offset-3 messageobjet">
          <div class="form-group ">
            <label for="inputmessage">Message</label>
            <textarea id="inputmessage" name="message" class="form-control champMessage"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div>
          <div class="boutoncentre">
          <button type="submit" class="btn buttonpropriete">Envoyer</button>
          </div>
        </div>
      </div>
    </form>

  </div>
</div>

 </section>

<!--partie copyright-->

 <p class="copyright">Développé & propulsé par : <a href="http://www.jimmy-friedblatt.fr/" target="new">Jimmy FRIEDBLATT</a> &<a href="http://thibaut-figueres.fr/" target="new"> Thibaut FIGUERES</a></p>


</footer>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="./js/smoothscroll.js"></script>
</body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>
