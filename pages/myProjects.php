<?php
    require_once realpath(__DIR__ . '/../' . 'includes/header.php');
?>
<p class="projectsTitle">Projects:</p>
<section class="projectCardsSection">
    <div class="projectsCard">
        <img src="<?= IMGS_PATH . 'cover 1.png' ?>" alt="" class="ProjectsCardImg">
        <div class="cardHeader">
            <p class="ProjectsCardText">Minimal Red</p>
            <button class="greenTagSmall"><p class="greenCircleSmall"></p>Completed</button>
        </div>
        <p class="cardInfo">This project was made in CSS using obsidian variables.</p>
        <button class="projectsCardButton"><a href="<?= PAGES_PATH . "minimalRed.php" ?>">See More here</a></button>
    </div>
</section>

<?php
    require_once realpath(__DIR__ . '/../' . 'includes/footer.php');
?>