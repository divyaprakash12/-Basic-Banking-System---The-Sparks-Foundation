<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROCKY Bank | Home</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <!--rocky icon-->
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico?v=2' />
</head>
<body>

    <header>
    	<div class="container">
        	<nav>
            	<div class="nav-brand">
                	<a href="index.php">
                    	<img src="images/logo.jpg" alt="ROCKY Bank Logo">
                    </a>
                </div>
                
                <div class="menu-icons open">
                    <ion-icon name="menu"></ion-icon>
                </div>
                
                <ul class="nav-list">
                	<div class="menu-icons close">
                        <ion-icon name="close"></ion-icon>
                	</div>
                    <li class="nav-item">
                    	<a href="index.php" class="nav-link current">Home</a>
                    </li>
                    <li class="nav-item">
                    	<a href="create_user.php" class="nav-link">Create User</a>
                    </li>
                    <li class="nav-item">
                    	<a href="make_transaction.php" class="nav-link">Make Transaction</a>
                    </li>
                    <li class="nav-item">
                    	<a href="transact_history.php" class="nav-link">Transaction History</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
    	<section class="hero">
            <div class="container">
                <div class="main-message">
                    <h3>A tradition of trust</h3>
                    <h1>ROCKY Bank</h1>
                    <p>
                        The Nation banks on us; Pure Banking Nothing Else;<br>
                        With you all the way; A bank of the common man;<br>
                        The banker to every Indian
                    </p>
                </div>
            </div>
    	</section>
        
        <section>
        	<div class="container">
            	<div class="title-heading">
                	<h3>Experience our expertise</h3>
                    <h1>Make it happen</h1>
                    <p>The bank for a changing world, keep Reaching</p>
                </div>
                
                <div class="activities-grid">
                	<!-- grid item #1 -->
                    <div class="activities-grid-item user-bg">
                    	<a href="create_user.php"></a>
                        <ion-icon name="person-circle"></ion-icon>
                        <h1>Create account</h1>
                        <p>Create your user account simply with your e-mail</p>
                        <span class="btn"><a href="create_user.php">CREATE</a></span>
                    </div>
                    <!-- grid item #2 -->
                    <div class="activities-grid-item transact-bg">
                    <a href="make_transaction.php"></a>
                        <ion-icon name="repeat"></ion-icon>
                        <h1>Make Transaction</h1>
                        <p>Make your first transaction just with the receiver name</p>
                        <span class="btn"><a href="make_transaction.php">MAKE</a></span>
                  </div>
                    <!-- grid item #3 -->
                    <div class="activities-grid-item history-bg">
                    	<a href="transact_history.php"></a>
                        <ion-icon name="time"></ion-icon>
                        <h1>History</h1>
                        <p>View your transaction history and other details</p>
                        <span class="btn"><a href="transact_history.php">VIEW</a></span>
                    </div>
                    
                </div>
            </div>
        </section>        
    </main>

	<footer>
    	<p>&copy; 2021, All rights reserved</p>
    	<p>ROCKY BANK - Built by <a href="https://www.linkedin.com/in/jeevankarthick-b/" target="_blank">DIVYAPRAKASH J </a></p>
        <p>Web Dev Intern @ <a href="https://www.linkedin.com/company/the-sparks-foundation/" target="_blank">The Sparks Foundation</a></p>
    </footer>
    <!--Ion Icons-->
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!--Our own javascript-->
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>