<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php
    //constant
    ?>
    <?php
    define('title', '<title>Gallery</title>');
    echo title;
    ?>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
</head>
<body>
<?php echo "Alpha version "?>
<p class="imglist" style="max-width: 1000px;">
    <?php
    //variable
    ?>
    <a href="<?php echo "https://source.unsplash.com/juHayWuaaoQ/1500x1000"?>" data-fancybox="images">
        <?php
        $image1 = '<img src="https://source.unsplash.com/juHayWuaaoQ/240x160"></a>';
        echo "$image1";
        ?>
        <a href="<?php echo "https://source.unsplash.com/eWFdaPRFjwE/1500x1000"?>" data-fancybox="images">
            <?php
            $image2 = '<img src="https://source.unsplash.com/eWFdaPRFjwE/240x160"></a>';
            echo "$image2";
            ?>
        </a>

        <a href="<?php echo "https://source.unsplash.com/i2KibvLYjqk/1500x1000"?>" data-fancybox="images">
            <?php
            $image3 = '<img src="https://source.unsplash.com/i2KibvLYjqk/240x160"></a>';
            echo "$image3";
            ?>
        </a>

        <a href="<?php echo "https://source.unsplash.com/RFgO9B_OR4g/1500x1000"?>" data-fancybox="images">
            <?php
            $image4 = '<img src="https://source.unsplash.com/RFgO9B_OR4g/240x160"></a>';
            echo "$image4";
            ?>
        </a>

        <a href="<?php echo "https://source.unsplash.com/7bwQXzbF6KE/1500x1000"?>" data-fancybox="images">
            <?php
            $image5 = '<img src="https://source.unsplash.com/7bwQXzbF6KE/240x160"></a>';
            echo "$image5";
            ?>
        </a>

        <a href="<?php echo "https://source.unsplash.com/NhU0nUR7920/1500x1000"?>" data-fancybox="images">
            <?php
            $image6 = '<img src="https://source.unsplash.com/NhU0nUR7920/240x160"></a>';
            echo "$image6";
            ?>
        </a>
</p>
<p >
    Powered by Notikys &#169
</p>
</body>
</html>