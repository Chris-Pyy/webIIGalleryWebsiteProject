<nav>
    <div class="nav-wrapper blue">
        <a href="#!" class="brand-logo center"><img src="https://res.cloudinary.com/taylor-amy/image/upload/v1636390496/Web%202%20asg%202/logo.png" alt="logo" class="logo"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">

            <?php
            $url= $_SERVER['REQUEST_URI'];    
            if (strpos($url, 'about') !== false) {
                echo '<li><a href="/">Home</a></li>';
                echo '<li class="active"><a href="/about.php">About</a></li>';
            } else {
                echo '<li class="active"><a href="/" >Home</a></li>';
                echo '<li><a href="/about.php">About</a></li>';
            }  

            ?>

      </ul>
    </div>
</nav>
        


<!-- <nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </div>
</nav> -->

<ul class="sidenav" id="mobile-demo">
    <li><a href="/">Home</a></li>
    <li><a href="/about.php">About</a></li>

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