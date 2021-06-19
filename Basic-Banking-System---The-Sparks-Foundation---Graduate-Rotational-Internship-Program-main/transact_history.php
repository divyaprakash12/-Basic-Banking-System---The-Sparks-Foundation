<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rocky Bank | Transaction History</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <!--Favicon icon-->
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.jpg?v=2' />
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
                    	<a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                    	<a href="create_user.php" class="nav-link">Create User</a>
                    </li>
                    <li class="nav-item">
                    	<a href="make_transaction.php" class="nav-link">Make Transaction</a>
                    </li>
                    <li class="nav-item">
                    	<a href="transact_history.php" class="nav-link current">Transaction History</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
    	<section class="hero">
            <div class="container">
                <div class="main-message">
                    <h1>Transaction History</h1>
                    <p>
                        View your transaction history and other details
                    </p>
                </div>
            </div>
    	</section>     
        
        <section>
            <div class="container">
                <div class="activities-grid">
                    <table>
                        <thead>
                            <tr id="header">
                                <th>S NO</th>
                                <th>SENDER</th>
                                <th>RECEIVER</th>
                                <th>AMOUNT</th>
                                <th>TIME</th>
                            </tr>
                        </thead>

                        <tbody class="t-body">
                            <?php

                                include 'config.php';

                                $sql = "select * from transaction";

                                $query = mysqli_query($conn, $sql);

                                while ($rows = mysqli_fetch_assoc($query)) {
                            ?>

                            <tr>
                                <td><?php echo $rows['sno']; ?></td>
                                <td><?php echo $rows['sender']; ?></td>
                                <td><?php echo $rows['receiver']; ?></td>
                                <td><?php echo $rows['balance']; ?> </td>
                                <td><?php echo $rows['datetime']; ?> </td>

                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </main>

	<footer>
    	<p>&copy; 2021, All rights reserved</p>
    	<p>ROCKY BANK - Built by <a href="https://www.linkedin.com/in/divya-prakash-011140193/" target="_blank">DIVYAPRAKASH J</a></p>
        <p>Web Dev Intern @ <a href="https://www.linkedin.com/company/the-sparks-foundation/" target="_blank">The Sparks Foundation</a></p>
    </footer>
    <!--Ion Icons-->
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!--Our own javascript-->
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>