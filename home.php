<?php require 'head.php'; ?>

  <div id="videoDiv" class="grid">
      <div id="videoBlock"class="grid">
          <img src="#" id="videosubstitute" alt="">
          <video preload="preload" id="video" autoplay="autoplay" loop="loop">
              <source src="video/fond6.mp4" type="video/mp4">
          </video>
      <div id="videoMessageBox" class="grid">
        <?php $home=""?>
        <?php require 'nav.php'; ?>
        <div id="videoMessage">
              <h1 class="nom">Ken Fontaine</h1>
              <h2 class="metier">Developpeur Web</h2>
          </div>
      </div>
    </div>
  </div>

  <div class='adopte'>
    <h1>ADOPTE UN DEV</h1>
  </div>

    <section class="flex flex-desktop">

      <div class="photo">
        <aside class="is-mobile image">
          <img class="is-rounded img-desktop" src="img/moi.jpg" alt="">
        </aside>
      </div>

      <div class="flex description">
        <aside class="">
          <button class="button is-success is-outlined is-rounded">L'ajouter au panier</button>
        </aside>
          <div class="text">
            <h1>Ken, developpeur de l'enfer</h1></br>
            <p>made by simplon.co</p></br>

            <div> <h1>AVANTAGE</h1>
              <p>FLEXIBLE - COMPETENCE TRANSFERSE - METHODE DE TRAVAIL AGILE - METHODE D'APPRENTISAGE RAPIDE</p>
          </div></br>

          <div>
            <h2>Maitrise les langages : </h2>
            <div>
              <img src="img/javascripticon.png">
              <img src="img/phpicon.png">
              <img src="img/htmlicon.png">
              <img src="img/ccsicon.png">
            </div>
            <h2>A des bases dans les langages : </h2>
            <div>
              <img src="img/python.png">
              <img src="img/cplusicon.png">
            </div>
          </div>
          <div>
            <p> - Issue de la restauration, il à su gravir les échelons pour devenir Manager</p>
            <p> - Il fait preuve d'une grande polyvalence et s'adapte facilement à tout environnement</p>
            <p> - Il est passionné par l'informatique depuis de longues années</p>
                </br>
            <a href="projet.php">Découvrez ses projets !</a>
          </div>
        </br>
        <aside class="">
          <button class="button is-success is-outlined is-rounded">L'ajouter au panier</button>
        </aside>
      </div>


      <div class="is-desktop modal">
          <div class="modal-background"></div>
          <div class="modal-content">
            <form action="traitement.php" method="POST">
            <div class="field">
              <label class="label">Nom</label>
              <div class="control">
                <input class="input" type="text" placeholder="Votre nom" name="nom">
             </div>
           </div>

           <div class="field">
           <label class="label is-normal">Numero de téléphone</label>
           <div class="control has-icons-left has-icons-right">
             <input class="input" type="text" placeholder="06*******" name="num">
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
          </div>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-danger" type="email" placeholder="hello@" name="email">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" placeholder="Votre message" name="message"></textarea>
            </div>
          </div>

            <div class="field is-grouped">
              <div class="control">
                <button type="submit" class="button is-link">Envoyer</button>
              </div>
            </div>
            </form>
          </div>
        <button class="modal-close is-large" aria-label="close"></button>
      </div>
    </section>
  <script src="javascript/script.js" charset="utf-8"></script>
</body>
</html>
