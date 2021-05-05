<?php
  $navLinks = ["home", "resume", "gallery"];
  $currentPage = basename($_SERVER['SCRIPT_NAME'],".php");

  function outputNavs($navLinks, $currentPage){
  $output = "";
  foreach ($navLinks as $navLink) {
    $class = "";
    $href = $navLink;
    if($navLink == "home") $href = "index";
    if($href == $currentPage) $class = "active";
    $output .= "<li><a href='{$href}.php' class='{$class}'>" .  ucfirst($navLink) . "</a></li>";
  }
  echo $output;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>
    <?php
      if($currentPage == "index") echo "Home";
      else echo ucfirst($currentPage);
    ?>
  </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;700&family=Merriweather&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="gallery-style.css">
  <link rel="stylesheet" href="resume-style.css">
</head>
<body>
  <div class="main-wrapper">
    <div class="container">
      <header>
        <div class="logo">
          <a href="index.php"><img img class="logo" src="images/logo1.png" alt="btc logo" width="150px" alt="My logo"></a>
        </div>
        <div class="main-nav">
          <nav>
            <ul>
              <?php outputNavs($navLinks, $currentPage); ?>
            </ul>
          </nav>
        </div> <!-- end of main-nav-->
      </header> <!-- end of header-->
    </div> <!-- end of container-->