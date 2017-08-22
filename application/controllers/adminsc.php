<?php
class adminsc extends CI_Controller{
  


             
    function articles_non_valides()
    {
       
        
        $crud = new Grocery_CRUD();
        $crud->set_table('articles')->where('validé',0);        
        $crud->set_theme('datatables');
        
        $crud->columns('image','titre','date','contenu','id_categorie','username_contributeur');
        
        $crud->fields('titre','date','contenu','id_categorie','image','video','validé');
        
        $crud->required_fields('titre','date','contenu','id_categorie','image','validé');
        
        $crud->set_field_upload('image','assets/img');
        $crud->set_field_upload('video','assets/img');
        
      
        
        $crud->field_type('validé','true_false',array('0' => 'non','1' =>'oui'));
        
        $crud->set_relation('id_categorie','categories','nom_categorie');
        
        $crud->callback_after_insert(array($this,'_callback_tag'));
           
        
        $data['render'] = $crud->render();
        $data['breadcrumb']= $this->load->view('admin_theme/content/breadcrumb',array('page_name' => 'articles non valides'),true);
        $this->layout->set_theme('admin_theme');
        $this->layout->view('grocery',$data);
        
    }
    
    
    
    function articles()
    {
        $crud = new Grocery_CRUD();
        $crud->set_table('articles');
        $crud->set_theme('datatables');
        
        $crud->columns('image','titre','date','contenu','id_categorie','username_contributeur','validé');
        
        $crud->fields('titre','date','contenu','image','id_categorie','video','validé');
          
        $crud->required_fields('titre','image','username_contributeur','id_categorie','contenu','validé');
        
        $crud->set_field_upload('image','assets/img');
        $crud->set_field_upload('video','assets/img');        
 
        $crud->field_type('validé','true_false',array('0' => 'non','1' =>'oui'));
        
        $crud->set_relation('id_categorie','categories','nom_categorie');
    
        $crud->callback_after_insert(array($this,'_callback_tag'));
        
        $data['render'] = $crud->render();
        $data['breadcrumb']= $this->load->view('admin_theme/content/breadcrumb',array('page_name' => 'articles'),true);
        $this->layout->set_theme('admin_theme');
        $this->layout->view('grocery',$data);
    }
    
    
    
    function categories()
    {
         $crud = new grocery_CRUD(); 
         $crud->set_table('categories');
         $crud->set_theme('datatables');
        
     
        $data['render'] = $crud->render();
        $data['breadcrumb']= $this->load->view('admin_theme/content/breadcrumb',array('page_name' => 'categories'),true);
        $this->layout->set_theme('admin_theme');
        $this->layout->view('grocery',$data);
    }
    
    

    
    function admins()
    {
         $priv = ['categories' => 'gestion de categorie','articles' => 'gestion des articles'];
        
        $crud = new grocery_CRUD();   
        $crud->set_table('admins');
        $crud->set_theme('datatables');
        
        $crud->columns('photo_admin','username_admin','privileges');
        
        $crud->fields('privileges');
        
        $crud->set_field_upload('photo_admin','assets/img/users');
        
          $crud->field_type('privileges','multiselect',$priv);
        $crud->unset_add();
        
        $data['render'] = $crud->render();
        $data['breadcrumb']= $this->load->view('admin_theme/content/breadcrumb',array('page_name' => 'admins'),true);
        $this->layout->set_theme('admin_theme');
        $this->layout->view('grocery',$data);
    }
    
    
    
    function users()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('utilisateurs');
        $crud->set_theme('datatables');
        
        $crud->columns('photo_utilisateur','username_utilisateur','contributeur','active','banni');
        
        $crud->fields('contributeur','banni');
        
        $crud->set_field_upload('photo_utilisateur','assets/img/users');
        
        $crud->unset_add();
        
        $crud->field_type('banni','true_false',array('0' => 'non','1' =>'oui'));
        $crud->field_type('active','true_false',array('0' => 'non','1' =>'oui'));
        $crud->field_type('contributeur','true_false',array('0' => 'non','1' =>'oui'));
        
        $data['render'] = $crud->render();
        $data['breadcrumb']= $this->load->view('admin_theme/content/breadcrumb',array('page_name' => 'utilitsateurs'),true);
        $this->layout->set_theme('admin_theme');
        $this->layout->view('grocery',$data);
    }
    
    
    function privileges()
    {
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function _callback_tag($post_array,$primary_key)
    {
        $tag = strtolower(url_title(convert_accented_characters($post_array['titre']))).'-'.$primary_key.'.htm';
        $post_array['tag_url'] = $tag;
        return $post_array;
    }
    
    

    
    function count()
    {
        echo $this->articlesm->count_articles_non_valides();
    }

}