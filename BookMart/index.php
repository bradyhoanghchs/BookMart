 <?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Home</title>
        <link rel="stylesheet" href="style1.css">

    </head>
    <body>
        <header>
         <div class="container">
             <div id="branding">
                 <h1><span class="highlight">BookMart</span></h1>

             </div>
             <nav>
                 <ul>
                     <li class="current"><a href="index.php">Home</a></li>
                     <li><a href="products.php">Books</a></li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="search.php">Search</a></li>
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
        <Section id= "Ask">
            <div class="container">
            <h1>Search Bar </h1>
            <form action="search.php" id="contact-form" method="POST">
                <input type="text" name="search" placeholder ="Search">
                <button type="submit" name="submit-search" class="button_1">Search</button>
            </form>
           
        </Section>
        <section id="main">
                <div class="container">
                  <article id="intro">
                    <h1 class="page-title">Welcome to BookMart!</h1>
                    <p>If you are looking for books at cheap prices, you've come to the right place! The books we carry range from fiction stories to nonfiction textbooks. Feel free to stop by and read!
                    </p>
                </div>
                <div class="row">
                    <div class="column">
                      <img src="https://i.pinimg.com/originals/66/e2/7c/66e27c2d4e57b720e742015a168638bd.jpg" style="width:100%">
                    </div>
                    <div class="column">
                      <img src="https://readingagency.org.uk/news/Discussing%20Reading%20Well%20Books%20on%20Prescription%20titles%20%28copyright%20The%20Reading%20Agency%29.jpg" style="width:100%">
                    </div>
                    <div class="column">
                      <img src="http://hepl.lib.in.us/wp-content/uploads/2018/01/MultiGen-familyiStock.jpg" style="width:100%">
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