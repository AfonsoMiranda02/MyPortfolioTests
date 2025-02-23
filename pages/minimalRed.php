<?php
    require_once realpath(__DIR__ . '/../' . 'includes/header.php');
?>

<section class="titlePos">
    <p class="PjTitle">MinimalRed - <a href="https://obsidian.md/" class="PjTitleText">Obsidian</a> Theme V-1.0.0</p>
    <button class="greenTagBig"><p class="greenCircleBig"></p>Completed</button>
</section>
<section class="imgPos">
    <figure class="imgSectionSize">
        <img src="<?= IMGS_PATH . 'cover1Big.png' ?>" alt="" class="imgSize">
        <figcaption class="capText">Minimal Red Apperence in the 1.0.0 version</figcaption>
    </figure>
</section>
<section class="infoPos">
    <article class="articlePos">
        <h2 class="infoTitle">What is MinimalRed ?</h2>
        <p class="infoText">MinimalRed is a minimalistic theme for Obsidian, a note-taking app. It is designed to be simple and easy to read, with a focus on the content of your notes. The theme uses a red color scheme, with a dark background and light text. It is designed to be easy on the eyes, with a clean and uncluttered appearance.</p>
    </article>
    <article class="curArticlePos">
        <h2 class="infoTitle">Some Curiosities about my Theme</h2>
        <ol class="listPos">
            <li class="infoText">This theme is heavily inspired by the laravel site color palette</li>
            <li class="infoText">I did the version 1.0.0 Beta in one afternoon using css and variables</li>
            <li class="infoText">This theme was offialy relased in 09/02/2025</li>
            <li class="infoText">In this moment (23/02/2025) the theme has 126 downloads</li>
            <li class="infoText">The base code for my theme comes from <a href="https://github.com/sspaeti/obsidian_rose_pine">Rosé Pine</a> Theme</li>
        </ol>
    </article>
    <div class="infoDropDown">
        <details class="infoDetails">
            <summary>Requirements for the next version</summary>
            <li class="detailsText">Modals modifications like the color and the radious</li>
            <li class="detailsText">Add radious to some parts including the tabs and the side bar</li>
            <li class="detailsText">Fix some graph hover colors</li>
            <li class="detailsText">Fix h1,h2,h3,...,bold,italic,... colors</li>
            <li class="detailsText">And more check my gitHub repository for more.</li>
        </details>
    </div>
</section>
<section class="gitSectionPos">
    <p class="gitTitle">If you want to see more Checkout my Repository or see the Source Code</p>
    <div class="gitRepPos">
        <a href="https://github.com/AfonsoMiranda02/MinimalRed-Obsidian-Theme">
            <img src="https://github-readme-stats.vercel.app/api/pin/?username=AfonsoMiranda02&repo=MinimalRed-Obsidian-Theme&theme=dark" alt="GitHub Repo Card">
        </a>
        <div class="gitStarPos">
            <p class="starsText">Stars:</p>
            <iframe src="https://ghbtns.com/github-btn.html?user=AfonsoMiranda02&repo=MinimalRed-Obsidian-Theme&type=star&count=true" 
            frameborder="0" 
            scrolling="0" 
            width="170" 
            height="20">
            </iframe>
        </div>
    </div>
</section>

<?php
    require_once realpath(__DIR__ . '/../' . 'includes/footer.php');
?>