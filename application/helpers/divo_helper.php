<?php
  function divo($attributes,$text)
  {
      $classes="";
      foreach($attributes as $attribute)
      {
        $classes.="$attribute ";
      }
      echo"<div class=\"$classes\">$text</div>";   
  }
?>