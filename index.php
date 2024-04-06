<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Bah Movies"?></title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="rend">
        <img src="./images/loading.gif" alt="Loading..." />
    </div>
    <div class="logo">
        <img src="./images/logoo.png"></img>
    </div>    
    <div class="icon">
        <img src="./images/BahMovies.gif" />
    </div>
    <div class="movies">
        <h1>Popular movies</h1>
            <div class="films">
            <a href="scrambled.php" <?php if($currentPage === "scrambled.php"){?> class="activeLink" <?php }?>>
                <img src="./images/scrambled.png"></img>
            </a>
            <a href="thegreatseduction.php" <?php if($currentPage === "thegreatseduction.php"){?> class="activeLink" <?php }?>>
                <img src="./images/seduction.png"></img>
            </a>
            <a href="thesweeteast.php" <?php if($currentPage === "thesweeteast.php"){?> class="activeLink" <?php }?>>
                <img src="./images/sweet.png"></img>
            </a>
            <a href="players.php" <?php if($currentPage === "players.php"){?> class="activeLink" <?php }?>>
                <img src="./images/players.png"></img>
            </a>
            <a href="thepass.php" <?php if($currentPage === "thepass.php"){?> class="activeLink" <?php }?>>
                <img src="./images/thepass.png"></img>
            </a>
            <a href="thesiege.php" <?php if($currentPage === "thesiege.php"){?> class="activeLink" <?php }?>>
                <img src="./images/siege.png"></img>
            </a>
            <a href="parallel.php" <?php if($currentPage === "parallel.php"){?> class="activeLink" <?php }?>>
                <img src="./images/parallel.png"></img>
            </a>
            <a href="darkgame.php" <?php if($currentPage === "darkgame.php"){?> class="activeLink" <?php }?>>
                <img src="./images/darkgame.png"></img>
            </a>
            <a href="coldcopy.php" <?php if($currentPage === "coldcopy.php"){?> class="activeLink" <?php }?>>
                <img src="./images/coldcopy.png"></img>
            </a>
            <a href="stopmotion.php" <?php if($currentPage === "stopmotion.php"){?> class="activeLink" <?php }?>>
                <img src="./images/stopmotion.png"></img>
            </a>
            </div>
    </div>
    <script src="script.js"></script>
</body>
</html>