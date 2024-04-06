<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE PASS</title>
    <link rel="stylesheet" href="thepasstmovies.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="thepasstmovies1">
    <div class="thepasstmovies">
        <img src="./images/thepass.png"></img>
        <div class="video-container">
        <?php
            $videoId = "YOUR_YOUTUBE_VIDEO_ID";
            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/Wm736of2Qtg?si=QGnihrjYr9wcjF9Y' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
        ?>
    </div>
    </div>    
    </div>    
    <div class="tex">
        <h1>The Pass</h1>
        <p>Kandi Burruss.</p>
        <p>Release Date: 02/02/24 [Cinemas]</p>
        <p>Genre: Drama.</p>
        <p>Country: United States.</p>
        <h1>The Pass is a 2016 film starring Russell Tovey and Arinze Kene. It was directed by Ben A. Williams, based on a play by John Donnelly. The film is about a relationship between two men who are English football players, and how their lives unfold over the course of a decade. The film was nominated at the 2017 BAFTA Awards, in the category of Outstanding Debut by a British Writer, Director or Producer for John Donnelly and Ben Williams.</h1>
        <h1>Nineteen-year-olds Jason and Ade have been in the Academy of a famous London football club since they were eight years old. It's the night before their first-ever game for the first team – a Champions League match – and they're in a hotel room in Romania. They should be sleeping, but they're over-excited. They skip, fight, mock each other, prepare their kit, watch a teammate's sex tape. And then, out of nowhere, one of them kisses the other. The impact of this 'pass' reverberates through the next ten years of their lives – a decade of fame and failure, secrets and lies, in a sporting world where image is everything.</h1>
    </div>     
</body>
</html>