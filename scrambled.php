<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRAMBLED</title>
    <link rel="stylesheet" href="scrambledd.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="scrambledlo">
        <img src="./images/scrambled.png"></img>
        <h1>SCRAMBLED</h1>
        <div class="scrambledlo1">
        <p>Genre: Comedy</p>
        <p>Duration: 1h 37min</p>
        <p>Quality: HD</p>
        <a href="scrambledmovies.php" <?php if($currentPage === "scrambledmovies.php"){?> class="activeLink" <?php }?>>
        <button class="copa">
  <span>Watch</span>
  <svg width="15px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</button>
</a>
</div>
    </div>
</body>
</html>