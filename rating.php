<?php
    require "function.php"; //memanggil database
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Rating</title>
    <link href="css/st.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>

<form method="post">
    <div class="container">
        <div class="star-widget">
            <input type="radio" name="rating" id="rating5" class="fa fa-star" value="5">
            <label for="rating5" class="fa fa-star"></label>
            <input type="radio" name="rating" id="rating4" class="fa fa-star" value="4">
            <label for="rating4" class="fa fa-star"></label>
            <input type="radio" name="rating" id="rating3" class="fa fa-star" value="3">
            <label for="rating3" class="fa fa-star"></label>
            <input type="radio" name="rating" id="rating2" class="fa fa-star" value="2">
            <label for="rating2" class="fa fa-star"></label>
            <input type="radio" name="rating" id="rating1" class="fa fa-star" value="1">
            <label for="rating1" class="fa fa-star"></label>
                <header></header>
                <div class="textarea">
                </div>
                <div class="btn">
                    <button type="submit" name="rat">post</button>
                </div>
                
    
            
        </div>
    </div>
    </form>
   
</body>
</html>