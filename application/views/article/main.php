<link rel="stylesheet" href="<?= site_url('assets/css/css/articlev.css')?>">

<div class="container">  
      
      <?php $this->load->view('article/article')?>
      
      
      <br><br><br>
      

        
      <?php $this->load->view('article/comments/main')?>


      
     
      <script>
        $(".reply").click(function(event){
            event.preventDefault();
           $(this).parent().parent().next().fadeToggle(1000);
        });
          
       
        $(".like").data('count',0);
        $(".like").click(function(event){
            event.preventDefault();
            
            $(this).data('count',parseInt($(this).data('count'))+1);
            var liked = 2 * ($(this).data('count') % 2) - 1;            // 1 ou -1
            
            var likes = $(this).children(":first-child").html();
            likes = parseInt(likes) + liked ;
            
            $(this).children(":first-child").html("  "+likes);
            
            update_likes($(this).attr("id_comment"), likes);
        });  
          
          function update_likes(id_comment, likes)
          {
             $.ajax({
                 url: "<?=site_url('commentsc/update_likes/')?>" +id_comment +"/"+ likes,
        
                 success: function(data,status){
                     console.log(status);
                  console.log(data);
                 }
             });
          }
      </script>
</div>
