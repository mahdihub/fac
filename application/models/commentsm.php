<?php
class commentsm extends CI_Model{
    function insert_comment($data)
    {
        $this->db->insert('comments',$data);
    }
    
    function insert_sub_comment($data)
    {
        $this->db->insert('sub_comments',$data);
    }
    
    function get_comments($id_article)
    {
        if($id_article)
        {
            $query = $this->db->query("
              SELECT id_comment, username, contenu, photo_admin AS photo, likes
              FROM  comments, admins
              WHERE username = username_admin AND id_article = $id_article
              UNION
              SELECT id_comment, username, contenu, photo_utilisateur AS photo, likes
              FROM  comments, utilisateurs
              WHERE username = username_utilisateur AND id_article = $id_article 
              ORDER BY id_comment DESC;
             ");

            return $query->result();           
        }
    }
    
    function get_sub_comments($id_article)
    {
        if($id_article)
        {
            $query = $this->db->query("
                 SELECT sub_comment, sub_comments.username AS username, sub_comments.id_comment AS id_comment, photo_utilisateur AS photo
                 FROM   sub_comments, comments, utilisateurs
                 WHERE  comments.id_article = $id_article AND comments.id_comment = sub_comments.id_comment AND sub_comments.username = username_utilisateur
                 UNION
                 SELECT sub_comment, sub_comments.username AS username, sub_comments.id_comment AS id_comment, photo_admin AS photo
                 FROM   sub_comments, comments, admins
                 WHERE  comments.id_article = $id_article AND comments.id_comment = sub_comments.id_comment AND sub_comments.username = username_admin               
            ");
            
            return $query->result();
        }
    }
    
    
    function commented($id_article)
    {
        if($id_article)
        {
            $username = $this->session->userdata('username');
            
            $query = $this->db->query("
                SELECT *
                FROM   comments
                WHERE  comments.id_article = $id_article AND comments.username = '$username'
            ");   
            
            return $query->num_rows();  // 1 ou 0 
        }


    }
    
    
    function update_likes($id_comment, $data)
    {
        $this->db->where('id_comment', $id_comment);
        $this->db->update('comments', $data);
    }
}