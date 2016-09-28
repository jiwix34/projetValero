<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, , minimum-scale=1, user-scalable=no"><!--responsive---->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/><!--bootstrap----->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src=".js/javascript.js/"></script><!--javascript---->
    <link rel="stylesheet" href="./css/main.css"/><!---css------>

    <title> Projet valero </title>
  </head>
  <body>

     <!-- carte de visite -->

    <div id="fondtete" class=" col-xs-12">
      <div class="imagefond">
        <div class="opaque">

        </div>
      </div>
      <header class="texteentete">
        <h1>JOSE VALERO</h1>
        <h1>Plombier - Chauffagiste - Assainissement</h1>
        <h3>Siret: 065265 254</h3>
      </header>
      <div class="sectionimage">
        <img class="logo" src="./css/img/jvs.png" alt="" /><!--img logo-->
      </div>
      <ul class="groupCoordonnees">
        <li class="listecoordonne"><a href="tel:0686485940">Tel: 06.86.48.59.40</a></li>
        <li class="listecoordonne">Email: jvservices34@gmail.com</li>
      </ul>
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
      <article>
          <p>
            texte pour la presentation
          </p>
      </article>
    </section>

    <!-- section prestation -->

    <section class=" col-xs-12 toutessections">
      <header>
        <h2 id="prestation">Mes services</h2>
      </header>
      <article>
          <p>
            texte pour les services
          </p>

      </article>

 <!--div des images des secteurs d'acitivités de Valéro  -->

      <div id="grossediv">

<!--div service 1-->

        <div id="divprestation1">
          <img class="imgprestation" src="./css/img/plomberie.jpg"/>
              <ul class="ulservice1">
                <li class="service1">Service</li>
                <li class="service1">Service</li>
                <li class="service1">Service</li>
              </ul>
        </div>

    <!--div service 2-->

        <div id="divprestation2">
          <img class="imgprestation" src="./css/img/chauffagerie.jpg"/>
            <ul class="ulservice2">
              <li class="service2">Service</li>
              <li class="service2">Service</li>
              <li class="service2">Service</li>
            </ul>
      </div>

      <!--div service 3-->

      <div id="divprestation3">
        <img class="imgprestation" src="./css/img/renovation.jpg"/>
          <ul class="ulservice3">
            <li class="service3">Service</li>
            <li class="service3">Service</li>
            <li class="service3">Service</li>
          </ul>
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
        <div class="col-xs-6">
          <div class="form-group">
            <label for="inputname">Votre nom</label>
            <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="inputprenom">Votre prénom</label>
            <input type="text" name="prenom" class="form-control" id="inputprenom" value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6">
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
