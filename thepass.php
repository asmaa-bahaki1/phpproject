<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE PASS</title>
    <link rel="stylesheet" href="thepass.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="thepasslo">
        <img src="./images/thepass.png"></img>
        <h1>THE PASS</h1>
        <div class="thepasslo1">
        <p>Genre: Drama</p>
        <p>Duration: 1h 45min</p>
        <p>Quality: HD</p>
        <a href="thepassmovies.php" <?php if($currentPage === "thepassmovies.php"){?> class="activeLink" <?php }?>>

        <button class="copa">
  <span>Watch</span>
  <svg width="15px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</button>
    </div>
    </div>
</body>
</html>