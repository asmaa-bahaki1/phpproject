<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE GREAT SEDUCTION MOVIES</title>
    <link rel="stylesheet" href="thesweeteastmovies.css"> 
</head>
<body>
    <div class="logo">
        <a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php }?>>
            <img src="./images/logoo.png"></img>
        </a>
    </div>    
    <div class="thesweeteastmovies1">
    <div class="thesweeteastmovies">
        <img src="./images/sweet.png"></img>
        <div class="video-container">
        <?php
            $videoId = "YOUR_YOUTUBE_VIDEO_ID";
            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/uh9H30cobyE?si=1gIX3ykg-F0eRXZG' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
        ?>
    </div>
    </div>    
    </div>    
    <div class="tex">
        <h1>The Sweet East</h1>
        <p>MPAA: R.</p>
        <p>Release Date: 02/02/24 [Cinemas]</p>
        <p>Genre: Comedy.</p>
        <p>Studio: Lionsgate.</p>
        <h1>The Sweet East is a 2023 American satirical surrealist road film directed by Sean Price Williams in his directorial debut from a screenplay by Nick Pinkerton. It stars Talia Ryder, Earl Cave, Simon Rex, Ayo Edebiri, Jeremy O. Harris, Jacob Elordi and Rish Shah.
        The Sweet East had its world premiere at the 2023 Cannes Film Festival in the Directors' Fortnight section on May 18, 2023. The film was released on December 1, 2023, by Utopia.</h1>
        <h1>Plot
        High school student Lillian is on a class trip to Washington, D.C., when a local restaurant is attacked by an armed man who believes the establishment houses a secret pedophilia ring. She is led to safety by left-wing political activist Caleb, who brings her to a home where he lives with other dissidents. Caleb and his friends bring Lillian along to a protest, only to discover that they have travelled to the wrong location. While there, she meets Lawrence, a university professor with right-wing sympathies, who offers to let her stay with him at his home. She sends word to a friend that she is safe but does not plan to return home. She sees news reports that there is a police manhunt for her, with fears that she has been kidnapped.
        While at Lawrence’s house, Lillian witnesses him meeting with a skinhead, who gives him a large duffel bag. Lawrence travels with Lillian to New York City, bringing the bag with them. Lillian convinces him to rent a Manhattan hotel room and undresses in front of him. The following day, she sends him to buy her nail polish. While he is gone, she searches the bag and finds it full of cash; she takes the bag and leaves. As she is fleeing from the hotel, she is stopped on the street by director Molly and producer Matthew, who want to cast her in a film they are making. She gets the part and begins shooting, striking up a flirtation with her co-star Ian, a famous actor.</h1>
        <h1>Lillian is photographed by paparazzi walking with Ian, with the pictures published on the cover of a tabloid magazine. During the shoot one night, the skinhead arrives at the set searching for Lillian and the money; he and other skinheads open fire and kill many members of the cast and crew, including Ian. Lillian is rescued by crew member Mo, who brings her to a secluded barn on a property his brother Ahmad runs as a religious community. While she initially stays there for fear that the skinheads are still searching for her, she finds a newspaper that they have been captured by police, along with an assault rifle. She plans to leave, but is seen by Ahmad, Mo, and others. She pretends to be a neighbour looking for a lost dog to escape, but eventually collapses from exhaustion while walking.</h1>
        <h1>She awakens at a monastery, where she is told by a priest that she was rescued from freezing to death and that the police have been notified of her whereabouts. Upon returning home, Lillian finds that her classmates are now living very different lives than when she last saw them. While watching television with her family, she hears news reports about a terrorist attack at a football stadium that has left tens of thousands dead.</h1>
    </div>     
</body>
</html>