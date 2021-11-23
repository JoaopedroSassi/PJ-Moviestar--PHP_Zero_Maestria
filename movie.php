<?php
   include_once('templates/header.php');

   require_once('dao/MoviesDAO.php');
   require_once('models/Movie.php');

   $id = filter_input(INPUT_GET, "id");
   $movie;

   $movieDao = new MovieDao($conn, $BASE_URL);

   if (empty($id)) {
      $message->setMessage("O filme não foi encontrado", "error", "index.php");

   } else {
      $movie = $movieDao->findById($id);

      if (!$movie){
         
         $message->setMessage("O filme não foi encontrado", "error", "index.php");

      }
   }

   if ($movie->image == "") {
      $movie->image = "movie_cover.jpg";
   }

   $userOwnsMovie = false;

   if (!empty($userData)) {
      
      if($userData->id === $movie->users_id){
         $userOwnsMovie = true;
      }
   }

   $alredyReviewed = false;
?>
<div id="main-container" class="container-fluid">
   <div class="row">
      <div class="offset-md-1 col-md-6 movie-container">
         <h1 class="page-title"><?= $movie->title ?></h1>
         <p class="movie-details">
            <span>Duração: <?= $movie->length ?></span>
            <span class="pipe"></span>
            <span><?= $movie->category ?></span>
            <span class="pipe"></span>
            <span><i class="bi bi-star"></i> 9</span>
         </p>
         <iframe src="<?= $movie->trailer ?>" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encryted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <p><?= $movie->description ?></p>

      </div>
      <div class="col-md-4">
         <div class="movie-image-container" style="background-image: url('<?= $BASE_URL ?>/img/movies/<?= $movie->image ?>')"></div>
      </div>
      <div class="offset-md-1 col-md-10" id="reviews-container">
         <!-- Review --> 
         <h3 id="reviews-title">Avaliações</h3>
         <?php if (!empty($userData) && !$userOwnsMovie && !$alredyReviewed): ?>
            <div class="col-md-12" id="review-form-container">
               <h4>Envie sua avaliação:</h4>
               <p class="page-description">Preencha com a nota e comentário sobre o filme</p>
               <form action="<?= $BASE_URL ?>review_process.php" method="POST" id="review-form">
                  <input type="hidden" name="type" value="create">
                  <input type="hidden" name="movies_id" value="<?= $movie->id ?>">
                  <div class="form-group">
                     <label for="rating">Nota do filme:</label>
                     <select name="rating" id="rating" class="form-control">
                        <option value="">Selecione</option>
                        <?php for ($i = 1; $i <= 10; $i++): ?>
                           <option value="<?= $i?>"><?= $i?></option>
                        <?php endfor; ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="review">Seu comentário:</label>
                     <textarea name="review" id="review" rows="3" class="form-control" placeholder="O que você achou do filme?"></textarea>
                  </div>
                  <input type="submit" class="btn card-btn" value="Enviar comentário">
               </form>
            </div>
         <?php endif; ?>

         <!-- Comments --> 
         <div class="col-md-12 review">
            <div class="row">
               <div class="col-md-1">
                  <div class="profile-image-container review-image" style="background-image: url('<?= $BASE_URL ?>img/users/user.png')"></div>
               </div>
               <div class="col-md-9 author-details-container">
                  <h4 class="author-name">
                     <a href="#">Sephiroth tan</a>
                  </h4>
                  <p><i class="bi bi-star"></i> 9</p>
               </div>
               <div class="col-md-12">
                  <p class="comment-title">Comentário:</p>
                  <p>Este é o comentário do usuário</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
   include_once('templates/footer.php');
?>