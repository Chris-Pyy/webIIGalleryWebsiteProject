<div class='header'>
    <div class="topnav" id="myTopnav">
        <?php 
            $url= $_SERVER['REQUEST_URI'];    
            if (strpos($url, 'about') !== false) {
                echo '<a href="/">Home</a>';
                echo '<a href="/about.php" class="active">About</a>';
            } else {
                echo '<a href="/" class="active">Home</a>';
                echo '<a href="/about.php">About</a>';
            }  

        ?>
        <img src="https://res.cloudinary.com/taylor-amy/image/upload/v1636390496/Web%202%20asg%202/logo.png" alt="logo" class="logo">
        <a href="javascript:void(0);" class="icon" id='hamburgerMenu'>
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>