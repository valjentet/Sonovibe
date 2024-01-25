<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon compte Sonosense</title>
	    <link href="page_mon_compte.css" rel="stylesheet">

        <style>

body {
    padding: 0%;
    margin: 0%;
    font-family: Montserrat, sans-serif;
    color: black;
    
  }
  
  nav {
    background-color: white;
    color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 0.7vh;
    padding-top: 0.7vh;
    box-shadow: 0 2px 5px grey;
    width: 100vw;
  }
  nav .a {
    text-decoration: none;
    color: black;   
    text-align: center;
    padding: 2vh 2.1vw;
  }
  
  .atextenav {
    font-size: 130%;
  }
  
  .middlesection {
    margin-left: 15vw;
  }
  
  nav .b {
    text-decoration: none;
    color: white;
    margin: 0 15px;
    text-align: center;
  }
  
  nav #right-section {
    display: flex;
    align-items: right;
  }
  
  nav button {
    margin-left: 15px;
    padding: 2vh;
    color: white;
    border: none;
    cursor: pointer;
  }
  
  
  .a:hover{
    background-color: rgb(196, 147, 196);
    border-radius: 8px;
  }
  
  .binscription{
    background-color: rgb(97, 15, 97);
    color: white;
    margin-right: 20px;
    font-size: 130%;
    border-radius: 10px;
  }
  
  .bconnexion {
    font-size: 130%;
    background-color: white;
    padding: 2vh;
  }
  
  
  
  #logonav {
    margin-left: 5%;
  }
  @media screen and (max-width: 1400px) {
  
    nav .a {
        padding: 1vh 1.7vw;
        font-size: 0.8em;
  
    }
  }
  
  
  @media screen and (max-width: 1100px) {
  
    nav .a {
        padding: 0.8vh 1.5vw;
        font-size: 0.6em;
  
    }
    .binscription{
        font-size: 0.8em;
    }
  }
  
  @media screen and (max-width: 850px) {
  
    nav .a {
        padding: 0.6vh 1.3vw;
        font-size: 0.5em;
  
    }
    .binscription{
        font-size: 0.6em;
    }
  }
  
  @media screen and (max-width: 750px) {
  
    nav .a {
        padding: 0.5h 1.1vw;
        font-size: 0.4em;
  
    }
    .binscription{
        font-size: 0.4em;
    }
  }
  @media screen and (max-width: 600px) {
  
    nav .a {
        padding: 0.3h 0.7vw;
        font-size: 0.2em;
  
    }
    .binscription{
        font-size: 0.2em;
    }
    nav { box-shadow: none;}
  }
  @media screen and (max-width: 550px) {
  
    nav .a {
        padding: 0.2h 0.5w;
        font-size: 0.1em;
  
    }
    .binscription{
        font-size: 0.1em;
    }
  }
  
  
  @media screen and (min-width: 1700px) {
  
    nav .a {
        padding: 1.2h 1.9vw;
        font-size: 1em;
  
    }
    .binscription{
        font-size: 1em;
    }
  }
  
  @media screen and (min-width: 2400px) {
  
    nav .a {
        padding: 1.7h 2.3vw;
        font-size: 1.3em;
  
    }
    .binscription{
        font-size: 1em;
    }
  }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
                 
        .btn-grad {
            background-image: linear-gradient(to right, #AA076B 0%, #61045F  51%, #AA076B  100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            width: 100px;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
    </style>

    </head>

    <nav>
        <div name="logo" id="logonav">
          <a href="Accueil/page_accueil.php"><img name="logo_sono" src="Images/Sonovibes_logo.png" width="120" height="80"></a>
        </div>
        <div id="middle-section">
            <?php 
            if ($_SESSION['connecte'] == 1) {
                echo '
                <a href="Accueil/page_accueil.php" class="a"> <span class="atextenav">Accueil</span></a>
                <a href="Evenement/page_evenement.php" class="a"><span class="atextenav">Événements</span></a>
                <a href="Mon_compte/page_forum.php" class="a"><span class="atextenav">Forum</span></a>
                <a href="Mon_compte/page_mon_compte.php" class="a"><span class="atextenav">Mes événements</span></a>';
            } else {echo '
                <a href="Accueil/page_accueil.php" class="a"> <span class="atextenav">Accueil</span></a>
                <a href="Evenement/page_evenement.php" class="a"><span class="atextenav">Événements</span></a>
                <a href="Mon_compte/page_forum.php" class="a"><span class="atextenav">Forum</span></a>
                <a href="pas_connecte.php" class="a"><span class="atextenav">Mes événements</span></a>';
            }

            if ($_SESSION['roles'] == 1) {echo '    <a href="../Admin/dashboard_admin.php" class="a"><span class="atextenav">Administration</span></a> ';}
            ?>                
            </div>

            <div id="right-section">
                <?php 
            if ($_SESSION['connecte'] == 1) { 
                
                echo '<a href="/Mon_compte/page_mon_compte_profil.php" class="b"><button class="binscription"> Bienvenue   ' . $_SESSION['prenom_participant'] . ' !</button></a>';
            } 
            else {
                echo '<button class="bconnexion"><a href="Connexion/page_connexion.html" class="a">Connexion</a></button>
                <button class="binscription"><a href="Connexion/page_inscription.html" class="b">Inscription</a></button>'; 
                
            }
            
            ?>
        </div>
    </nav>

<body>





    <section>
        <h2>Bienvenue !</h2>
        <p>Vous n'êtes pas connecté. Veuillez vous connecter pour accéder à votre compte.</p>

        <!-- Vous pouvez ajouter des liens vers la page de connexion ou d'inscription ici -->
         <a href="Connexion/page_connexion.html"> <bouton class="btn-grad "href="login.html">Se connecter</bouton></a>  <a href="Connexion/page_inscription.html"> <bouton class="btn-grad" href="register.html">S'inscrire</bouton></a>
    </section>

</body>