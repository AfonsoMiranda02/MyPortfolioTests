<?php
    require_once 'includes/header.php';
?>

<p class="introP">Hello I am Afonso Miranda:</p><mark class="introM">Programer/Designer</mark>
<div class="socialsPos">

    <p class="FollowText">Follow me on:</p>
    <a href="#"><img src="imgs/instagram.png" alt=""></a>
    <a href="#"><img src="imgs/dribbble.png" alt=""></a>
    <a href="#"><img src="imgs/twitter.png" alt=""></a>
    <a href="#"><img src="imgs/linkdin.png" alt=""></a>
</div>
<section class="sectionPos">
    <div class="cardsTitle">
       Some of my skills include:
    </div>
    <div class="cards">
        <div class="card">
            <img src="<?= IMGS_PATH . 'bx_code-block.png' ?>" alt="" class="cardImg">
            <p class="cardText">Web Development</p>
            <p class="cardInfo">I mainly work with backend and have some experience in PHP, JavaScript,CSS... I have experience with some frameworks</p>
            <button class="cardButton"><a href="<?= PAGES_PATH . "myProjects.php" ?>">See More here</a></button>
        </div>
        <div class="card">
            <img src="<?= IMGS_PATH . 'devicon_figma.png' ?>" alt="" class="cardImg">
            <p class="cardText">Graphic Design</p>
            <p class="cardInfo">I have some experience with UI and UX, I have experience using figma and frontend frameworks but mainly work with backend</p>
            <button class="cardButton"><a href="<?= PAGES_PATH . "myProjects.php" ?>">See More here</a></button>
        </div>
        <div class="card">
            <img src="<?= IMGS_PATH . 'database.png' ?>" alt="" class="cardImg">
            <p class="cardText">Database</p>
            <p class="cardInfo">I have some experience in database analisys, building diagrams and building the database structure.</p>
            <button class="cardButton"><a href="<?= PAGES_PATH . "myProjects.php" ?>">See More here</a></button>
        </div>
    </div>
</section>
<section class="projectSectionPos">
    <p class="projectTitle">If you want to check out my projects</p>
    <div class="projectsCardsPos">
        <div class="projectsCard">
            <img src="<?= IMGS_PATH . 'cover 1.png' ?>" alt="" class="ProjectsCardImg">
            <div class="cardHeader">
                <p class="ProjectsCardText">Minimal Red</p>
                <button class="greenTagSmall"><p class="greenCircleSmall"></p>Completed</button>
            </div>
            <p class="cardInfo">This project was made in CSS using obsidian variables.</p>
            <button class="projectsCardButton"><a href="<?= PAGES_PATH . "minimalRed.php" ?>">See More here</a></button>
        </div>
    </div>
</section>
<?php
    require_once "includes/footer.php";
?>