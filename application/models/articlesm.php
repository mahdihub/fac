<?php
class articlesm extends CI_Model{
    function insertArticle($data){
        $this->db->insert('articles',$data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }
    
    function supp($id)
    {
        $this->db->where('id_article',$id);
        $this->db->delete('articles');
    }
    
    function update($id,$article)
    {
        $this->db->where('id_article',$id);
        $this->db->update('articles',$article);
    }
    
    
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
    

   
    
    function get_articles($id=NULL)
    {
       
        if($id != NULL)
        {
            $query = $this->db->query("
                 SELECT id_article, titre, contenu, image, date, tag_url, validé, nom_categorie, username_admin AS username
                 FROM articles, categories, admins
                 WHERE articles.id_categorie = categories.id_categorie AND articles.username_contributeur = admins.username_admin AND articles.id_article = $id
                 UNION
                 SELECT id_article, titre, contenu, image, date, tag_url, validé, nom_categorie, username_utilisateur AS username
                 FROM articles, categories, utilisateurs
                 WHERE articles.id_categorie = categories.id_categorie AND articles.username_contributeur = utilisateurs.username_utilisateur  AND articles.id_article = $id 
            ");       
             
            return $query->row();
        }
        $query = $this->db->query("
             SELECT id_article, titre, contenu, image, date, tag_url, validé, nom_categorie, username_admin AS username
             FROM articles, categories, admins
             WHERE articles.id_categorie = categories.id_categorie AND articles.username_contributeur = admins.username_admin
             UNION
             SELECT id_article, titre, contenu, image, date, tag_url, validé, nom_categorie, username_utilisateur AS username
             FROM articles, categories, utilisateurs
             WHERE articles.id_categorie = categories.id_categorie AND articles.username_contributeur = utilisateurs.username_utilisateur       
        ");
        
        return $query->result();
        
    }
    
   
    

    function count_articles_non_valides()
    {
        $this->db->where('validé',0);
        $query = $this->db->get('articles');
        return $query->num_rows();
    }
}
?>