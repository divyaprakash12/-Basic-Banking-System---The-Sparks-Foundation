<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROCKY Bank | Create User</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon"/>
    <!--Favicon icon-->
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.jpg?v=2' />
</head>

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Whooopee! New user created');
                               window.location='make_transaction.php';
                     </script>";
                    
    }
  }
?>

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
                    	<a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                    	<a href="create_user.php" class="nav-link current">Create User</a>
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
                    <h1>Create User</h1>
                    <p>
                        Create your user account simply with your e-mail
                    </p>
                </div>
            </div>
    	</section> 
        
        <section>
            <div class="container">
                <div class="activities-grid">
                    <div class="login-box">
                        <ion-icon class="user-login-img" name="person-circle"></ion-icon>
                        <form class="app-form" method="post">
                            <div class="textbox">
                            <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                            </div>
                            <div class="textbox">
                            <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                            </div>
                            <div class="textbox">
                            <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                            </div>
                            <br>
                            <div class="button">
                            <input class="submit-btn" type="submit" value="CREATE" name="submit"></input>
                            <input class="reset-btn" type="reset" value="RESET" name="reset"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

	<footer>
    	<p>&copy; 2021, All rights reserved</p>
    	<p>ROCKY BANK - Built by <a href="https://www.linkedin.com/in/DIVYAPRAKASH-J/" target="_blank">DIVYAPRAKASH J</a></p>
        <p>Web Dev Intern @ <a href="https://www.linkedin.com/company/the-sparks-foundation/" target="_blank">The Sparks Foundation</a></p>
    </footer>
    <!--Ion Icons-->
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!--Our own javascript-->
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>