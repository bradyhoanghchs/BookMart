<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Educational Books</title>
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
                     <li><a href="index.php">Home</a></li>
                     <li class="current"><a href="products.php">Books</a></li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="search.php">Search</a></li>
                 </ul>
             </nav>
         </div>   
        </header>
        <Section id= "Ask">
            <div class="container">
            <h1>Search Bar </h1>
            <form action="search.php" id="contact-form" method="POST">
                <input type="text" name="search" placeholder ="Search">
                <button type="submit" name="submit-search" class="button_1">Search</button>
            </form>
            </div>
        </Section>
        <div class="dropdown">
            <button class="dropbtn">Genres</button>
            <div class="dropdown-content">
              <a href="educational.php">Educational</a>
              <a href="satire.php">Comedy</a>
              <a href="sf.php">Science Fiction</a>
              <a href="nf.php">Biographies</a>
              <a href="products.php">All Books</a>
            </div>
            
          </div>
        <section id="boxes">
            <div class="container">
                    <section id="main">
                            <div class="container">
                              <article id="productshead">
                                <h1 class="page-title">Books</h1>
                                <p>
                                 Educational Books
                                </p>
                    </section>
                    <div class="container">
                        <div class="box">
                            <img src="https://i.thenile.io/r1000/9781499128307.jpg?r=5c78d8f68a778" alt="How To Make Money In Your Spare Time">
                            <h3> How To Make Money In Your Spare Time</h3>
                            <p>Author's Pen Name: 673126  </p>
                        </div>
                            <div class="box">
                                <img src="https://static.boredpanda.com/blog/wp-content/uuuploads/worst-book-covers-titles/worst-book-covers-titles-27.jpg" alt="Old Tractors and the Men Who Love Them">
                                <h3> Old Tractors and the Men Who Love Them</h3>
                                <p>Author: Rogers Welsch  </p>
                                </div>
                            <div class="box">
                                    <img src="https://www.seenox.org/wp-content/uploads/2014/03/Funny-Worst-Book-Titles-And-Covers-25.jpg" alt="Anybody Can Be Cool ...But Awesome Takes Practice">
                                    <h3>Anybody Can Be Cool ...But Awesome Takes Practice </h3>
                                    <p>Author: Lorraine Peterson </p>
                                    </div>
</div>
                            <div class="container">  
                                <div class="box">
                                <img src="https://99designs-blog.imgix.net/wp-content/uploads/2017/02/attachment_74814572-e1486420174369.jpg?auto=format&q=60&fit=max&w=930" alt="How To Make Money In Your Spare Time">
                                <h3> How To Make Money In Your Spare Time</h3>
                                <p>Author's Pen Name: 673126  </p>
                                </div>
                                <div class="box">
                                    <img src="https://about.canva.com/wp-content/uploads/sites/3/2015/01/art_bookcover.png" alt="The World Of Abstract Art">
                                    <h3>The World Of Abstract Art</h3>
                                    <p>Author: Emily Robbins  </p>
                                    </div>
                                    <div class="box">
                                        <img src="https://images-na.ssl-images-amazon.com/images/I/81PuZCZsPrL.jpg" alt="How to Talk to Your Cat About Gun Safety">
                                        <h3>How to Talk to Your Cat About Gun Safety</h3>
                                        <p>Author: Zachary Auburn</p>
                                        </div>
                                        </div>
                                        <section id="boxes">
                                            <div class="container">
                                                    <section id="main">
                                                            <div class="container">
                                                              <article id="productshead">
                                                                <h1 class="page-title">More Books to be added!</h1>
                                                        
                                                    </section>
            </div>
            </div>
          
        

        </section>
        <footer>
            <div class="container">
              <p>BookMart™ 4523  Shadowmar Drive 202-555-0128</p>
            </div>
          </footer>
    </body>
</html>