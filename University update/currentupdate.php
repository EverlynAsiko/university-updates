
<!DOCTYPE html>

<html lang="en">
  
  <head>
        
    <meta charset="utf-8">
          
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          
    <meta name="description" content="Online shoe sale">
          
    <meta name="author" content="Shoezone">
           
    <title>University updates</title>

    <!-- Bootstrap core CSS -->
           
    <link href="css/bootstrap.min.css" rel="stylesheet">
           
    <link href="css/bootstrap-reset.css" rel="stylesheet">

    <!--Icon-fonts css-->
           
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
           
    <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />

    <!-- Custom styles-->
           
    <link href="css/style.css" rel="stylesheet">
           
    <link href="css/helper.css" rel="stylesheet">
  </head>

     
  <body class="home">

    <!-- Aside Start-->
           
    <aside class="left-panel">
                 
      <!-- brand -->
                 
      <div class="logo">
                     
        <a href="Dashboard.php" class="logo-expanded">
                           
          <img src="logo.jpg" alt="University update"/>
      </div>
                
      <!--brand -->
                              
      <!-- Navbar Start -->
                
      <nav class="navigation">
                     
          <ul class="list-unstyled">
                             
            <li class="active"><a href="Dashboard.php"><i class="ion-home"></i>
            <span class="nav-label">Dashboard</span></a></li>
                           
            <li class="has-submenu">
              <a href="#"><i class="ion-android-forums"></i><span class="nav-label">Current update</span></a>
                                
              <ul class="list-unstyled">
                                     
                <li><a href="currentupdate.php">Students</a></li>
                                   
                <li><a href="currentupdate.php">Staff</a></li>
                                    
                <li><a href="currentupdate.php">Whole university</a></li>
              </ul>
            </li>
                             
            <li class="has-submenu"><a href="#"><i class="ion-information-circled"></i> 
            <span class="nav-label">Major changes</span></a>
                                
              <ul class="list-unstyled">
                                    
                <li><a href="Keydates.php">Key dates</a></li>
                                    
                <li><a href="totalfees.php">Fee totals</a></li>
              </ul>
            </li>
                             
            <!--<li><a href="help.html"><i class="ion-help"></i> <span class="nav-label">Help</span></a>
            </li>-->
          </ul>
                       
          <!-- Search -->
                       
          <form role="search" class="app-search">
                          
            <input type="text" placeholder="Search..." class="form-control">
                          
            <a href="#"><i class="fa fa-search"></i></a>
          </form> 
      </nav>
    </aside>
          
    <!-- Aside Ends-->
         
    <section class="content">
             
    <!-- Header -->
               
    <header class="top-head container-fluid">
                   
      <button type="button" class="navbar-toggle pull-left">
                        
        <span class="sr-only">Toggle navigation</span>
                           
        <span class="icon-bar"></span>
                           
        <span class="icon-bar"></span>
                           
        <span class="icon-bar"></span>
      </button>
    </header>

    <div class="container-fluid">
      <!--page heading-->
      <div class="page-title">
      <h1>Current update </h1>
      </div>

       <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Enter message</h3></div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="send_sms.php">                                     
                                                                                                          
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Message</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="15" name="message"></textarea>
                                        </div>
                                    </div>
                                    
                                    <center><button type="submit" class="btn btn-primary" value="send">Send</button></center>
                   
                                </form>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->
                </div> <!-- End row -->
    </div>     
                    
    <!--start of footer-->
              
    <footer class="footer">
      2018 @MMUST.
    </footer>
          
    </section>      

    <!-- js placed at the end of the document so the pages load faster -->
          
    <script src="js/jquery.js"></script>
           
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
          
    <script src="js/jquery.app.js"></script>
  </body>

</html>
