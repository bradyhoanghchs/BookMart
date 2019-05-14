<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Comedy Books</title>
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
                                 Comedy Books
                                </p>
                    </section>
                    <div class="container">
                    <div class="box">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/92/THE_BOOK_cover_image.png" alt="The Book">
                        <h3>The Book </h3>
                            <p>Author: M.Clifford</p>
                </div>
                <div class="box">
                    <img src="https://cdn.ebaumsworld.com/mediaFiles/picture/718392/85219589.jpg" alt="And I Said: Wrestle Me Nude if You're a Man">
                <h3>And I Said: Wrestle Me Nude if You're a Man</h3>
                <p> Author: Phyllis Reynolds Naylor</p>
            </div>
            <div class="box">
                <img src="https://cdn.pastemagazine.com/www/system/images/photo_albums/paperback-paradise/large/paperback-paradise-1.jpg?1384968217g" alt="Grandpa Voted for Trump">
                <h3> Grandpa Voted for Trump</h3>
                <p> Author: Robert Kimmel Smith</p>
                </div>
                    </div>
                        <div class="container">  
                            <div class="box">
                                <img src="https://i.thenile.io/r1000/9781499128307.jpg?r=5c78d8f68a778" alt="How To Make Money In Your Spare Time">
                                <h3> How To Make Money In Your Spare Time</h3>
                                <p>Author's Pen Name: 673126  </p>
                                </div>
                    
                            <div class="box">
                                <img src="https://i.pinimg.com/736x/98/4d/d1/984dd115bbccc337f195ae4ccc8f9653--kid-books-childrens-books.jpg" alt="Either of You Boys Want a Coke?">
                                <h3> Either of You Boys Want a Coke?</h3>
                                <p>Author: Ann Wald </p>
                                </div>
                                <div class="box">
                                    <img src="https://vignette.wikia.nocookie.net/goosebumps/images/d/dd/Chicken_Chicken.jpg/revision/latest?cb=20100414161121" alt="Chicken Chicken">
                                    <h3>Chicken Chicken</h3>
                                    <p>Author: R. L. Stine  </p>
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