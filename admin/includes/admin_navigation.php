<nav class="navbar navbar-light navbar-fixed-top" style="background-color:#6666ff;" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color:black;" href="main.php">Hamro-Ad Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        
            <div class="collapse navbar-collapse navbar-ex1-collapse"  >
                <ul class="nav navbar-nav side-nav"  >
                    <li>
                        <a style="color:white;" href="main.php"><i class="fa fa-fw fa-dashboard" ></i> Dashboard</a>
                    </li>
					<li>
                        <a  style="color:white;" href="allads.php"><i class="fa fa-bullhorn"></i> Ads</a>
                    </li>
                    <li>
                        <a  style="color:white;" href="categories.php"><i class="fa fa-desktop"></i> Categories</a>
                    </li>
					 <li>
                        <a  style="color:white;" href="feedback.php"><i class="fa fa-rss"></i> Feedback</a>
                    </li>
                    <li>
                        <a  style="color:white;" href="message.php"><i class="fa fa-envelope"></i> Message</a>
                    </li>
                    <li>
                        <a href="javascript:;" style="color:white;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="users.php">All Users</a>
                            </li>
							<li>
                                <a href="adduser.php">Add Users</a>
                            </li>
                            <!-- <li>
                                <a href="users.php?source=update_user">Edit User</a>
                            </li> -->
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>