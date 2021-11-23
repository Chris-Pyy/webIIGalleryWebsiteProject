<nav>
    <div class="nav-wrapper black">
        <a href="#!" class="brand-logo center"><img src="https://res.cloudinary.com/taylor-amy/image/upload/v1636390496/Web%202%20asg%202/logo.png" alt="logo" class="logo"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">

            <?php
            $url= $_SERVER['REQUEST_URI'];  

                echo '<li '.(strlen($url) == 1 ? 'class="active blue"' : '').'><a href="/">Home</a></li>';
                echo '<li '.(strpos($url, 'about.php') ? 'class="active blue"' : '') .'><a href="/about.php">About</a></li>';
                echo '<li '.(strpos($url, 'single-country.php') ? 'class="active blue"' : '') .'><a href="/single-country.php">Country</a></li>';
                echo '<li '.(strpos($url, 'single-photo.php') ? 'class="active blue"' : '') .'><a href="/single-photo.php">Photo</a></li>';
                echo '<li '.(strpos($url, 'registration.php') ? 'class="active blue"' : '') .'><a href="/registration.php">Registration</a></li>';
            ?>

      </ul>
    </div>
</nav>
        


<ul class="sidenav" id="mobile-demo">
    <li><a href="/">Home</a></li>
    <li><a href="/about.php">About</a></li>
    <li><a href="/single-country.php">Country</a></li>
    <li><a href="/single-photo.php">Photo</a></li>
    <li><a href="/registration.php">Registration</a></li>

</ul>




























<!-- <?php
        // $url= $_SERVER['REQUEST_URI'];    
        // if (strpos($url, 'about') !== false) {
        //     echo '<a href="/">Home</a>';
        //     echo '<a href="/about.php" class="active">About</a>';
        // } else {
        //     echo '<a href="/" class="active">Home</a>';
        //     echo '<a href="/about.php">About</a>';
        // }  

        ?>
        <img src="https://res.cloudinary.com/taylor-amy/image/upload/v1636390496/Web%202%20asg%202/logo.png" alt="logo" class="logo">
        <a href="javascript:void(0);" class="icon" id='hamburgerMenu'>
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div> -->