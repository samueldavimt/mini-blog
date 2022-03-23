<?php
        $BASE_URL  = "http://" . $_SERVER['SERVER_NAME'] . '/mini-blog/';
        $ROOT_DIR = $_SERVER["DOCUMENT_ROOT"] . "/mini-blog/";

        require_once($ROOT_DIR . "dates/dates.php");

        function filterId($id){
                global $posts;

                if(!filter_var($id, FILTER_VALIDATE_INT)){
                        return false;
                }
                elseif($id > count($posts)){
                        return false;
                }elseif(!isset($posts[$id - 1])){
                        return false;
                }else{
                        $id;
                        return $id;
                }
                    
        }

        function filterTag($tag){
                $pattern = "/['\"`´]/";
               if(!is_string($tag)){
                       return "não é string";
               }

               $tag = strip_tags($tag);
               $tag = preg_replace($pattern, '',$tag);
               $tag = filter_var($tag, FILTER_SANITIZE_SPECIAL_CHARS);

               return $tag;
        }
?>