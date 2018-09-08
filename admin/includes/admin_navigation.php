<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: #ffc627;">GolinPG</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li><a href="../index.php"> HOME SITE </a></li>
               
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#meetings_dropdown" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-file"></i> Meetings <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="meetings_dropdown" class="collapse">
                            <li>
                                <a href="meeting.php?source=view_all_meetings"> View all meetings</a>
                            </li>
                            <li>
                                <a href="meeting.php?source=filter_meetings"> Filter meetings</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users" class="collapse">
                            <li>
                                <a href="users.php?source=view_all_users">View all users</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_users">Add user</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="slide_meeting.php" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-dashboard"></i> Slide meeting </a>
                    </li>
                    <li>
                        <a href="pr_and_event.php" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-dashboard"></i> PR and event </a>
                    </li>
                     <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#clients" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-file"></i> Clients <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="clients" class="collapse">
                            <li>
                                <a href="clients.php?source=view_all_clients"> View all clients</a>
                            </li>
                            <li>
                                <a href="clients.php?source=add_client"> Add client</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#about_us" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-file"></i> About us <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="about_us" class="collapse">
                            <li>
                                <a href="about_us.php?source=view_all_about_us"> View all about us</a>
                            </li>
                            <li>
                                <a href="about_us.php?source=add_about_us"> Add about us</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#offices" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-file"></i> Offices <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="offices" class="collapse">
                            <li>
                                <a href="offices.php?source=view_all_offices"> View all offices</a>
                            </li>
                            <li>
                                <a href="offices.php?source=add_offices"> Add offices</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="profile.php" style="color: black;font-weight: bold;"><i class="fa fa-fw fa-dashboard"></i> Profile </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
