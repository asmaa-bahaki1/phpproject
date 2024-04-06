<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE SIEGE</title>
    <link rel="stylesheet" href="thesiege.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="thesiegelo">
        <img src="./images/siege.png"></img>
        <h1>THE SIEGE</h1>
        <div class="thesiegelo1">
        <p>Genre: Action</p>
        <p>Duration: 1h 56min</p>
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