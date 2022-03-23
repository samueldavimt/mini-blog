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
?>