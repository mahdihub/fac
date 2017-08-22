<?php

class usersm extends CI_Model{
    function get($table, $wheres = NULL)
    {
        if($wheres == NULL)
        {
            $query = $this->db->get($table);
            return $query->result();
        }
        else
        {
            foreach($wheres as $key => $value)
            {
                $this->db->where($key,$value);
            }
            $query = $this->db->get($table);
            return $query->row();
        }
    }
    
    
    function get_nbr_utilisateur()
    {
        return $this->db->count_all('utilisateurs');
    }
    
    
    function insert($data)
    {
        $this->db->insert('utilisateurs',$data);
    }
    
    
    function get_personne($username)
    {
       
        if($username)
        {
            $query = $this->db->query("
                SELECT username_admin AS username, photo_admin AS photo
                FROM admins
                where username_admin = '$username'
                UNION
                SELECT username_utilisateur AS username, photo_utilisateur AS photo
                FROM utilisateurs
                where username_utilisateur = '$username'                
            ");

            return $query->row();            
        }
    }
}