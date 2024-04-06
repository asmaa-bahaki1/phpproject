<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAYERS MOVIES</title>
    <link rel="stylesheet" href="playersmovies.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="playersmovieslo1">
    <div class="playersmovieslo">
        <img src="./images/players.png"></img>
        <div class="video-container">
        <?php
            $videoId = "YOUR_YOUTUBE_VIDEO_ID";
            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/8gH6AEBwEAw?si=kJNnYnhCbTPuAdTN' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
        ?>
    </div>
    </div>    
    </div>    
    <div class="tex">
        <h1>PLAYERS (2024)</h1>
        <p>Tom Ellis.</p>
        <p>Release Date: 14/02/24 [Cinemas]</p>
        <p>Genre: Romance, Comedy.</p>
        <p>Country: Uniled States.</p>
        <h1>Players is about a gang of friends living in New York City, all single, all of whom spend their off-hours "running plays" on potential hook-ups. They name all the different plays ("The Betsy Ross," "Drip Drop"), and work them together, tag-teaming around their unsuspecting prey. These plays are sometimes very elaborate, but they usually work. It's a lot more fun than swiping right.</h1>
        <h1>Mack (Gina Rodriguez) is queen of the players. She's a sportswriter at an unbelievably unrealistic newspaper, and sees everything through the lens of sports. Her best pals are Adam (Damon Wayans Jr.), Sam (Augustus Prew) and Little (Joel Courtney), Sam's younger brother. They meet up in bars after hours and "run plays", but the routine is getting a little old. Mack thinks it's time she had a real adult relationship. And she knows who she wants: a famous war journalist named Nick (Tom Ellis), whom she already slept with, unfortunately. This is a quandary: How do you go from a hook-up to a relationship? Mack and friends put together the most intricate play ever played in order to mastermind the segue to romantic relationship, even though the more mature Adam has his doubts. "You can't build a relationship from a play!" he tells Mack.</h1>
        <h1>The main problem with "Players" is that it's so obvious Nick isn't "the one" for Mack. Adam is "the one". The rest of the movie is us waiting for Mack to get it. Nick is fine. He's maybe a little self-involved, but he is in the process of finishing a book. Of course he's distracted. The red flags aren't extreme. But still, it's hard to know what Mack actually sees in him, or what she's even looking for. She doesn't seem particularly status-conscious, although she is in awe of Nick. Her parents, now dead, were madly in love with each other. She wants that for herself. But does she? And could she have what her parents had with Nick? It's debatable.</h1>
        <h1>Little tidbits are thrown into the mix, clearly set ups for a payoff later. Mack has been procrastinating on writing a huge feature. (What kind of newspaper is this, where you can procrastinate for months at a time?) Mack puts Nick's writing on a pedestal: he reports from Syria, he was nominated for a Pulitzer! She's insecure about her own writing compared to his. The sub-plot having to do with Mack's feature, Nick's involvement in it, and its eventual resolution, can be seen coming from ten miles away.</h1>
    </div>     
</body>
</html>