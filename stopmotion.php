<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOPMOTION</title>
    <link rel="stylesheet" href="stopmotion.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="stopmotionlo">
        <img src="./images/stopmotion.png"></img>
        <h1>Stopmotion</h1>
        <div class="stopmotionlo1">
        <p>Genre: Animation, Horror</p>
        <p>Duration: 1h 33min</p>
        <p>Quality: HD</p>
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