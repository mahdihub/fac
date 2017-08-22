  <div class="container">
         <h2>
             ajouter un article
         </h2>
         
         <?php echo validation_errors();?>
         
         <?php echo form_open_multipart('articlesc/Insert',['method' => 'post']);?>
              <div class="form-group">
                <label for="titre">titre</label>
                <input type="text" class="form-control" id="titre" name="titre">
              </div>

              <div class="form-group">
                <label for="contenu">detailles</label>
                <textarea class="form-control" id="contenu" rows="3" name="contenu"></textarea>
              </div>
              
              <div class="form-group">
                  <label for="categorie">categorie</label>
                  <select name="id_categorie" id="categorie" class="form-control">
                      <?php
                        foreach($categories as $categorie)
                        {
                            ?>
                             <option value="<?=$categorie->id_categorie?>"><?=$categorie->nom_categorie;?></option>
                            <?php     
                        }
                      ?>
                  </select>                  
              </div>
  
              <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control-file" id="image" name="image" size="20">
              </div>

              <button type="submit" class="btn btn-primary">ajouter</button>
        </form>
    
      
  </div>
