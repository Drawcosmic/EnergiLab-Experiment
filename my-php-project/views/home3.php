<?php
$heading = "Home3";

require "views/partials/banner.php";
require "views/partials/head.php";
?>

<main>
  <div class="content-container mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="heading"><?= $heading ?></h1>
    <p class="intro-text">Velkommen til Home3-siden! Her kan du finde et flot billede nedenfor.<br> (Knækker på lille skærm)</p>
    <h2 class="pic-text">Her er et stort billede af en bi</h2>
    <img src="images/image1.png" alt="image1" class="image">
  </div>
</main>

<style>
  .content-container {
    text-align: left;
  }

  .heading {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); 
  }

  .intro-text {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
    margin-bottom: 60px;
  }

  .pic-text {
    font-size: 1.8rem;
    margin-top: 30px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #444;
    text-align: center;
  }

  .image {
    width: 100%;
    max-width: 800px;
    height: auto;
    display: block;
    margin: 20px auto;
  }

  @media (max-width: 850px) {
    .image {
      max-width: 400px;
    }
  }
</style>