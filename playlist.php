<?php
     include_once("templates/header.php");

     session_start();

     $arrayPlaylist;

     if(isset($_SESSION['playlist'])) {
          $arrayPlaylist = $_SESSION['playlist'];

     } else {
          $arrayPlaylist = [];
     }

     if(isset($_POST['delete'])) {
          $indice = $_POST['delete'];
          unset($_SESSION['playlist'][$indice]);
     }

     $arrayPlaylist = $_SESSION['playlist'];

?>
     <div class="playlist-screen">
          <h1>Playlist</h1>
          <ul class="playlist-choice">
               <?php foreach($arrayPlaylist as $indice => $item): ?>
                    <?php if($item): 
                         $values = explode('|', $item);
                         $title = $values[0];
                         $image = $values[1];
                    ?>
                    <li>
                         <?php echo $title ?> 
                         <img src="<?php echo $BASE_URL ?>/img/<?php echo $image ?>" alt="<?php $title ?>">
                         <form action="#" method="POST">
                              <input type="hidden" name="delete" value=<?php echo $indice ?> >
                              <button class="delete">
                                   <img src="<?php echo $BASE_URL ?>/img/excluir.png" alt="Delete">
                              </button>
                         </form>
                    </li>              
                    <?php endif; ?>
               <?php endforeach; ?>
          </ul>
     </div>

