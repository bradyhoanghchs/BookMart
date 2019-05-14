<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>About</title>
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
                     <li><a href="products.php">Books</a></li>
                     <li class="current"><a href="about.php">About</a></li>
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
        <section id="main">
            <div class="container">
              <article id="main-col">
                <h1 class="page-title">About Us</h1>
                <p>
                 We first opened BookMart on April 1st, 1800 and have been opened since. Our business is a locally owned store and always will be. We work on the policy that the customer is always right so we
                 would be glad to have you!
                </p>
              </article>
      
              <aside id="sidebar">
                  <h3>What We Do</h3>
                  <p>Our business's primary goal is to buy and sell books. The books we have are all bought and sold by other customers or readers. We strive to get readers of all ages to read the amazing world of literature. </p>
              </aside>
              <aside id="sidebar2">
                <h3>Contact</h3>
                <p>Phone Number: 202-555-0128
                    
                </p>
                <p> Address: 4523  Shadowmar Drive</p>
                <p> Email: bookstore@BookMart.com</p>
            </aside>
            </div>
      

        </section>
        <footer>
            <div class="container">
              <p>BookMart™ 4523  Shadowmar Drive 202-555-0128</p>
            </div>
          </footer>
    </body>
</html>