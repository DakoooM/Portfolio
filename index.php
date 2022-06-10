<?php 

    $competences = [
        [
            "competence_nom" => "Analyser les besoins du client",
            "acquis_text" => "Acquis", /* Acquis / en cours / Aucune */
            "acquis" => true
        ],
        [
            "competence_nom" => "Établir un cahier des charges",
            "acquis_text" => "Acquis", 
            "acquis" => true
        ],
        [
            "competence_nom" => "Rédiger une Spécification Technique de Besoin (STB)",
            "acquis" => false
        ],
        [
            "competence_nom" => "Réaliser un prototype de la solution technique pour validation par le donneur d'ordres (configuration type, ...)",
            "acquis" => false
        ],
        [
            "competence_nom" => "Concevoir et développer les programmes et applications informatiques",
            "acquis_text" => "Acquis", 
            "acquis" => true
        ],
        [
            "competence_nom" => "Déterminer les phases et procédures de tests techniques et fonctionnels de programmes et applications informatiques",
            "acquis_text" => "Acquis", 
            "acquis" => true
        ],
        [
            "competence_nom" => "Analyser des problèmes techniques",
            "acquis_text" => "Acquis", 
            "acquis" => true
        ],
        [
            "competence_nom" => "Déterminer des mesures correctives",
            "acquis" => false
        ],
        [
            "competence_nom" => "Réaliser des supports techniques",
            "acquis_text" => "Acquis", 
            "acquis" => true
        ],
        [
            "competence_nom" => "Traiter l'information (collecter, classer et mettre à jour)",
            "acquis_text" => "En cours", 
            "acquis" => false
        ],
        [
            "competence_nom" => "Animer une réunion",
            "acquis_text" => "En cours", 
            "acquis" => false
        ],
    ];

    if (isset($_POST["message"])){
        $result = mail("cassinisgiovani@gmail.com", "Sujet Test", $_POST["message"], "From:contact@adns-tech.fr\r\n" . $_POST["email_name"]);

        if ($result) {
            echo "Mail envoyé";
        } else {
            echo "Erreur lors de l'envoi du mail";
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/style.css">

        <!-- <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff"> -->

        <title>Giovani - Accueil</title>
    </head>
    <body>
        <nav>
            <div class="align-center">
                <div class="container-fluid">
                    <ul class="navbar">
                        <li class="navbar-link"><a href="#home" alt="Go to home" title="Go to home"><i class="fa-solid fa-house-chimney marge-r"></i>Acceuil</a></li>
                        <li class="navbar-link"><a href="#competences" alt="Go to competences" title="Go to competences"><i class="fa-solid fa-book-open marge-r"></i>Compétences</a></li>
                        <li class="navbar-link"><a href="#projets" alt="Go to Projects" title="Go to Projects"><i class="fa-solid fa-list-check marge-r"></i>Projets</a></li>
                        <li class="navbar-link"><a href="#contact" alt="Go to Contact" title="Go to Contact"><i class="fa-solid fa-address-book marge-r"></i>Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <section id="home">
                <div class="container-fluid weight-bold">
                    <div class="header-present">
                        <div class="container">
                            <div class="img-present">
                                <img src="img/logo.jpg" alt="image de giovani" class="img-home" draggable="false">
                            </div>
                            
                            <span class="title white-text">Giovani Cassinis</span>
                            <p class="desc white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti earum quo ipsa id officiis minus minima dolor, asperiores recusandae deserunt cumque assumenda, enim quaerat. Aliquid nostrum non sequi aperiam architecto est, vero excepturi dolorum molestiae recusandae eligendi ex quis et repellat qui quibusdam modi omnis sapiente consequatur maxime incidunt tempora.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="competences">
                <div class="container-fluid weight-bold">
                    <div class="comps-present">
                        <div class="container">
                            <span class="title">Compétences</span>
                            <p class="desc">Les compétences suivante sont mes Savoir-faire dont on a besoin par défault.</p>
                            <hr>

                            
                            <?php foreach($competences as $key => $value): ?>
                                <p>
                                    <span class="sub-title-comp">
                                        <span class="reset-weight"><?=$value["competence_nom"]?>:</span>

                                        <?php
                                            $acquis_rework = isset($value["acquis_text"]) ? $value["acquis_text"] : "Non Acquis";
                                        ?>

                                        <?php if ($value["acquis"] === true): ?>
                                            <input type='checkbox' checked disabled data-text='<?=$acquis_rework?>'>
                                        <?php elseif ($value["acquis"] === false): ?>
                                                <input type='checkbox' disabled data-text='<?=$acquis_rework?>'>
                                        <?php endif; ?>

                                        <hr>
                                    </span>
                                </p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projets">
                <div class="container-fluid weight-bold">
                    <div class="project-present">
                        <div class="container">
                            <span class="title white-text">Mes Projets</span>

                            <div class="projects-container">
                                <div class="project">
                                    <img src="img/adns.jpg" alt="Image de iAdmin" draggable="false" class="adns-img">
                                    <a href="https://adns-tech.fr/" target="_blank" title="Redirection ADN'S" alt="Lien de redirection vers ADN'S"><p class="title-project blue-text">ADN'S</p></a>
                                    <hr>
                                    <p class="desc-project">ADN'S est un projet qui a démarré en avril 2021, Nous avons commencer avec peux de connaissance et l'envie de changer l'environnement de développement dans lequel nous étions et pouvoir offrir des services de développement.</p>
                                </div>

                                <div class="project">
                                    <img src="img/github.png" alt="Image de iAdmin" draggable="false" class="github-img">
                                    <a href="https://github.com/DakoooM?tab=repositories" target="_blank" title="Redirection DakoM" alt="Lien de redirection vers le Github de DakoM"><p class="title-project blue-text">Github</p></a>
                                    <hr>
                                    <p class="desc-project">Retrouvez tout mes autres projets Open source sur le site internet <a href="http://github.com/dakooom" target="_blank">Github</a> !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="align-center">
                    <div class="container weight-bold align-text">
                        <span class="title">Contactez moi</span>
                        <br>
                        <a href="mailto:dako.request@gmail.com" class="mail-to">dako.request@gmail.com</a>

                        <div class="contact-form">
                            <form method="get">
                                <label>*: Obligatoire</label>
                                <input type="text" placeholder="Nom & Prénom *" name="contact_name" required>
                                <input type="email" placeholder="Email *" name="email_name" required>
                                <textarea name="message" cols="20" rows="20" placeholder="Veuillez écrire un message *"></textarea>

                                <input type="submit" value="Envoyez" title="Envoyez votre demande de contact avec Giovani">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <div class="align-center">
            <div class="container white-text align-text">
                <footer class="footer">
                    <p>Tous droits réservés à Giovani Cassinis. ©2022</p>
                    <p>Le code source de ce site internet est disponible sur mon <a href="https://github.com/DakoooM/Portfolio" alt="Redirection vers mon Github" alt="Lien vers le Github DakoooM">Github</a></p>
                </footer>
            </div>
        </div>
        <script src="index.js"></script>
    </body>
</html>