<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Books</title>
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
                                 All Books
                                </p>
                    </section>
                    <div class="container">
                    <div class="box">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/92/THE_BOOK_cover_image.png" alt="The Book">
                        <h3>The Book </h3>
                            <p>Author: M.Clifford</p>
                </div>
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
                    </div>
                        <div class="container">  
                        
                    
                    <div class="box">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Portnoy_s_Complaint.jpg" alt="Portnoy's Complaint">
                            <h3> Portnoy's Complaint</h3>
                            <p> Author: Phillip Roth</p>
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
                                            <img src="https://i.ibb.co/dkVz7sB/bookcover2.png" alt="The Life and Death of Nicky Fatome">
                                            <h3> The Life and Death of Nicky Fatome</h3>
                                            <p>Author: Jimmy Kaufman</p>
                                            </div>
                                            
                                            <div class="box">
                                                <img src="https://i.ibb.co/8zFsYK5/bookcover3.png2" alt="Sound of Sleeping Planets">
                                                <h3> Sound of Sleeping Planets</h3>
                                                <p>Author: Takehiro Kanegi</p>
                                                </div>
                                            <div class="box">
                                                <img src="https://i.ibb.co/JFr9RMp/bookcover4.png" alt="The Last Sea Spray">
                                                <h3> The Last Sea Spray</h3>
                                                <p>Author: Alexander Aronowitz</p>
                                                </div>
                                            </div>
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
                                                <img src="https://99designs-blog.imgix.net/wp-content/uploads/2017/02/attachment_74814572-e1486420174369.jpg?auto=format&q=60&fit=max&w=930" alt="Enceladus">
                                                <h3>Enceladus</h3>
                                                <p>Author: Brandon Q. Morris  </p>
                                                </div>
                                            <div class="box">
                                            <img src="https://i.pinimg.com/736x/98/4d/d1/984dd115bbccc337f195ae4ccc8f9653--kid-books-childrens-books.jpg" alt="Either of You Boys Want a Coke?">
                                            <h3> Either of You Boys Want a Coke?</h3>
                                            <p>Author: Ann Wald </p>
                                            </div>
                                            <div class="box">
                                                <img src="https://images-na.ssl-images-amazon.com/images/I/81rkFbeU8fL.jpg" alt="Daniel Boone: The Life and Legend of an American Pioneer">
                                                <h3>Daniel Boone: The Life and Legend of an American Pioneer</h3>
                                                <p>Author: John Mack Faragher </p>
                                                </div>
                                            </div>
                                            <div class="container">  
                                            <div class="box">
                                                <img src="https://about.canva.com/wp-content/uploads/sites/3/2015/01/art_bookcover.png" alt="The World Of Abstract Art">
                                                <h3>The World Of Abstract Art</h3>
                                                <p>Author: Emily Robbins  </p>
                                                </div>
                                                <div class="box">
                                                    <img src="https://vignette.wikia.nocookie.net/goosebumps/images/d/dd/Chicken_Chicken.jpg/revision/latest?cb=20100414161121" alt="Chicken Chicken">
                                                    <h3>Chicken Chicken</h3>
                                                    <p>Author: R. L. Stine  </p>
                                                    </div>
                                            <div class="box">
                                            <img src="https://images-na.ssl-images-amazon.com/images/I/71Mt3VAXMTL.jpg" alt="King">
                                                <h3>King</h3>
                                                <p>Author: Ho Che Anderson  </p>
                                                </div>
                                            </div>
                                        <div class="container">  
                                            <div class="box">
                                            <img src="https://static1.squarespace.com/static/513a230ae4b0f3422dd7d5ad/51704e68e4b054b6c22c2cb6/5b7e06684fa51aed6f527686/1534986083034/premade-science-fiction-satellite-cover-design-for-indie-authors.jpg" alt="Sky Nation">
                                            <h3>Sky Nation</h3>
                                            <p>Author: Brian Lewis  </p>
                                            </div>
                                            <div class="box">
                                                <img src="https://i.pinimg.com/originals/94/a4/22/94a422be82cf48650ce31d5764e668bc.jpg" alt="The Forest Where Gravity Didn't Affect Cats">
                                                <h3>The Forest Where Gravity Didn't Affect Cats</h3>
                                                <p>Author: Franklin W. Dixon  </p>
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