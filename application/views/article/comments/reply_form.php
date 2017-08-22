                  <div class="row col-sm-11 offset-sm-1 collapse">
                       <div class="col-sm-1">
                          <img src="<?=base_url('assets/img/users/'.$this->session->userdata('photo'))?>" style="width:100%;height:100%">
                       </div>

                       <form  class="col-sm-11" action="<?=site_url('commentsc/insert_sub_comment/'.$comment->id_comment)?>" method="post">
                          <textarea name="sub_comment" id="" class="form-control" cols="30" rows="5" placeholder="votre commentaire..."></textarea>

                          <button type="submit" class="btn btn-default">commenter</button>
                       </form>                             
                  </div>   