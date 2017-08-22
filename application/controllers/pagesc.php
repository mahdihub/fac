<?php
class pagesc extends CI_Controller{
    
   
    
    function view($page = 'accueilv')
    {
        $data['personne'] = $this->session->userdata('personne');
        load_view('pages/'.$page,$data);
    }
    
        
    function accueil()
    {
          load_view('accueil/main');
    }

    function articles()
    {
        
        $data['articles'] = $this->articlesm->get_articles();        //articles X categories X utilisateur U articles X 
                                                                     //categories X admins
     
        load_view('articles/main',$data);
    }
    
    function article($id)
    {
        $data['commented'] = $this->commentsm->commented($id);
        $data['sub_comments'] = $this->commentsm->get_sub_comments($id);
        $data['comments'] = $this->commentsm->get_comments($id);
        $data['article'] = $this->articlesm->get_articles($id);
        load_view('article/main',$data);
    }

    function ecrire_article()
    {
        $data['categories'] = $this->articlesm->get('categories'); 
        load_view('ecrire_article',$data);
    }
    
    function editer_article()
    {
        load_view('editer_article');
    }
    
    function login()
    {
        $this->load->view('login');
    }
    
    function admin()
    {
        $data['breadcrumb']= $this->load->view('admin_theme/content/breadcrumb',array('page_name' => ''),true);
        $data['content_for_layout'] = '';
        $this->load->view('admin_theme/template',$data);        
    }
    
    function profile($username)
    {
        $data['personne'] = $this->usersm->get_personne($username);
        $data['users'] = $this->usersm->get('utilisateurs');
        load_view('profile/main',$data);
    }
}
?>