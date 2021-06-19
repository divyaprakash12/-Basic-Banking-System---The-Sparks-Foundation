<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Hey there! No negativity here")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Oooops! Your balance is insufficient")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('No null values here!')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Money transfer Successful!');
                                     window.location='transact_history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROCKY Bank | Make Transaction</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon"/>
    <!--Favicon icon-->
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
                    	<a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                    	<a href="create_user.php" class="nav-link">Create User</a>
                    </li>
                    <li class="nav-item">
                    	<a href="make_transaction.php" class="nav-link current">Make Transaction</a>
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
                    <h1>Transaction</h1>
                </div>
            </div>
    	</section>

        <section>
            <?php
            include 'config.php';
            $sid = $_GET['id'];
            $sql = "SELECT * FROM  users where id='$sid'";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }
            $rows = mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext"><br>
                <div class="container">
                    <div class="activities-grid">
                        <table>
                            <tr id="header">
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>BALANCE</th>
                            </tr>
                            <tr class="t-body">
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['name'] ?></td>
                                <td><?php echo $rows['email'] ?></td>
                                <td><?php echo $rows['balance'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="container">
                    <div class="activities-grid">
                        <div class="transfer-label">
                            <label><b class="user-trans">TRANSFER TO</b></label>
                            <select name="to" class="form-control" required>
                                <option value="" disabled selected>select</option>
                                <?php
                                include 'config.php';
                                $sid = $_GET['id'];
                                $sql = "SELECT * FROM users where id!='$sid'";
                                $result = mysqli_query($conn, $sql);
                                if (!$result) {
                                    echo "Error " . $sql . "<br>" . mysqli_error($conn);
                                }
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option class="table" value="<?php echo $rows['id']; ?>">

                                        <?php echo $rows['name']; ?> (Balance:
                                        <?php echo $rows['balance']; ?> )
                                    </option>
                                <?php
                                }
                                ?>
                                <div>
                            </select>
                            <br>
                            <br>
                            <label><b class="user-amt">AMOUNT</b></label>
                            <input type="number" class="form-control" name="amount" required>
                            <br><br>
                            <div class="text-center">
                                <button class="trans-btn-user" name="submit" type="submit">TRANSFER</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </section>
    </main>

	<footer>
    	<p>&copy; 2021, All rights reserved</p>
    	<p>ROCKY BANK - Built by <a href="https://www.linkedin.com/in/jeevankarthick-b/" target="_blank">DIVYAPRAKASH J</a></p>
        <p>Web Dev Intern @ <a href="https://www.linkedin.com/company/the-sparks-foundation/" target="_blank">The Sparks Foundation</a></p>
    </footer>
    <!--Ion Icons-->
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!--Our own javascript-->
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>