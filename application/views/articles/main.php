    <div class="container">
         <h1>articles</h1>
          <?php
          
             foreach($articles as $article)
             {
                if($article->validé==1)
                {
                 ?>  
                     <div class="card">
                       <div class="row">
                           <div class="col-sm-3">
                               <img style='height: 100%; width: 100%;' src="<?=base_url('assets/img/').$article->image?>">
                           </div>
                           
                           <div class="col-sm-9">  
                              <?= $article->username;?>  
                               <div class="card-block">      
                                   <h3 class="card-title">
                                       <?= $article->titre;?>
                                   </h3>

                                   <p class="card-subtitle text-muted">
                                       categorie: <?= $article->nom_categorie;?>       <!--  nom de la categorie!!-->
                                       <br>
                                       <small><?= $article->date;?></small>
                                   </p>

                                   <p>
                                     <?=word_limiter($article->contenu,50);?>
                                   </p>

                                   <a href="article/<?=$article->tag_url?>">
                                     lire
                                   </a>
                              </div>
                           </div>
                       </div>                       
                     </div>
                 <?php     
                }
             }
          ?>              
   </div>
