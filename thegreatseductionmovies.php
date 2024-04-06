<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE GREAT SEDUCTION MOVIES</title>
    <link rel="stylesheet" href="thegreatseductionmovies.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="zeblo1">
    <div class="zeblo">
        <img src="./images/seduction.png"></img>
        <div class="video-container">
        <?php
            $videoId = "YOUR_YOUTUBE_VIDEO_ID";
            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/6EKNkH_0mNU?si=cUBh5Xs7ZsUxaIzI' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
        ?>
    </div>
    </div>    
    </div>    
    <div class="tex">
        <h1>THE GREAT SEDUCTION</h1>
        <p>Celso R. García</p>
        <p>Country: Mexico.</p>
        <p>Language: Spanish.</p>
        <h1>The Great Seduction is a 2023 Mexican comedy film directed by Celso R. García who co-wrote with Luciana Herrera Caso. It is a Spanish-language remake of the 2003 film Seducing Doctor Lewis. It stars Memo Villegas, Pierre Louis and Yalitza Aparicio. It is about the inhabitants of a forgotten fishing village where they seek to save it by "seducing" a doctor to the island with lies.</h1>
        <h1>Synopsis
        <br><br>On the fishing island of Santa María del Mar, industrialization is taking place that put an end to economic activity. However, a fish packing company seeks to establish itself in the town, giving hope to the inhabitants, but the packing company asks for a requirement to establish itself: a doctor who lives on the island. Thus begins the journey of Germán and the rest of the inhabitants to “seduce” the city doctor Mateo.</h1>
    </div>     
</body>
</html>