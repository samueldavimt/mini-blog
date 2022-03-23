<?php

    require_once("templates/header.php");

?>

    <div class="main">
        <div class="container-posts">
            <?php foreach($posts as $post):?>
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

<?php require_once("templates/footer.php")?>
