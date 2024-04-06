<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCRAMBLED MOVIES</title>
    <link rel="stylesheet" href="scrambledmovies.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="scrambledmovieslo1">
    <div class="scrambledmovieslo">
        <img src="./images/scrambled.png"></img>
        <div class="video-container">
        <?php
            $videoId = "YOUR_YOUTUBE_VIDEO_ID";
            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/SZ3T3Yr6B54?si=Vyl2su4vCFsHmK86' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
        ?>
    </div>
    </div>    
    </div>    
    <div class="tex">
        <h1>SCRAMBLED (2024)</h1>
        <p>MPAA: R.</p>
        <p>Release Date: 02/02/24 [Cinemas]</p>
        <p>Genre: Comedy.</p>
        <p>Studio: Lionsgate.</p>
        <h1>Scrambled is a modern coming of age tale for the 30-something single people facing the invisible clock counting down the days of parenthood. In truth it’s a story about a woman deciding to freeze her eggs so her future is secure if she were to decide to have children at a later date. It’s a wonderful film fueled by its sincere storytelling and its message that in the end, you should love yourself, along with the possibilities the future holds.</h1>
        <h1>Led by a kinetic cast with rich chemistry amongst everyone. McKendrick’s Nellie is relatable in her humanity and ability to overcome the chaos of day to day standards in order to find herself within. A scene in particular between McKendrick and her father, played by the stellar Clancy Brown had me nearly in tears through their shared bond. Some may say that a perfect script doesn’t exist and that may still hold some ground, but Scrambled is as close as you can get. Providing an onslaught of hilarity blended with heartbreaking drama, this mixture of tone makes the film feel all the more real while simultaneously making the viewer  more locked into the situation. If there was a complaint to be had it’d be a desire to have some of the fantastic side characters have a bit more time, in order to better appreciate them even further when they pop up in scenarios throughout the film. Beyond Brown to name a few: Andrew Santino, Ego Nwodim, Yvonne Strahovski and June Diane Raphael are just the beginning of the wonderful casting inside Scrambled.</h1>
        <h1>Scrambled is fast paced, emotionally gripping and hilarious. It speaks volumes that McKendrick’s writing showcased a topic I was relatively unfamiliar with and by the close of the film led me to be more invested in learning further. McKendrick has an specific eye in her directing style - similar in the fashion of an Apatow title. Such as Trainwreck or This is 40, Scrambled creates a down to earth title memorable in its realism, yet still taking time to laugh at the little things.</h1>
        <h1>Scrambled is a phenomenal feature directorial outing by Leah McKendrick, who translated her true experience into an iconic self-love romantic comedy. A coming of age(d) tale that deserves everyone’s attention and an important piece of cinema for a topic that is sensitive for some, but should be better explored and become an openly spoken conversation for many.</h1>
    </div>     
</body>
</html>