<?php
function tag_url($id, $title)
{    
                $tag = strtolower(url_title(convert_accented_characters($title))).'-'.$id.'.htm';
                return $tag;
}