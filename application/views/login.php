<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <script src="<?=base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
    <script type="application/javascript" src="<?=base_url('assets/js/login.js')?>"></script>
     
       
</head>

<body>
       <?php $this->session->unset_userdata('type_personne');?>   <!-- quand logout est clicke-->
       
       <form id="login-form" action="" method="post">
          <div   class="row col-md-4 offset-md-4">
                  <h2 class="text-xs-center">se connecter</h2>
                  <div class="form-group">
                      <input id="email" type="email" name="email"  placeholder="email" class="form-control" value=<?=set_value('email')?>>
                  </div>
                  
                  <div class="form-group">
                      <input id="password" type="password" name="password" placeholder="mot de pass" class="form-control" value=<?=set_value('password')?>>
                  </div>
                  
                  <div class="form-group">
                      <input id="button" type="submit" name="login" value="login" class="btn btn-success form-control"> 
                  </div>
                  
                  <div id="error"></div>
          </div>    
       </form> 
<!--
       
     <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
//            $("#button").click(function(event){
//                event.preventDefault();
////              $('#error').load('usersc/login', "email="+email+"&password="+password);
//                $('#error').load('usersc/login', $("form").serialize())      
//            });
             
             $("#login-form").submit(function(event){
                event.preventDefault();
                 $.ajax({
                    url: "usersc/login",
                    data: $("form").serialize(),
                    success: function(data){
                        if(data)
                        {
                          $("#error").html(data);  
                        }
                        else{
                           window.location.href = "accueilv";
                        }

                    }
                 });
             });
         });
      </script>
-->
<script type="text/javascript" src="<?=base_url('assets/js/login.js')?>"></script>
</body>
</html>