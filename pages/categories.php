<?php

    require_once("../templates/header.php");

    $posts_category_id;
    $posts_category;

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $verify = filterId($id);

        if($verify == false){
            header("Location: $BASE_URL". "index.php");
            exit;
            
            
        }else{
            $posts_category_id = $categories[$verify -1];
            foreach($posts as $post){
                if(in_array($posts_category_id, $post['tags'])){
                    $posts_category[] = $post;
                }
            }
        }
        
        
    }else{
        header("Location: $BASE_URL". "index.php");
        exit;
    }

?>

    <div class="main">
        <div class="container-posts">
            <?php foreach($posts_category as $post):?>
                <div class="post">
                    
                    <div class="image-post">
                        <img src="<?=$BASE_URL?>images/<?=$post['img']?>" alt="">
                    </div>

                    <a href="<?=$BASE_URL?>pages/post.php?id=<?=$post['id']?>" class="title-post"><?=$post['title']?></a>

                    <p class="title-description"><?=$post['description']?></p>

                    <ul class="tags">
                        <?php foreach($post['tags'] as $tag):?>
                           
                            <li>
                               

                                <a href="<?=$BASE_URL?>pages/tags.php?tag=<?=$tag?>"> <?=$tag?></a>

                            </li>
                        
                        <?php endforeach?>
                    </ul>
                </div>
            <?php endforeach?>
         </div>
    </div>

<?php require_once("../templates/footer.php")?>
