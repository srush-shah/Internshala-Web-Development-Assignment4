<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['email'])) {
                ?>
                    <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                    <li><a href="setting.html"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                    <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php
                    } else {
                ?>
                    <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
