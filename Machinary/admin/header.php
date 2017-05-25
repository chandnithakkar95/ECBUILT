	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="dashboard.php"><span>SHPPL ADMIN</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
                                <?php $count_message = $Admin->count_row('message','1');?>
 									<span>You have <?php echo $count_message[0]; ?>  messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                             <li>
                                  <?php $where = "1=1";
					$result = $Admin->display_record('message',$where);
					while($display = mysql_fetch_array($result))
					{?>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	<td><?php echo $display['Name'];?></td>
										     </span>
											<span class="time">
										    	<td><?php echo $display['Date'];?></td>
										    </span>
										</span>
                                        <span class="message">
                                            <td><?php echo $display['Message'];?></td>
                                        </span>  
                                    </a>
                                    <?php }?>
                                </li>
							
								<li>
                            		<a class="dropdown-menu-sub-footer" href="managemessage.php">View all messages</a>
								</li>	
							</ul>
						</li>
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i><?php $user=$_SESSION['admin']['Username'];
								echo $user;?>

								<span class="caret"></span>
							</a>
                            <ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>