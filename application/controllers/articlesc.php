<?php
class articlesc extends CI_Controller{

    


    
    
    function get_contributeur($username)
    {
        return $this->articlesm->get_contributeur($username);
        die("$this->articlesm->get_contributeur($username)->email");
    }
    
    
    
    function Insert()
    {                 
        $this->form_validation->set_rules('titre','Titre','required');
        $this->form_validation->set_rules('contenu','Contenu','required');
        $this->form_validation->set_rules('id_categorie','Categorie','required');
       
      
        if($this->form_validation->run())
        {
         // die('we won');
         //  $date = date('D, d/M/Y');
           $titre = $this->input->post('titre');
          
           $contenu = $this->input->post('contenu');
             
           $id_categorie = $this->input->post('id_categorie');
            
           $image = $this->uploadImage();
        
           $last_id = $this->articlesm->insertArticle([
            //   'date' => $date,
               'titre' => $titre,
               'contenu' => $contenu,
               'id_categorie' => $id_categorie,
               'image' => $image,
               'validé' => 0,
               'username_contributeur' =>  $this->session->userdata('username')
           ]);  

            
           $this->articlesm->update($last_id,[
               'tag_url' => tag_url($last_id,$titre)
           ]);
            
           redirect('articles');
        }
        else
        {
            redirect('ecrire_article');
        }
    }
    
    
  
    function uploadImage()
    {
             $config['upload_path']          = './assets/img/';
             $config['allowed_types']        = 'gif|jpg|png';
            
             $this->load->library('upload', $config);
            
             if($this->upload->do_upload('image'))
             {
                $upload_data = $this->upload->data();
                $image = $upload_data['file_name'];
             }
             else
             {
                $data['error'] =  $this->upload->display_errors();
                $this->load->view('articles/ecrire_articlev', $data);      
             }
        return $image;
    }
    
    
    

 
}
?>