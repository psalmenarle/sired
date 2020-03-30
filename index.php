 <?php
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';


session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
 ?>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

  <body>
  
  <div id="container">
			  <div class="menu">
                <img src="img/piggy.gif" class="logo">

                <?php if (isset($_SESSION['success'])) : ?>
                                    <div class="error success" >
                                        <h3>
                                        <?php 
                                            echo $_SESSION['success']; 
                                            unset($_SESSION['success']);
                                        ?>
                                        </h3>
                                    </div>
                        <?php endif ?>

                        <?php  if (isset($_SESSION['username'])) : ?>
                            
                           <li><p style="color: white;">Welcome! <strong style="font: italic bold 15px/30px Georgia, serif;"><?php echo $_SESSION['username']; ?></strong></p></li>
                           <br>          
                <li <?php if($load == 'gdrive') {echo 'class="active"';} ?>><a href="index.php?page=gdrive">How to use?</a></li>
                <br>
                <br>
				<li <?php if($load == 'home') {echo 'class="active"';} ?>><a href="index.php?page=home">Home</a></li>
				<li <?php if($load == 'expense') {echo 'class="active"';} ?>><a href="index.php?page=expense">Manage Expense Profile</a></li>
				<li <?php if($load == 'budget') {echo 'class="active"';} ?>><a href="index.php?page=budget">Manage Expense Budget</a></li>
                <li <?php if($load == 'weekly') {echo 'class="active"';} ?>><a href="index.php?page=weekly">Manage Weekly Expense Budget</a></li>
                <br>
                <br>
                <li> <a href="index.php?logout='1'" style="color: white;">Logout</a></li>

                <?php 
                         endif 
                ?>
			  </div>
		
		<div id="content" style="margin-left:12%;padding:1px 16px;height:700px;">
          <?php
          switch ($load) {
            case 'expense':
              require_once('expense.php');
              break;
            case 'budget':
                require_once('budget.php');
                break;
			case 'weekly':
                require_once('weekly.php');
                break;
            case 'deleteexpense':
                require_once('deleteexpense.php');
                break;
            case 'update':
                require_once('updateexpense.php');
                break; 
            case 'add':
                require_once('addexpense.php');
                break;
            case 'allowance':
                require_once('allowance.php');
                break;
            case 'deletebudget':
                require_once('deletebudget.php');
                break;    
            case 'weeklybud':
                require_once('weeklybud.php');
                break;
            case'kyzier':
                require_once('kyzier.php');
                break;
            case'psalm':
                require_once('psalm.php');
                break;  
            case'yapster':
                require_once('yapster.php');
                break; 
            case'gdrive':
                require_once('gdrive.php');
                break;             
            default:
              require_once('home.php');
              break;
          }
           ?>
        </div>
        
        <div id="footer" style="margin-left:12%;padding:1px 16px;">
            <div class="ambot">
                <h2>Team Members: (click the links below to see the profile of the members)</h2>

                <li <?php if($load == 'yapster') {echo 'class="active"';} ?>><a href="index.php?page=yapster"><i>Member 1</i></a></li>
                <li <?php if($load == 'psalm') {echo 'class="active"';} ?> style="margin-left:30%;"><a href="index.php?page=psalm"><i>Member 2</i></a></li>
                <li <?php if($load == 'kyzier') {echo 'class="active"';} ?>style="float:right;"><a href="index.php?page=kyzier"><i>Member 3</i></a></li>
            </div>    
        </div> 

    </div>
  </body>