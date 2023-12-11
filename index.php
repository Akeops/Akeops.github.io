<?php ob_start();
require '../utile/formatage.php';
?>
<!-- Présentation de ma personne -->
<section id="presentation">
    <div class="section-title">
        <?= formatageTitre("À propos 🗨️") ?>
    </div>
    <div class="container text-center">
        <div class="row divPresentation">
            <div class="col-12 col-xl-6  presentation">
                <img src="../source/images/photoPresentation.png" class="card-img-top img-fluid" alt="photo de moi">
            </div>
            <div class="col-12 col-xl-6 presentationDescription shadow-lg text-start">
                    <p>Bonjour, je m'appelle Andoni Lalanne-Berdouticq, un passionné de développement informatique avec un BTS en SIO option SLAM. Ayant récemment repris mes études dans la lignée de mon BTS à Efrei, je me spécialise actuellement dans le développement Full-Stack en Javascript. Mon parcours m'a doté de solides compétences en PHP, Bootstrap, CSS, Docker et Javascript. </p>
            </div>
        </div>
        <div class="col-12 text-center boutonCV">
            <a class="btn rounded-pill monBouton" href="../source/pdf/Lalanne-Berdouticq-CV.pdf" download="Lalanne-Berdouticq-Andoni">Télécharger mon CV</a>
        </div>
    </div>
</section>
 
<!-- Parcours scolaire -->
<section id="parcoursScolaire">
    <div class="section-title">
        <?= formatageTitre("Mon parcours scolaire 🎓") ?>
    </div>
    <div class="container text-center">
        <ul class="external-style-ul">
            <li class="external-style-li shadow-lg" style="--accent-color:#41516C">
                <div class="date">Objectif</div>
                <div class="title fs-5">Troisième année de BACHELOR en Alternance</div>
                <div class="descr fs-5">Dernière année de mon BACHELOR, <br><b>Objectif:</b><br> Être compétent dans mon domaine, <br> pouvoir développer une application web de A à Z, <br> de sa conception à son déploiement.</div>
            </li>
            <li class="external-style-li shadow-lg" style="--accent-color:#FBCA3E">
                <div class="date">2023-2024</div>
                <div class="title fs-5">BACHELOR Développement web & application</div>
                <div class="descr fs-5">École Efrei à Bordeaux, reprise d'étude en deuxième année.<br><b>Objectif de la formation:</b> <br> Devenir développeur Full-Stack en Javascript.<br>
            <button class="boutonEfrei"><a href="https://www.efrei.fr" target="_blank">Site web de l'Efrei</a></button></div>
            </li>
            <li class="external-style-li shadow-lg" style="--accent-color:#E24A68">
                <div class="date">2017-2020</div>
                <div class="title fs-5">BTS SIO option Solutions logicielles et applications métiers (SLAM)</div>
                <div class="descr fs-5">Lycée Louis de Foix à Bayonne, mention Assez Bien.</div>
            </li>
            <li class="external-style-li shadow-lg" style="--accent-color:#1B5F8C">
                <div class="date">2014-2017</div>
                <div class="title fs-5">BAC Professionnel SEN option Télécom & Réseaux</div>
                <div class="descr fs-5">Lycée Ramiro Arrué à Saint-Jean-de-Luz, mention Assez Bien.</div>
            </li>
            <li class="external-style-li shadow-lg" style="--accent-color:#4CADAD">
                <div class="date">2014</div>
                <div class="title fs-5">Brevet des collèges</div>
                <div class="descr fs-5">Collège Piarres Larzabal à Ciboure, mention Assez Bien.</div>
            </li>
        </ul>
    </div>
</section>

<!-- Mes expériences professionnel -->
<!-- Card -->
<section id="expPro">
    <div class="section-title">
        <?= formatageTitre("Mon parcours professionnel 🤵") ?>
    </div>
    <div class="container text-center"> 
        <div class="container text-center divEntreprises">
            <div class="row divEntreprises1">
                <div class="col-12 col-md-6 col-lg-4 hoverEffect">
                    <div class="card cardPro">
                        <button type="button" class=" border border-2 bouton-card" data-bs-toggle="modal" data-bs-target="#ecreatures"><img src="../source/images/ecreatures2.png" class="card-img-top shadow-lg bouton-card" alt="ecreaturesLogo"></button>    
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card cardPro">
                        <button type="button" class="border border-2 bouton-card" data-bs-toggle="modal" data-bs-target="#picDigital"><img src="../source/images/pic-digital.png" class="card-img-top shadow-lg bouton-card" alt="ecreaturesLogo"></button>    
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card cardPro">
                        <button type="button" class=" border border-2 bouton-card shadow-lg" data-bs-toggle="modal" data-bs-target="#blueLogic"><img src="../source/images/bluelogic.png" class="card-img-top shadow-lg bouton-card" alt="ecreaturesLogo"></button>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
        <div class="modal fade" id="ecreatures" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Ecreatures</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Pendant mon premier stage de BTS, j'ai été chargé de la refonte complète d'un site web pour un client. En utilisant Wordpress comme base, j'ai reconstruit entièrement le site en respectant la maquette fournie par le client. Pour ajouter une touche personnelle au site et répondre aux attentes du client, j'ai également personnalisé certaines sections en utilisant du CSS.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
        <div class="modal fade" id="picDigital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="cours2">Pic Digital</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Pendant mon parcours professionnel, j'ai principalement travaillé sur le développement frontend, en mettant en œuvre des solutions basées sur WordPress pour plusieurs sites. Mon expertise s'est concentrée sur la création d'interfaces utilisateur attrayantes et fonctionnelles, en veillant à ce que les utilisateurs aient une expérience optimale lors de la navigation sur les sites. De plus, j'ai acquis une expérience dans le développement backend en utilisant PHP, particulièrement dans des situations où des fonctionnalités spécifiques nécessitaient une interaction avec la base de données. Cette polyvalence m'a permis de jouer un rôle complet dans le processus de développement, en assurant la cohérence entre le frontend et le backend pour offrir des sites web robustes et performants.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="blueLogic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Bluelogic</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Pendant mon engagement dans la conception d'un site, j'ai apporté une contribution significative en utilisant PrestaShop pour la partie frontend et en développant le backend avec Symfony en backend. Cette approche m'a permis de participer activement à la création complète du site, en optimisant à la fois l'expérience utilisateur et les fonctionnalités côté serveur.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section id="competencesPro" class="section skills-part">
    <div class="section-title">
        <?= formatageTitre("Mes compétences développement 👨‍💻") ?>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <p class="competencesDescription">Toutes ces connaissances ont été acquises de différentes façons. Elles ont été acquises durant mes études en <b>BTS SIO</b> et d'autres par ma propre initiative en essayant de mettre en place des solutions. J’ai également relevé les défis organisés, ce qui permet d’effectuer des recherches et aller encore plus loin.</p>
                    <br>
		        </div>
            </div>
            
            <div class="col-6 col-sm-4 col-lg-2" data-aos="fade-up">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/html.png" alt="html"></div>
                    <div class="skills-name">
                        <p>html</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/css.png" alt="css"></div>
                        <div class="skills-name">
                            <p>css</p>
                        </div>
                    </div>
                </div>
                
            <div class="col-6 col-sm-4 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/javascript.png" alt="javascript"></div>
                    <div class="skills-name">
                        <p>javascript</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/bootstrap.png" alt="php"></div>
                    <div class="skills-name">
                        <p>bootstrap</p>
                    </div>
                </div>
            </div>
			<div class="col-6 col-sm-4 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/php.png" alt="php"></div>
                    <div class="skills-name">
                        <p>php</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/node.png" alt="php"></div>
                    <div class="skills-name">
                        <p>node.js</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="outilsLogiciel" class="section skills-part">
    <div class="section-title">
        <?= formatageTitre("Mes outils / logiciel ⚙️") ?>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <p class="competencesDescription">Toutes ces connaissances ont été acquises de différentes façons. Elles ont été acquises durant mes études en <b>BTS SIO</b> et d'autres par ma propre initiative en essayant de mettre en place des solutions. J’ai également relevé les défis organisés, ce qui permet d’effectuer des recherches et aller encore plus loin.</p>
                    <br>
		        </div>
            </div>
            
            <div class="col-6 col-sm-4 col-lg-3" data-aos="fade-up">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/vscode.png" alt="visualStudio"></div>
                    <div class="skills-name">
                        <p>Visual Studio</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/netbeans.png" alt="netbeans"></div>
                        <div class="skills-name">
                            <p>netbeans</p>
                        </div>
                    </div>
                </div>
                
            <div class="col-6 col-sm-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/github.png" alt="github"></div>
                    <div class="skills-name">
                        <p><a class="lienOutil" href="https://github.com/Akeops" target="_blank">github</a></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="skills-card">
                    <div class="skills-img"><img src="../source/images/skills/webstorm.png" alt="webstorm"></div>
                    <div class="skills-name">
                        <p>webstorm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
		


<!-- Card -->
<section id="mesProjets">
    <div class="section-title">
        <?= formatageTitre("Mes projets 🚧") ?>
    </div>
    <div class="container">
        <div class="container d-flex justify-content-center">
            <div class="row text text-center justify-content-center">
                <div class="col-lg-12">
                    <div>
                        <p class="competencesDescription">En parallèle de mes études en Bachelor, je consacre mon temps personnel à la réalisation de projets, cherchant activement à acquérir et développer de nouvelles compétences. Mon initiative personnelle, combinée à ma participation à des défis, enrichit ma formation et me pousse à explorer des solutions innovantes.</p>
                        <br>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-lg cardProjet">
                        <img src="../source/images/projetPortfolio.png" class="card-img-top" alt="portfolio">
                        <div class="card-body">
                            <h5 class="card-title"><b>Portfolio</b></h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="m-3 rounded-4 btn monBouton" data-bs-toggle="modal" data-bs-target="#projet1">Détails</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
   
    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="projet1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Portfolio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/projetPortfolio.png" class="card-img-top" alt="portfolio">
                    <p class="texteProjet">C'est avec enthousiasme que je vous présente mon tout premier projet : mon propre portfolio. J'ai décidé de commencer par la création de mon site personnel, car je ressens le besoin de mettre en avant, dans un futur proche, les compétences que j'acquerrai et les projets dont je serai fier.<br><br>

                    Ce portfolio représente non seulement un moyen de partager mes réalisations, mais aussi un voyage à travers mes compétences en développement web. J'ai élaboré ce site en utilisant principalement Bootstrap, un framework qui a grandement facilité la mise en place de la structure de la page. Pour ajouter ma touche personnelle, j'ai également intégré du CSS personnalisé, permettant ainsi de refléter ma créativité et mon style.<br><br>

                    Je suis fier du résultat obtenu, mais je considère ce portfolio comme une première étape. Au fil du temps, je compte l'enrichir avec de nouveaux projets passionnants et des compétences affinées. C'est le début d'un parcours où je partagerai mes découvertes et mes accomplissements, tout en continuant à évoluer dans le monde captivant du développement web.<br><br>

                    Merci de prendre le temps de découvrir mon travail. Je suis impatient de partager davantage avec vous au fur et à mesure que mon parcours se développe.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Intégration du jquery pour que le main.js fonctionne -->
<script src="../js/main.js"></script>

<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>

