
     <div class="card" >
            <div class="card-block"> 
               <a href="<?= site_url('profile/'.$article->username)?>">
                <?= $article->username;?>                      
               </a> 
               
               <h3 class="card-title">
                   <?= $article->titre;?>
               </h3>

               <p class="card-subtitle text-muted">
                    categorie: <?= $article->nom_categorie;?>
                   <br>
                   <small><?=$article->date;?></small>
               </p>
            </div>

            <img src="<?=base_url('/assets/img/').$article->image?>">

            <div class="card-block">
               <p>
                 <?= $article->contenu;?>
               </p>
            </div>
      </div>  