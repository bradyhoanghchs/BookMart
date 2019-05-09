<?php
if (isset($_POST['submit'])) {
    $mailFrom = "bradyhoanghchs@gmail.com";
    $mailTo = $_POST ['mail'];
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from BookMart.";

    mail($mailTo, $txt, $headers)
    header("Location: index.php?mailsend");


}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <header>
         <div class="container">
             <div id="branding">
                 <h1><span class="highlight">BookMart</span></h1>

             </div>
             <nav>
                 <ul>
                     <li class="current"><a href="index.html">Home</a></li>
                     <li><a href="products.html">Books</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="search.html">Search</a></li>
                 </ul>
             </nav>
         </div>   
        </header>
        <section id="showcase">
            <div class="container">
                <h1>BookMart</h1>
                <p>Bookstore for any reader.</p>
            </div>
        </section>
       <h1> hello</h1>
        <section id="main">
                <div class="container">
                  <article id="intro">
                    <h1 class="page-title">Welcome to BookMart!</h1>
                    <p>If you are looking for books at cheap prices, you've come to the right place! The books we carry range from fiction stories to nonfiction textbooks.
                    </p>
        </section>
    <footer>
        <p>©BookMart</p>
    </footer>
    </body>
</html>