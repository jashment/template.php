<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Cabot Cruises</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" media="screen" href="scss/styles.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <link href="slick/slick.css" rel="stylesheet" />
  <link href="slick/slick-theme.css" rel="stylesheet" />
</head>

<body>
  <header>
    <div id="logo">
      <img src="images/logo.png" srcset="images/logo1x.png 1x, images/logo2x.png 2x, images/logo3x.png 3x" alt="logo" />
    </div>
    <div>
      <p><a href="tel:1-800-234-5678">1-800-234-5678</a></p>
    </div>
  </header>

  <nav>
    <div style="max-width: 1200px; margin: auto; height: 45px;">
      <button id="hamburgerBtn"></button>
      <ul id="primaryNav" class="closed">
        <li><a href="index.php">HOME</a></li>
        <li>
          <a href="cruise.php">CRUISES</a>
        </li>
        <li>
          <a href="#">AGENTS</a>
          <ul>
            <li><a href="/agent1.php">Agent 1</a></li>
            <li><a href="/agent2.php">Agent 2</a></li>
          </ul>
        </li>
        <li><a href="/book.php">BOOK</a></li>
      </ul>
      <ul id="secondaryNav">
        <li id="searchBar">
          <form><input type="search" placeholder="Search" name="search" /><button type="submit" class="submit"><i
                class="fa fa-search"></i></button></form>
        </li>
      </ul>
    </div>
  </nav>