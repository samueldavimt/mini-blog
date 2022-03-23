<?php require_once("../templates/header.php");
    
    $post;
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $verify = filterId($id);

        if($verify == false){
            header("Location: $BASE_URL". "index.php");
            exit;
            
        }else{
            $post = $posts[$verify -1 ];
        }
        
        
    }else{
        header("Location: $BASE_URL". "index.php");
        exit;
    }


?>


<div class="main">
    <div class="post post-visited">
        <p class="title-post"><?=$post['title']?></p>

        <div class="image-post">
            <img src="<?=$BASE_URL?>images/<?=$post['img']?>" alt="">
        </div>

        <p class="title-description"><?=$post['description']?></p>

        <ul class="tags">
            <?php foreach($post['tags'] as $tag):?>   
                
                <li>
                    <a href="<?=$BASE_URL?>pages/tags.php?tag=<?=$tag?>">
                        <?=$tag?>
                    </a>
                </li>
            
            <?php endforeach?>
        </ul>

    </div>
</div>

<?php require_once("../templates/footer.php");?>
