<?php
define("PATH_ROOT", realpath(__DIR__. '/../') . DIRECTORY_SEPARATOR);
const CONFIG_PATH = PATH_ROOT . 'config.php';
require_once CONFIG_PATH;

$currentPage = basename($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= CSS_URL."style.css"?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Afonso Miranda</title>
</head>
<body>
    <header>
        <div class="img">
            <img src="<?= IMGS_PATH . 'logo.png' ?>" alt="">
        </div>
        <div class="buttons">
            <button class="buttonHeader  <?= $currentPage == 'index.php' ? 'active' : ' ' ; ?>"><a href="<?= BASE_URL . 'index.php' ?>" class="aHeader <?= $currentPage == 'index.php' ? 'active' : ' ' ; ?>">Home</a></button>
            <button class="buttonHeader  <?= $currentPage == 'aboutMe.php' ? 'active' : ' ' ; ?>" href="#"><a href="#" class="aHeader <?= $currentPage == 'aboutMe.php' ? 'active' : ' ' ; ?>">About Me</a></button>
            <button class="buttonHeader  <?= $currentPage == 'myProjects.php' ? 'active' : ' ' ; ?>" href="#"><a href="<?= PAGES_PATH . "myProjects.php" ?>" class="aHeader <?= $currentPage == 'myProjects.php' ? 'active' : ' ' ; ?>">My Projects</a></button>
        </div>
        <div class="buttonPos">
            <button class="buttonH">
                <a href="#">
                    Contact Me
                </a>
            </button>
        </div>
    </header>
    <main>