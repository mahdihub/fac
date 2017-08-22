                      <?php
                        if($sub_comment->id_comment == $comment->id_comment)
                        {
                            ?>
                               <div class="sub_comment row col-sm-11 offset-sm-1" style="background-color:#efefef">
                                   <div class="col-sm-1">
                                      <img src="<?=base_url('assets/img/users/'.$sub_comment->photo)?>" style="width:100%;height:100%">
                                   </div>
                                   
                                   <div class="col-sm-11">
                                     <a href="<?= site_url('profile/'.$sub_comment->username)?>">
                                      <?= $sub_comment->username;?>                   
                                     </a>

                                     <p>
                                      <?= $sub_comment->sub_comment?>
                                     </p>
                                   </div>   
                               </div>
                            <?php
                        }
?>