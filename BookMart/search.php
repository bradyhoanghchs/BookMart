<?php
    include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Search</title>
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
                     <li><a href="about.php">About</a></li>
                     <li class="current"><a href="search.php">Search</a></li>
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
        <form>
         <div class="articles-container">
            <?php 
                if (isset($_POST['submit-search'])) {
                $search= mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_author LIKE '%$search%' OR
                a_genre LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                
                echo "Number of Results: ".$queryResult."!";

                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class ='articles-box'>
                        <h3>Title: ".$row['a_title']."</h3>
                            <h3>Author: ".$row['a_author']."</h3>
                            <h3>Genre: ".$row['a_genre']."</h3>
                            </div>";
                        }
                    } else {
                        echo " There are no results matching your search!";
                    }
            }
    ?>
</div>
</body>
        <footer>
            <div class="container">
              <p>BookMart™ 4523  Shadowmar Drive 202-555-0128</p>
            </div>
          </footer>
</html>			