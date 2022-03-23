<?php require_once("../templates/header.php");
    
    if(isset($_GET['tag'])){
        $tag_posts = [];

        $tag = $_GET['tag'];
        $validate = filterTag($tag);

        if($validate != false){
            foreach($posts as $post){
                if(in_array($validate, $post['tags'])){
                    $tag_posts[] = $post;
                }
            }

            if(count($tag_posts) < 1){
                echo "<h2>Nenhum Resultado para $validate</h2>";
                exit;
            }
           
        }
    }else{
        header("Location: <?=$BASE_URL?>index.php");
        exit;
    }

?>


<div class="main">
    <h1 class="title-post title-tag">Tag: <?=$validate?></h1>
        <div class="container-posts">
            
            <?php foreach($tag_posts as $post):?>
                <div  class="post">
                    
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