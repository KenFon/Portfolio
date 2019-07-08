<div class="navBar">
  <nav class="">

    <a role="button" class="navbar-burger is-pulled-left" aria-label="menu" aria-expanded="false">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    </a>
    <div class="navbar-brand is-inactive">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="projet.php">Projets</a></li>
      <ul>
    </div>
    <div class="navbar-menu" id="navMenu">
      <a class="navbar-item" href="home.php">
        Home
      </a>
      <a class="navbar-item" href="projet.php">
        Mes projets
      </a>
    </div>
  </nav>
  <?php if(isset($home)): ?>
    <aside class="panier">
      <figure class="is-desktop image is-48x48">
        <img class="is-rounded inactive" src="img/cart_incons.png" alt="icone panier">
      </figure>
    </aside>
  <?php endif ?>
</div>


<div class="is-mobile modal">
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
