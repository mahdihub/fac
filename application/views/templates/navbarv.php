      <nav class="navbar navbar-dark bg-inverse navbar-full">
          <a href="#" class="navbar-brand">Films au ciné</a>
          
          <ul class="nav navbar-nav">
              <li class="nav-item">
                  <a href="<?=site_url('accueil')?>" class="nav-link">Accueil</a>
              </li>
              
              <li class="nav-item">
                  <a href="#" class="nav-link">Sorties</a>
              </li>
              
              <li class="nav-item">
                  <a href="<?=site_url('articles')?>" class="nav-link">Articles</a>
              </li>
              
              <li class="nav-item">
                  <a href="<?=site_url('ecrire_article')?>" class="nav-link">Ajouter un article</a>
              </li>
              
              <li class="nav-item pull-xs-right">
                  <a href="<?=site_url('login')?>" class="nav-link">logout</a>
              </li>
              
              <li class="nav-item pull-xs-right">
                  <a href="<?=site_url('profile/'.$this->session->userdata('username'))?>" class="nav-link">
                      <?= $this->session->userdata('username');?>
                      <img  src="" alt="">
                  </a>
              </li>
              
              <?php
                if($this->session->userdata('type_personne')=='admin')
                { 
                  ?>    
                  <li class="nav-item pull-xs-right">
                      <a href="<?=site_url('admin')?>" class="nav-link">Admin</a>
                  </li>  
                  <?php                  
                }
              ?>
          </ul>  
      </nav>
      

