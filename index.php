<?php
     include_once("templates/header.php");
?>
<main id="home">
     <h1 class="home-title">HarmonyMix</h1>
     <p class="home-text">O seu site de músicas</p>
     <?php foreach($musicas as $musica): ?>
          <div class="album">
               <a href="<?php echo $BASE_URL ?>post.php?id=<?php echo $musica['id'] ?> " class="link-album">
                    <img src="<?php echo $BASE_URL ?>/img/<?php echo $musica['img'] ?>" alt="<?php echo $musica['title'] ?>">
                    <p class="album-text"><?php echo $musica['title'] ?></p>
                    <p class="album-artist"><?php echo $musica['autor'] ?></p>
               </a>
          </div>
     <?php endforeach; ?>
</main>

<?php 
     include_once("templates/footer.php");
?>