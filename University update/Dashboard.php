
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
        </a>
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
      <h1>University updates </h1>
      </div>

      <p>
      Welcome to the university updates site.<br/>
      </p>
      <div class="row">
          <div class="col-lg-12">

                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Update tracker
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Update title</th>
                                                    <th>Update date</th>
                                                    <th>Expiry date</th>
                                                    <th>Status</th>
                                                    <th>Category</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Opening dates</td>
                                                    <td>01/01/2015</td>
                                                    <td>26/04/2015</td>
                                                    <td><span class="label label-info">Released</span></td>
                                                    <td>All departments</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Closing date</td>
                                                    <td>01/01/2015</td>
                                                    <td>26/04/2015</td>
                                                    <td><span class="label label-success">Released</span></td>
                                                    <td>All departments</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Fees update</td>
                                                    <td>01/05/2015</td>
                                                    <td>10/05/2015</td>
                                                    <td><span class="label label-pink">Pending</span></td>
                                                    <td>All departments</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Examination timetable</td>
                                                    <td>01/01/2015</td>
                                                    <td>31/05/2015</td>
                                                    <td><span class="label label-purple">Work in Progress</span></td>
                                                    <td>All departments</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Examination dates</td>
                                                    <td>01/01/2015</td>
                                                    <td>31/05/2015</td>
                                                    <td><span class="label label-warning">Coming soon</span></td>
                                                    <td>All departments</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>Unit registration</td>
                                                    <td>01/01/2015</td>
                                                    <td>31/05/2015</td>
                                                    <td><span class="label label-primary">Coming soon</span></td>
                                                    <td>All departments</td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td>Session reporting</td>
                                                    <td>01/01/2015</td>
                                                    <td>31/05/2015</td>
                                                    <td><span class="label label-info">Cool</span></td>
                                                    <td>All departments</td>
                                                </tr>

                                                <tr>
                                                    <td>8</td>
                                                    <td>Strike notice</td>
                                                    <td>01/01/2015</td>
                                                    <td>31/05/2015</td>
                                                    <td><span class="label label-warning">Coming soon</span></td>
                                                    <td>All departments</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    
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
