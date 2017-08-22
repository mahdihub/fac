<?php
class commentsc extends CI_Controller{
    function insert($id_article)
    {
        $this->form_validation->set_rules('comment','commentaire','required|min_length[8]');
        
        if($this->form_validation->run())
        {
          $this->commentsm->insert_comment([
              'contenu' => $this->input->post('comment'),
              'username' => $this->session->userdata('username'),
              'id_article' => $id_article
          ]);  
        }
        else
        {
             echo validation_errors();
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
    
        function insert_sub_comment($id_comment)
    {
           
        $this->form_validation->set_rules('sub_comment','commentaire','required|min_length[8]');
        
        if($this->form_validation->run())
        { 
          $this->commentsm->insert_sub_comment([
              'sub_comment' => $this->input->post('sub_comment'),
              'username' => $this->session->userdata('username'),
              'id_comment' => $id_comment
          ]);  
        }
        else
        {
             echo validation_errors();
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
    
    function update_likes($id_comment, $likes)
    {
       $this->commentsm->update_likes($id_comment,[
           'likes' => $likes
       ]);
        echo "dlsjf";
    }
}
?>