<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Science Fiction Books</title>
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
                                 Science Fiction Books
                                </p>
                    </section>
                    <div class="container">
                        <div class="box">
                            <img src="https://i.ibb.co/jM0j6fX/bookcover1.png" alt="The Fourth Wind">
                            <h3> The Fourth Wind</h3>
                            <p>Author: Quinn Whitfield</p>
                </div>
                <div class="box">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Planet_of_the_Apes_book_cover.jpg" alt="Planet of the Apes">
                    <h3>Planet of the Apes</h3>
                    <p>Author: Pierre Boulle</p>
                    </div>
                    <div class="box">
                        <img src="https://i.ibb.co/8zFsYK5/bookcover3.png2" alt="Sound of Sleeping Planets">
                        <h3> Sound of Sleeping Planets</h3>
                        <p>Author: Takehiro Kanegi</p>
                        </div>
                    </div>
                        <div class="container">  
                        
                    
                            <div class="box">
                                <img src="https://i.ibb.co/JFr9RMp/bookcover4.png" alt="The Last Sea Spray">
                                <h3> The Last Sea Spray</h3>
                                <p>Author: Alexander Aronowitz</p>
                                </div>
                                <div class="box">
                                    <img src="https://99designs-blog.imgix.net/wp-content/uploads/2017/02/attachment_74814572-e1486420174369.jpg?auto=format&q=60&fit=max&w=930" alt="Enceladus">
                                    <h3>Enceladus</h3>
                                    <p>Author: Brandon Q. Morris  </p>
                                    </div>
                                    <div class="box">
                                        <img src="https://static1.squarespace.com/static/513a230ae4b0f3422dd7d5ad/51704e68e4b054b6c22c2cb6/5b7e06684fa51aed6f527686/1534986083034/premade-science-fiction-satellite-cover-design-for-indie-authors.jpg" alt="Sky Nation">
                                        <h3>Sky Nation</h3>
                                        <p>Author: Brian Lewis  </p>
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