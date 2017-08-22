     <?php
       if(!$commented)
      {
        ?>
           <div class="row">
              <div class="col-sm-1">
                  <img src="<?=base_url('assets/img/users/'.$this->session->userdata('photo'))?>" style="width:100%;height:100%">
              </div>

              <form class="col-sm-11" action="<?=site_url('commentsc/insert/'.$article->id_article)?>" method="post">
                  <textarea name="comment" id="" class="form-control" cols="30" rows="10" placeholder="votre commentaire..."></textarea>

                  <button type="submit" class="btn btn-default">commenter</button>
              </form>
           </div>       
        <?php  
      }
?>