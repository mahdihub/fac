                  <div class="comment row">
                      <div class="col-sm-1">
                          <img src="<?=base_url('assets/img/users/'.$comment->photo)?>" style="width:100%;height:100%">
                      </div>
                      
                      <div class="col-sm-11">
                        <a href="<?= site_url('profile/'.$comment->username)?>">
                          <?= $comment->username;?>                   
                        </a>

                        <p>
                          <?= $comment->contenu;?>
                        </p>
                        
                        <a class="pull-xs-right" href="#">
                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                        </a>
                        
                        <a class="pull-xs-right reply" href="#">
                          <i class="fa fa-reply" aria-hidden="true"></i>    
                        </a>
                        
                        <a class="like" href="#" id_comment="<?= $comment->id_comment?>">
                          <i class="fa fa-heart-o pull-xs-right" aria-hidden="true"><?="  $comment->likes"?></i> 
                        </a>
                      </div>   
                  </div>