<?php
class adminsm extends CI_Model{
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
    
    function get_nbr_admins()
    {
        return $this->db->count_all('admins');
    }
}
?>