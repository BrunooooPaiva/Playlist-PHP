<?php
     include_once("templates/header.php");

     if(isset($_GET['id'])) {

          $postId = $_GET['id'];

          $currentPost;

          foreach($musicas as $musica) {
               if($musica['id'] == $postId) {
                    $currentPost = $musica;
               }
          }
     }

     session_start();


     if(!isset($_SESSION['playlist'])) {
          $_SESSION['playlist'] = [];
      }

     // if($_SERVER['REQUEST_METHOD'] === 'POST' ) 
     if(isset($_POST['add'])){
          array_push($_SESSION['playlist'], $_POST['add']);
     }


?>
     <div class="container">
          <form action="#" method="POST" class="form">
               <h1>
                    <?php echo $currentPost['title'] ?>
                    <input type="hidden" name="add" value="<?php echo $currentPost['title']?>|<?php echo $currentPost['img'] ?>">
                         <button>
                              <img src="<?php echo $BASE_URL ?>/img/adicionar.png" alt="Adicionar">
                         </button>
               </h1>
          </form>

     
          <img src="<?php echo $BASE_URL ?>/img/<?php echo $currentPost['img'] ?>" alt="<?php echo $currentPost['title'] ?>">
          <p><?php echo $currentPost['description'] ?></p>

     </div>

<?php 
     include_once("templates/footer.php");
?>