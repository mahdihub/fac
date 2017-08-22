      <?php
         foreach($comments as $comment)
         {
             $data['comment'] = $comment;
             $this->load->view('article/comments/comment',$data);
             $this->load->view('article/comments/reply_form');                
                  
                 
                    foreach($sub_comments as $sub_comment)
                    {
                        $data['sub_comment'] = $sub_comment;
                        $this->load->view('article/comments/sub_comment',$data);
                    }
                
                 
                         
         }
     
       
      
      
      
   
         $this->load->view('article/comments/comment_form');
?>