<?php

    $ROOT_DIR = $_SERVER["DOCUMENT_ROOT"] . "/mini-blog/";

    require_once($ROOT_DIR . "helper/helper.php");
    require_once($ROOT_DIR . "dates/dates.php");
    
    
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Blog</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
    <script src=""></script>
</head>
<body>
    
    <header>
        <div class="header-container">
            <a href="#" id="logo"><img src="<?=$BASE_URL?>images/technology.png" alt=""></a>

            <nav>
                <ul>
                    <li><a href="<?=$BASE_URL?>">Home</a></li>

                    <li id="list-categories">
                        Categories
                        <ul class="categories">
                            
                            <?php foreach($categories as $key => $categorie):?>
                                <li><a href="<?=$BASE_URL?>pages/categories.php?id=<?=$key+1?>"><?=$categorie?></a></li>
                            <?php endforeach?>
                        </ul>
                    </li>
                    <li><a href="<?=$BASE_URL?>pages/contact.php">Contato</a></li>
                    <li><a href="<?=$BASE_URL?>login/">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>