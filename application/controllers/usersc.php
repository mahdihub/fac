<?php
class usersc extends CI_Controller{
    
        
    function view($page = 'loginv', $username = NULL)
    {
        $data['personne'] = $this->usersm->get_personne($username);
        $data['users'] = $this->usersm->get('utilisateurs');
        
        $this->load->view('users/'.$page,$data);
        
    }
    
    


    
    
    function login()
    {
        if($this->input->is_ajax_request())
        {
            
        
            $email = $this->input->get('email');
            $password_form = $this->input->get('password');



            if($utilisateur = $this->usersm->get('utilisateurs',['email' => $email])) //si email appartient a un utilisateur 
            {

               $password = $utilisateur->password;

                if($password_form == $password)
                {
                    $this->session->set_userdata('username',$utilisateur->username_utilisateur);               
                    $this->session->set_userdata('photo',$utilisateur->photo_utilisateur);        
                    return ;
                }
                else
                {
                    echo "mot de pass non valide";
                }
            }
            elseif($admin = $this->usersm->get('admins',['email'=>$email])) //si il appartient a un admin 
            {

                $password = $admin->password;

                if($password_form == $password)
                {
                    $this->session->set_userdata('type_personne','admin');
                    $this->session->set_userdata('username',$admin->username_admin);
                    $this->session->set_userdata('photo',$admin->photo_admin);
                    return;
                }
                else
                {
                    echo "mot de pass non valide";
                }
            }
            else
            {
                   echo  "email non valide";
            }
       } 
     }
    
    
    
    function insert_user()
    {
        $this->form_validation->set_rules('nom','Nom','required');
        $this->form_validation->set_rules('prenom','Prenom','required');
        $this->form_validation->set_rules('username','nom d\'utilisateur','required');
            
        if($this->form_validation->run())
        {
            echo"lskjdflsdk";
                  $this->usersm->insert([
                      'nom' => $this->input->post('nom'),
                      'prenom' => $this->input->post('prenom'),  
                      'username_utilisateur' => $this->input->post('username')
                      ]);
        }
        else
        {
             $this->load->view('users/registerv');
        }    
    }
    

}
?>