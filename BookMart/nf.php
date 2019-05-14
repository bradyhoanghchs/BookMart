<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Biographies</title>
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
                                Biographies
                                </p>
                    </section>
                    <div class="container">
                        <div class="box">
                            <img src="https://i.ibb.co/dkVz7sB/bookcover2.png" alt="The Life and Death of Nicky Fatome">
                            <h3> The Life and Death of Nicky Fatome</h3>
                            <p>Author: Jimmy Kaufman</p>
                            </div>
                            
                            <div class="box">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/81rkFbeU8fL.jpg" alt="Daniel Boone: The Life and Legend of an American Pioneer">
                                <h3>Daniel Boone: The Life and Legend of an American Pioneer</h3>
                                <p>Author: John Mack Faragher </p>
                                </div>
                            <div class="box">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/71Mt3VAXMTL.jpg" alt="King">
                                        <h3>King</h3>
                                        <p>Author: Ho Che Anderson  </p>
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