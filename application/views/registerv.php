<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>s'inscrire</title>
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css')?>">
</head>

<body>
    	<div class="container">
			<div class="row">
			  <div class="col-sm-4 offset-sm-4">		
				 <h5>s'inscrire</h5>
                
                      
                 
                 
                 <form class="" method="post" action="<?=site_url('usersc/insert_user');?>">	
                        
                        <?php echo validation_errors();?>
                        		
						<div class="form-group">
							<label for="nom" >nom</label>	
                            <input type="text" class="form-control" name="nom" id="nom"/>
						</div>

						<div class="form-group">
							<label for="prenom" >prenom</label>	
                            <input type="text" class="form-control" name="prenom" id="prenom"/>
						</div>
                                            
                        <div class="form-group">
							<label for="name" >email</label>	
                            <input type="email" class="form-control" name="email" id="name"/>
						</div>
                                                               
                        <div class="form-group">
							<label for="username" >nom d'utilisateur</label>	
                            <input type="text" class="form-control" name="username" id="username"/>
						</div>
                                                               
                        <div class="form-group">
							<label for="password" >mot de passe</label>	
                            <input type="password" class="form-control" name="password" id="password"/>
						</div>
                                                               
                        <div class="form-group">
							<label for="password-conf" >confirmer mot de passe</label>	
                            <input type="password" class="form-control" name="password-conf" id="password-conf"/>
						</div>
						
                        <div class="form-group">	
                            <input type="submit" class="btn btn-block " name="submit"/>
						</div>																				
					</form>
				</div>
			</div>
		</div>
</body>
</html>