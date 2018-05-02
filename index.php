<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php
        include ('./includes/variables.php');
    ?>

    <?php
    // consntant
    ?>

    <?php
        echo title;
    ?>
    <link rel="stylesheet" href="src/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="src/css/main.css" />
</head>
    <body>

        <div align="center">
        <?php echo "Alpha version 0,2 "?>
        </div>
            <div class="imglist" style="max-width: 100%;">

                <?php
                    //variable
                 ?>

            <div class="block1">
                <a href="<?php echo "https://source.unsplash.com/juHayWuaaoQ/1500x1000"?>" data-fancybox="images">
                <?php
                echo "$image1";
                ?>
                </a>
            </div>

            <div class="block2">
                <a href="<?php echo "https://source.unsplash.com/eWFdaPRFjwE/1500x1000"?>" data-fancybox="images">
                <?php
                echo "$image2";
                ?>
            </a>
            </div>

            <div class="block3">
            <a href="<?php echo "https://source.unsplash.com/i2KibvLYjqk/1500x1000"?>" data-fancybox="images">
                <?php
                echo "$image3";
                ?>
            </a>
            </div>

            <div class="block4">
            <a href="<?php echo "https://source.unsplash.com/RFgO9B_OR4g/1500x1000"?>" data-fancybox="images">
                <?php
                echo "$image4";
                ?>
            </a>
            </div>

            <div class="block5">
            <a href="<?php echo "https://source.unsplash.com/7bwQXzbF6KE/1500x1000"?>" data-fancybox="images">
                <?php
                echo "$image5";
                ?>
            </a>
            </div>

            <div class="block6">
            <a href="<?php echo "https://source.unsplash.com/NhU0nUR7920/1500x1000"?>" data-fancybox="images">
                <?php
                echo "$image6";
                ?>
            </a>
            </div>

             <div class="block7">
                <a href="<?php echo "https://source.unsplash.com/random/1500x1000"?>" data-fancybox="images">
                    <?php
                    echo "$image7";
                    ?>
                </a>
            </div>

            <div class="block8">
                <a href="<?php echo "https://source.unsplash.com/random/1500x1000"?>" data-fancybox="images">
                    <?php
                    echo "$image8";
                    ?>
                </a>
            </div>

            <div class="block9">
                <a href="<?php echo "https://unsplash.com/random/1500x1000"?>" data-fancybox="images">
                    <?php
                    echo "$image9";
                    ?>
                </a>
            </div>
           </div>
        
            <hr>

        <div class="footer" align="right">
            <?php echo "Powered by Notikys &#169"?>
        </div>
        <script src="src/js/jQuery.js"></script>
        <script src="src/js/jquery.fancybox.js"></script>
    </body>
</html>