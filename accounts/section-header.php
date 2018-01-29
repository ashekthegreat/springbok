<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper container full-width">
            <a href="index.php" class="brand-logo"><img src="assets/images/logo.png" width="152" height="45"></a>
            <a href="#" data-activates="main-sidenav" class="button-collapse menu-button"><i class="material-icons">menu</i></a>
            <ul id="main-nav" class="right hide-on-med-and-down">
                <li><a href="message.php"><i class="material-icons left">mail</i>Messages</a></li>
                <li><a href="#" class="dropdown-button" data-beloworigin="true" data-alignment="right" data-constrain-width="false" data-activates="dropdown-account"><span class="profile-icon">V</span></a></li>
            </ul>

        </div>
<!--        <div class="sub-nav">
            <div class="container center-align">
                <a href="index.php" target="_blank" class="sp-secondary-text text-lighten-5">Home</a>
                <a href="diary.php" target="_blank" class="sp-secondary-text text-lighten-5">Diary</a>
                <a href="availability.php" target="_blank" class="sp-secondary-text text-lighten-5">Set Availability</a>
                <a href="offers.php" target="_blank" class="sp-secondary-text text-lighten-5">Offers</a>
            </div>
        </div>-->
    </nav>
    <ul class="side-nav fixed sp-secondary lighten-5" id="main-sidenav">
        <li><a href="index.php">Home</a></li>
        <li><a href="diary.php">Diary</a></li>
        <li><a href="availability.php">Set Availability</a></li>
        <li><a href="offers.php">Offers</a></li>
        <li><div class="divider"></div></li>
        <li><a href="message.php">Messages</a></li>
        <li><a href="profile.php">My Account</a></li>
        <li><a href="signin.php">Logout</a></li>
        <li class="help-banner">
            <h5 class="help-header">Need Help?</h5>
            <p class="help-message">Speak to a member of our team</p>
            <p class="help-phone-number">0800 068 4015</p>
        </li>
    </ul>

    <!--<ul id="dropdown-account" class="dropdown-content">
        <li><a href="profile.php">My Account</a></li>
        <li><a href="signin.php">Logout</a></li>
    </ul>-->
    <div id="dropdown-account" class="dropdown-content account-popover">
        <div class="card white sp-secondary-text margin-0">
            <div class="card-content clearfix">
                <div class="profile-info">
                    <h5 class="margin-0">Simone Arnison</h5>
                    <p class="margin-0">simmelrod@icloud.com</p>
                    <a href="profile.php" class="waves-effect waves-light btn sp-secondary white-text margin-0 margin-top-20">My Account</a>
                </div>
                <div class="profile-pic">
                    <img src="assets/images/no-user.jpg" />
                    <a href="javascript:;">Change</a>
                </div>
            </div>
            <div class="card-action right-align">
                <a href="signin.php" class="waves-effect waves-light btn sp-secondary white-text margin-0">Logout</a>
            </div>
        </div>
    </div>
</div>