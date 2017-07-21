<?php


 include("fusioncharts.php");

include('db.php');

 $sqlch="select count(UID) as totalchld from ims ";
 $result=mysqli_query($con, $sqlch) or die (mysqli_error($con));
 
 while($row=mysqli_fetch_array($result))
 {
 $totalchld=$row['totalchld'];
 }
 
 
$sql11="select count(uid) as totalforms from forms";
$result11=mysqli_query($con,$sql11) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result11))
{
$totalfrm=$row['totalforms'];
} 


$sqltarget="select sum(total) as targetclusters from rpt_targetclusters";
$result=mysqli_query($con,$sqltarget) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
$targetclusters=$row['targetclusters'];
}



$sql="select count(count) as totalcluster from rpt_clustercomp";
$result=mysqli_query($con,$sql) or die (mysqli_errno($con));  
 
 
 while($row=mysqli_fetch_assoc($result))
  {
  $val=$row['totalcluster']; 
  }
 
 
 $sql2="select count(count) as total from rpt_clusterinprocess";
 $result=mysqli_query($con,$sql2) or die (mysqli_errno($con));  
 
 while($row=mysqli_fetch_assoc($result))
  {
  $val2=$row['total']; 
  }
 
 $sql3="select count(mng1) as totalcol  from forms where mng1=1  group by mng1 ";
 $result=mysqli_query($con,$sql3) or die (mysqli_errno($con));  
 
 while($row=mysqli_fetch_assoc($result))
  {
  $val3=$row['totalcol']; 
  }
 
$sql4="select * from rpt_status where Status='Completed'";
$result4=mysqli_query($con,$sql4) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result4))
{
$val1_1=$row['Frequency'];
$val1_1=round($val1_1/$totalfrm*100);

}
 
$sql5="select * from rpt_status where Status='Locked'";
$result5=mysqli_query($con,$sql5) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result5))
{
$val1_2=$row['Frequency'];
$val1_2=round($val1_2/$totalfrm*100);
}
 

$sql6="select * from rpt_status where Status='Refuse'";
$result6=mysqli_query($con,$sql6) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result6))
{
$val1_3=$row['Frequency'];
$val1_3=round($val1_3/$totalfrm*100);
}
  
$sql7="select * from rpt_status where Status='Child not available'";
$result7=mysqli_query($con,$sql7) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result7))
{
$val1_4=$row['Frequency'];
$val1_4=round($val1_4/$totalfrm*100);
}
 
$sql8="select * from rpt_status where Status='Incompleted'";
$result8=mysqli_query($con,$sql8) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result8))
{
$val1_5=$row['Frequency'];
$val1_5=round($val1_5/$totalfrm*100);
} 
 
$sql9="select sum(total) as chIdentify  from child_identify";
$result9=mysqli_query($con,$sql9) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result9))
{
$val4=$row['chIdentify'];
}  
 //select count(psu_code) as total from clusters_join where mna4 is null 
$sql10="select count(total) as total from rpt_cluster_n ";
$result10=mysqli_query($con,$sql10) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result10))
{
$val5=$row['total'];
} 
  
  
$sql11="select mna3,mna7 ,count(mna7) as total from forms where mna3=13 group by mna7" ;
$result11=mysqli_query($con,$sql11) or die (mysqli_error($con));
while($row=mysqli_fetch_array($result11))
{
if ($row['mna7']==1)
{
$complete_13=$row['total'];
}
else if ($row['mna7']==2)
{
$locked_13=$row['total'];
}
else if ($row['mna7']==3)
{
$refuse_13=$row['total'];
}
else if ($row['mna7']==4)
{
$childna_13=$row['total'];
}
} 
  
$sql12="select mna3,mna7 ,count(mna7) as total from forms where mna3=21 group by mna7" ;
$result12=mysqli_query($con,$sql12) or die (mysqli_error($con));
while($row=mysqli_fetch_array($result12))
{
if ($row['mna7']==1)
{
$complete_21=$row['total'];
}
else if ($row['mna7']==2)
{
$locked_21=$row['total'];
}
else if ($row['mna7']==3)
{
$refuse_21=$row['total'];
}
else if ($row['mna7']==4)
{
$childna_21=$row['total'];
}
}   
    
$sql13="select mna3,mna7 ,count(mna7) as total from forms where mna3=22 group by mna7" ;
$result13=mysqli_query($con,$sql13) or die (mysqli_error($con));
while($row=mysqli_fetch_array($result13))
{
if ($row['mna7']==1)
{
$complete_22=$row['total'];
}
else if ($row['mna7']==2)
{
$locked_22=$row['total'];
}
else if ($row['mna7']==3)
{
$refuse_22=$row['total'];
}
else if ($row['mna7']==4)
{
$childna_22=$row['total'];
}

}   


$sql14="select mna3,mna7 ,count(mna7) as total from forms where mna3=31 group by mna7" ;
$result14=mysqli_query($con,$sql14) or die (mysqli_error($con));
while($row=mysqli_fetch_array($result14))
{
if ($row['mna7']==1)
{
$complete_31=$row['total'];
}
else if ($row['mna7']==2)
{
$locked_31=$row['total'];
}
else if ($row['mna7']==3)
{
$refuse_31=$row['total'];
}
else if ($row['mna7']==4)
{
$childna_31=$row['total'];
}
}   


$sql15="select mna3,mna7 ,count(mna7) as total from forms where mna3=41 group by mna7" ;
$result15=mysqli_query($con,$sql15) or die (mysqli_error($con));
while($row=mysqli_fetch_array($result15))
{
if ($row['mna7']==1)
{
$complete_41=$row['total'];
}
else if ($row['mna7']==2)
{
$locked_41=$row['total'];
}
else if ($row['mna7']==3)
{
$refuse_41=$row['total'];
}
else if ($row['mna7']==4)
{
$childna_41=$row['total'];
}
}   


 $sql2="select completed from rpt_district_status"; 
  $comp=mysqli_query($con,$sql2) or die (mysqli_errno($con));
  $comp=mysqli_fetch_all($comp,MYSQLI_ASSOC);
  $comp=json_encode(array_column($comp,'completed'),JSON_NUMERIC_CHECK);
 
  $in_progress="select in_progress from rpt_district_status";
  $in_progress=mysqli_query($con,$in_progress) or die (mysqli_errno($con));
  $in_progress=mysqli_fetch_all($in_progress,MYSQLI_ASSOC);
  $in_progress=json_encode(array_column($in_progress,'in_progress'),JSON_NUMERIC_CHECK); 
  
  $not_started="select not_started from rpt_district_status";
  $not_started=mysqli_query($con,$not_started) or die (mysqli_errno($con));
  $not_started=mysqli_fetch_all($not_started,MYSQLI_ASSOC);
  $not_started=json_encode(array_column($not_started,'not_started'),JSON_NUMERIC_CHECK); 
  
 // $children="select children from rpt_district_status";
 // $children=mysqli_query($con,$children) or die (mysqli_errno($con));
 // $children=mysqli_fetch_all($children,MYSQLI_ASSOC);
 // $children=json_encode(array_column($children,'children'),JSON_NUMERIC_CHECK); 
  
  $get="select d_name from rpt_district_status";
  $get=mysqli_query($con,$get) or die (mysqli_errno($con));
  $get=mysqli_fetch_all($get,MYSQLI_ASSOC);
  $get=json_encode(array_column($get,'d_name'),JSON_NUMERIC_CHECK);


$sqlage="select * from rpt_agegrp ";
$result=mysqli_query($con,$sqlage) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
$age20=$row['U20'];
$grp20_29=$row['g20_29'];
$grp30_39=$row['g30_39'];
$grp40_49=$row['g40_49'];
$grp50_59=$row['g50_59'];
} 
  
 
$bcg="SELECT bcg ,count(bcg) as bcgcount FROM ims group by bcg";
$result=mysqli_query($con,$bcg) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
if ($row['bcg']==1)
{
$bcg_1=$row['bcgcount'];
$bcg_1=round($bcg_1/$totalchld*100);
}

else if ($row['bcg']==2)
{
$bcg_2=$row['bcgcount'];
}

}
 
$opv0="SELECT opv0 , count(opv0) as opv0count FROM ims group by opv0";
$result=mysqli_query($con,$opv0) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
if ($row['opv0']==1)
{
$opv0_1=round($row['opv0count']/$totalchld*100);
}

else if ($row['opv0']==2)
{
$opv0_2=$row['opv0count'];
}

}

 

 $penta="SELECT p1 , count(p1) as p1count FROM ims group by p1";
$result=mysqli_query($con, $penta) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
if ($row['p1']==1)
{
$p1_1=round($row['p1count']/$totalchld*100);
}

else if ($row['p1']==2)
{
$p1_2=$row['p1count'];
}

}
 
 
$pcv1="SELECT pcv1 , count(pcv1) as pcv1count FROM ims group by pcv1";
$result=mysqli_query($con,  $pcv1) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
if ($row['pcv1']==1)
{
$pcv1_1=round($row['pcv1count']/$totalchld*100);
}

else if ($row['pcv1']==2)
{
$pcv1_2=$row['pcv1count']/$totalchld*100;
}

}
 
 
$m1="SELECT m1, count(m1) as m1count FROM ims group by m1";
$result=mysqli_query($con,  $m1) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
if ($row['m1']==1)
{
$m1_1=round($row['m1count']/$totalchld*100);
}

else if ($row['m1']==2)
{
$m1_2=$row['m1count']/$totalchld*100;
}

} 
 
 
 
 
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
    <title>PSSP</title>	
     <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	 
	  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js">

</script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
    	$("#p1").hide()	
		$("#p2").hide()	
		$("#p3").hide()	
		$("#p4").hide()
		$("#p5").hide()
		
		$("#h1").click(function(){
        $("#p1").toggle();	
	});
       
	    $("#h2").click(function(){
        $("#p2").toggle();
	});
	
	  $("#h3").click(function(){
      $("#p3").toggle();
	});
	 
	 $("#h4").click(function(){
      $("#p4").toggle();
	});
	
	 $("#h5").click(function(){
     $("#p5").toggle();
	});

	
	});
	</script>
	
	
  </head>
  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><!--<i class="fa fa-paw"></i>--><span>PSSP Reporting</span></a>
            </div>
			
           <!--<div class="clearfix"></div>-->
            <!-- menu profile quick info -->
            <!--<div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>-->
            <!-- /menu profile quick info -->
            <br/>
			<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!--<li><a href="../../production/projects.php">MainPage</a></li>-->
					  <li><a href="index.php">Dashboard</a></li>
                      <li><a href="filteruser.php">Userprogress by Date</a></li>
					  
					  <!--  <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>-->                   
					
					</ul>
                  
				  </li>
                 <!-- <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>-->
                  
				  <li><a> Reports<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!--<li><a href="tables.html">Tables</a></li>-->
					 
    				  <li><a href="userprogress.php">Progress by Data Collector</a></li>
					  <li><a href="clusters.php">Progress by Cluster</a></li>	
					
					  
                      <!--<li><a href="tables_dynamic1.php">Table Dynamic-1</a></li>-->
				   </ul>
                  </li>
				  
				  
                <!--  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>-->
                </ul>
              </div>
             <!-- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>-->

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          <!--  <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>
     
	  <!-- top navigation -->
       <div class="top_nav">
          <div class="nav_menu" style="background:lightgreen;">
			<nav class="" role="navigation">
           
			  <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>				
			 </div>
			
			 
<!--
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>-->
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content --> 
		<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count"  style="background-image:url(national.jpg);" >
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" ; >
              <span class="count_top" style="color:#fff;"><i class="fa fa-user"></i><b>Targeted Clusters</b></span>
              <div class="count red"><font style="color:orange;"><small><?php echo $targetclusters;?></small> </font></div>           
		      
			<div class="count_bottom" style="color:#fff;"><font style="color:orange;"><b> <?php echo $val3;?> </b></font> Specimen collected </div>  
			  <div class="count_bottom" style="color:#fff;"><font style="color:orange;"><b><?php echo $val4;?></b> </font> Children identify  </div> 
			
			  <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>0</i> Specimen Collected</span>-->
           
		   </div>
           <!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> </span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>-->
           
		   <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" >
              <span class="count_top" style="color:#fff;"><b>Cluster Completed</b></span> 
              <div class="count red"><font style="color:orange;"> <small><?php echo $val ?></small></font></div>
             <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="float:up;" >
              <span class="count_top" style="color:#fff;"><b>Partially Completed</b></span>
              <div class="count red"><font style="color:orange;"><small><?php echo $val2 ?></small></font></div>
            <!--  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>-->
            </div>
           <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top" style="color:#fff;"><b>Cluster not Started</b></span>
              <div class="count red"><font style="color:orange;"><small><?php echo $val5;?></small></font></div>			  
             <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
            </div>
           
              <!--<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top" style="color:#fff;"><b>Specimen Collected</b></span>
              <div class="count red"><font style="color:orange;"><small><?php echo $val3;?></small></font></div>			  
             <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>-->

			<!--<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top" style="color:#fff;"><b>Children Identify</b></span>
              <div class="count red"><font style="color:orange;"><small><?php echo $val4;?></small></font></div>			  
             <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>-->
			
			
		   <!--<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div> -->
          </div>
          <!-- /top tiles -->
         <!--<div class="row" style="float:left;">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
              <div class="row x_title"  >
                 <!-- <div class="col-md-6">
                    <h3>Total performance <small>Visit status</small></h3>
                  </div>
	
	
			   <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>		  
             
			 </div>
               	   
<!---charts-->			   

	
	 <!--charts-->
			  
			   			   
			   <!--<div class="col-md-9 col-sm-9 col-xs-12">
                  
				  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder" ></div>
                  <div style="width: 100%;">
                    <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                  
				  </div>                
				</div>			
				
	    		 <!--  <div class="col-md-3 col-sm-3 col-xs-12 bg-white" >
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6" >
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

               <div class="clearfix"></div>
              </div>
            </div>

          </div>-->
		         	
		<div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Form Status</h2>
                 <!-- <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>-->
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                     
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Status</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                       <canvas id="canvasDoughnut" height="120" width="120"  style="margin: 15px 10px 10px 0"></canvas>						
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square gray"></i>Completed </p>
                            </td>
                            <td><?php echo $val1_1;?>%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Locked </p>
                            </td>
                            <td><?php echo $val1_2;?>%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square" style="color:lightgray"></i>Refuse </p>
                            </td>
                            <td><?php echo $val1_3;?>%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Child not avail</p>
                            </td>
                            <td><?php echo $val1_4;?>%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>Incomplete</p>
                            </td>
                            <td><?php echo $val1_5;?>%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
	
		<!--<div class="col-md-4 col-sm-6 col-xs-12"  style="float:left;" >
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Form Status<small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>          				  
				    <div class="x_content">
			  
				  <table class="" style="width:50%" >
                  <tr>
                      <th style="width:37%;">
                        <p></p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class=""></p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class=""></p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
               	<canvas id="canvasDoughnut" style="element{width:250px; height:150px;}"></canvas>
					 <canvas id="canvasDoughnut" height="120" width="120" style="margin: 15px 10px 10px 0"></canvas>
					
					</td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square "></i>complete</p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square "></i></p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square "></i> </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square "></i></p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square "></i></p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>               
				</div>
                </div>-->
           

		<!-- stack bar <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div> stackbar-->
		 
		  <!--<br/>-->

         <div class="row" >
            

         <!--<div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Device Usage</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>-->
						

         <!--  <div class="col-md-4 col-sm-4 col-xs-12" >
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Quick Settings</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                      </li>
                    </ul>

                    <div class="sidebar-widget">
                      <h4>Profile Completion</h4>
                      <canvas width="150" height="80" id="foo" class="" style="width: 160px; height: 100px;"></canvas>
                      <div class="goal-wrapper">
                        <span class="gauge-value pull-left">$</span>
                        <span id="gauge-text" class="gauge-value pull-left">3,200</span>
                        <span id="goal-text" class="goal-value pull-right">$5,000</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->

     	  
     <!--<div class="row"  >-->
          	  		  
		  <div class="col-md-4 col-sm-4 col-xs-12" >
		   <div class="x_panel">
                <div class="x_title">
                  <h2>Recent Activities <small></small></h2>               
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                          	 
					 <li>
                        <div class="block">
                          <div class="block_content">
							<h2 class="title" id="h1" > <a>Pishin</a> </h2>
                            <div class="byline" id="p1" style="display:none">
                              <span></span><a>Complete:<b><?php echo $complete_13?></b></a> <br>
							  <span></span><a>Locked:<b><?php echo $locked_13?></b></a> <br>
							  <span></span><a>Refuse:<b><?php echo $refuse_13?></b></a> <br>
							  <span></span><a> Child not available:<b><?php echo $childna_13?></b> </a>							  
                              </div>
                            <p class="excerpt"> <a></a>
                            </p>
                          </div>
                        </div>
                      </li>
					 
			         <li>
                        <div class="block" id="h2">
                          <div class="block_content">
                           
						   <h2 class="title">                            
							<a>Mardan</a>                           
						   </h2>
						   
                            <div class="byline" id="p2" style="display:none" >
                              <span></span> <a>Complete: <b><?php echo $complete_21?></b></a> <br>
							  <span></span> <a>Locked:  <b><?php echo $locked_21?></b> </a> <br>
							  <span></span> <a>Refuse: <b><?php echo $refuse_21?></b></a> <br>
							  <span></span> <a> Child not available:<b><?php echo $childna_21?></b> </a>	
                            </div>
                            <p class="excerpt"> <a> </a>
                            </p>
                          </div>
                        </div>
                      </li>
                     <li>
                     <div class="block" id="h3">
                        <div class="block_content">
                            <h2 class="title">
                            <a>Peshawar Town 1 & 2</a>
                            </h2>
                            <div class="byline" id="p3" style="display:none">
                                 <span></span><a>Complete: <b><?php echo $complete_22?></b></a> <br>
							  <span></span> <a>Locked: <b><?php echo $locked_22?></b></a> <br>
							  <span></span> <a>Refuse: <b><?php echo $refuse_22?></b></a> <br>
							  <span></span> <a> Child not available: <b><?php echo $childna_22?></b></a>	
                            </div>
                            <p class="excerpt"> <a></a>
                            </p>
                          </div>
                        </div>
                      </li>
                     <li>
                        <div class="block" id="h4">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>K-Zone 1</a>
                                          </h2>
                            <div class="byline" id="p4" style="display:none">
                               <span></span> <a>Complete: <b><?php echo $complete_31?></b></a> <br>
							  <span> </span> <a>Locked: <b><?php echo $locked_31?></b></a> <br>
							  <span> </span> <a>Refuse: <b><?php echo $refuse_31?></b> </a> <br>
							  <span></span> <a> Child not available: <b><?php echo $childna_31?></b> </a> <br>
                            </div>
                            <p class="excerpt"> <a> </a>
                            </p>
                          </div>
                        </div>
                      </li>
                   <li>
                        <div class="block" id="h5">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Sukkur/Gothki/khairpur</a>
                                          </h2>
										  										  
                            <div class="byline" id="p5" style="display:none" >
                                <span></span> <a>Complete: <b><?php echo $complete_41?></b></a> <br>
							  <span></span> <a>Locked: <b><?php echo $locked_41?></b> </a> <br>
							  <span></span> <a>Refuse: <b><?php echo $refuse_41?></b> </a> <br>
							  <span></span> <a> Child not available: <b><?php echo $childna_41?></b></a> <br>
                            </div>
                            <p class="excerpt"> 
                            </p>
                          </div>
                        </div>
                      </li>
                  
				  </ul>
                  </div>
                </div>					  							
			
	</div>						
 	 </div>	     			  			
	<div class="clearfix visible-xs-block"></div>
	<div class="col-md-3 col-sm-3 col-xs-12" >
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Children Info of <5<small>N=<?php echo $totalchld;?></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  
               <?php 
include('db.php');
			   $chgender="select * from rpt_chldgender ";
$result=mysqli_query($con,$chgender) or die (mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
if ($row['imb']=='Male')
{
$chmale=$row['gencount'];
$chmale=round($chmale/$totalchld*100);
}

else if($row['imb']=='Female')
{
$chfemale=round($row['gencount']/$totalchld*100);
}

}
?>
 <table class="table">
<thead>                                            				
       <tr  role="row">													
	   <th>Details</th>			
	   </tr>					      									   
</thead>
<tbody>
   <tr>
    <td>Male</td>
   <td><?php echo $chmale?>%</td>   	
   <tr>
    <td>Female</td>
   <td><?php echo $chfemale?>%</td>
    </tr>	
 </tbody>
  </table>		

<table class="table">
                    <thead> 		 							
					<tr  role="row">							
						<th>Vaccinated</th> 			
					     </tr>
						 </thead>
<tbody> 
   <tr>   
 <td colspan="2">
<p>BCG:<b><?php echo $bcg_1;?>%</b></p>                    
					  <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                       <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $bcg_1;?>" aria-valuenow="" style="width:<?php echo $bcg_1;?>%;"></div>
                        </div>
						
                     </div>                   
  
  
  <p>OPV0:<b><?php echo $opv0_1;?>%</b></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                         <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $opv0_1;?>" aria-valuenow="49" style="width:<?php echo $opv0_1;?>%;"></div>
                      </div>
                    </div> 
	
	
 <p>Penta 1:<b> <?php echo $p1_1;?>% </b></p>
                      <div class="">
                        <div class="progress progress_sm" style="width:100%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $p1_1;?>" aria-valuenow="49" style="width:<?php echo $p1_1;?>%;"></div>
                        </div>
                      </div>
					  			
 <p>PCV 1:<b><?php echo $pcv1_1;?>%</b></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%;">
                         <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $pcv1_1;?>"aria-valuenow="49" style="width: <?php echo $pcv1_1;?>%;"></div>
                      </div>
                    </div> 
	
 <p>Measles 1:<b><?php echo $m1_1;?>%</b></p>
                      <div class="">
                        <div class="progress progress_sm" style="width:100%;">
                         <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $m1_1;?>" aria-valuenow="49" style="width: <?php echo $m1_1;?>%;"></div>
					  </div>
                    </div> 
   </td>   	
   </tr>
  
 </tbody>
  </table>
              </div>
              </div>
              </div>			
	</div> 
		
		<div class="row">   
	<div class="col-md-12 col-sm-12 col-xs-12" style="float:left " >
              <div class="x_panel ">
                <div class="x_title">
                  <h2>District wise distribution</h2>               
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">			
<div id="stackbar" style="min-width: 110px; height: 300px; margin:0 auto"> </div>
</div>
</div>
</div>
	
	<div class="col-md-12 col-sm-12 col-xs-12" style="line-height:0">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Area wise Distribution</b> </h2>              
                      </li>  
					  <li><a class="close-link"><!--<i class="fa fa-close"></i>--></a>
                      </li>
                    </ul>
				   <div class="clearfix"></div>
                  </div>
                  <div class="x_content">			  			           
<?php											    
				//$q = intval($_GET['q']);				
				//$date=$_GET['single_cal1'];	
				//echo $_GET['single_cal1'];		
				include ('db.php');
				$result = mysqli_query($con,"select * from rpt_district_status");
				?>			
            <table id="datatable-buttons" class="table table-striped table-bordered" style="float:left">
		
		<thead>                                           		 							
					<tr role="row">																			
						<th>District</th> 			
						<th>TargetedCluster</th>					
                        <th>completed</th>	
					    <th>Partially completed</th>
					    <!--<th>ChildrenIdentify</th>-->
						<th>Cluster not started</th>					   
					   </tr>
   </thead>
<tbody>
  <?php while ($row = mysqli_fetch_array($result)){?>
    <tr>	
        <td> <a href="#?id="> <?php echo $row['d_name'];?></a></td>        
		<td>25</td>	
        <td><?php echo $row['completed']?></td>	    	
	    <td><?php echo $row['in_progress']?></td>
	    <!--<td><?php //echo $row['children']?></td>-->
	    <td><?php echo $row['not_started']?></td>
		
	</tr>
<?php }?>
 
 </tbody>
  </table>									
                 </div>
                </div>
              </div>
				 
			
			 <div class="col-md-6">

	<!-- <div id="map" style="width:500px;height:500px ;background:gray;float:left;">

	 </div> -->
					 <!--<div class="col-md-6">
                        <div class="panel panel-body">
                          <div class="x_title">
                            <h4>Easy Pie Chart</h4>
                          </div>

                          <p>Easy pie chart is a jQuery plugin that uses the canvas element to render highly customizable, very easy to implement, simple pie charts for single values.</p>
                          <div class="row">
                            <div class="col-xs-4">
                              <span class="chart" data-percent="86">
                                <span class="percent">
								</span>
                              </span>
                            </div>
                            <div class="col-xs-4">
                              <span class="chart" data-percent="73">
                                              <span class="percent"></span>
                              </span>
                            </div>
                            <div class="col-xs-4">
                              <span class="chart" data-percent="60">
                                              <span class="percent"></span>
                              </span>
                            </div>
                            <div class="clearfix"></div>
                          </div>

                        </div>
                      </div>-->
					  
                     <!-- <div class="col-md-6">
                        <div class="panel panel-body">
                          <div class="x_title">
                            <h4>Sparkline Inline Graphs</h4>
                          </div>

                          <p>Yet another great library for inline data visualizations</p>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="width:20%"></th>
                                <th style="width:50%"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>
                                  <span class="sparkline_line" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Line Graph</td>
                              </tr>
                              <tr>
                                <th>
                                  <span class="sparkline_area" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Line Area Graph</td>
                              </tr>
                              <tr>
                                <th>
                                  <span class="sparkline_bar" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Bar Graph</td>
                              </tr>
                              <tr>
                                <th>
                                  <span class="sparkline_pie" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Pie Chart</td>
                              </tr>
                              <tr>
                                <th>
                                  <span class="sparkline_discreet" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Discrete chart</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                   </div>-->
			   
			
</div>
                  </div>
                   <!--   <p class="source-data">Source Data: PCR</p>-->              
                     </div>
                  </div>
                 </div>
			  			
			 		  
	<!--goolemap-->		  
			 
<!--  <div class="col-md-4 col-sm-6 col-xs-12" >
  
  <!--extra-->


  
  <!--<div class="col-md-6">

	 <div id="map" style="width:500px;height:500px;background:gray ;float:left">

	 </div> 
</div>-->
		
	 
	

	</div> 

	<!--its a div of progress bar-->	
         <div class="col-md-8 col-sm-8 col-xs-12">		 
		<!--<div id="container" style="min-width: 1100px; height: 400px; margin: 0 auto"></div>-->
		 </div>

              <div class="row">
   
			  
			  
			  
<div class="col-md-4 col-sm-6 col-xs-12" >
			   
             
              </div> 



<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp-->

                <!--<div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Visitors location <small>geo-presentation</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
                        <div class="col-md-4 hidden-small">
                          <h2 class="line_30">125.7k Views from 60 countries</h2>

                          <table class="countries_list">
                            <tbody>
                              <tr>
                                <td>United States</td>
                                <td class="fs15 fw700 text-right">33%</td>
                              </tr>
                              <tr>
                                <td>France</td>
                                <td class="fs15 fw700 text-right">27%</td>
                              </tr>
                              <tr>
                                <td>Germany</td>
                                <td class="fs15 fw700 text-right">16%</td>
                              </tr>
                              <tr>
                                <td>Spain</td>
                                <td class="fs15 fw700 text-right">11%</td>
                              </tr>
                              <tr>
                                <td>Britain</td>
                                <td class="fs15 fw700 text-right">10%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">


                <!-- Start to do list -->
               <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>To Do List <small>Sample tasks</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
                
                <!-- start of weather widget -->
              <!--  <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Daily active users <small>Sessions</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="temperature"><b>Monday</b>, 07:30 AM
                            <span>F</span>
                            <span><b>C</b></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="weather-icon">
                            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="weather-text">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="weather-text pull-right">
                          <h3 class="degrees">23</h3>
                        </div>
                      </div>

                      <div class="clearfix"></div>

                      <div class="row weather-days">
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Mon</h2>
                            <h3 class="degrees">25</h3>
                            <canvas id="clear-day" width="32" height="32"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Tue</h2>
                            <h3 class="degrees">25</h3>
                            <canvas height="32" width="32" id="rain"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Wed</h2>
                            <h3 class="degrees">27</h3>
                            <canvas height="32" width="32" id="snow"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Thu</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="sleet"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Fri</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="wind"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Sat</h2>
                            <h3 class="degrees">26</h3>
                            <canvas height="32" width="32" id="cloudy"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div> 
       
	   </div>
        <!-- /page content -->

        <!-- footer content -->
        <!--<footer style="float:down">
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>-->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/bernii/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/flot/jquery.flot.orderBars.js"></script>
    <script src="js/flot/date.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>
	
   <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
  

	 <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>

  
   <!-- easy-pie-chart -->
    <script src="../vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
	<!--other charts-->

	
	<!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
	
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

	
	<!-- jVectorMap -->
    <script src="js/maps/gdp-data.js"></script>
    <script src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
	
    <!-- Flot -->

	
	<!-- ECharts -->
    <script src="../vendors/echarts/dist/echarts.min.js"></script>
    <script src="../vendors/echarts/map/js/world.js"></script>

	
	 <script 
  src="markerclusterer.js">
</script>
	
  <script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWm0zhqowhkrvXBLACgCTuw-eyebWjkAc&callback=initMap">
    </script>
	
	
	
   <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012,1 ,1 ), 73],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];
     	 var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];		
		
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series:{
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },     
		
		grid: {
     		verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
         
		  colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
           xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          
		  yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          
		  tooltip: false
        });

        function gd(year, month, day) 
		{
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
	
    <!-- /Flot -->
    <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
    <script src="js/maps/gdp-data.js"></script>
	<!--<script src="js/charts/gdp-data.js"></script>-->
    <script>
      $(document).ready(function(){  
	   var handleDataTableButtons = function() {   
		  if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };
	  	  
	      TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
	  
	  
        $('#world-map-gdp').vectorMap({
          map: 'world_mill_en',
          backgroundColor: 'transparent',
          zoomOnScroll: false,
          series: {
            regions: [{
              values: gdpData,
              scale: ['#E6F2F0', '#149B7E'],
              normalizeFunction: 'polynomial'
            }]
          },
          onRegionTipShow: function(e, el, code) 
		  {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
           
		  }
        });
      });
    </script>
    <!-- /jVectorMap -->
    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;
		         
		for (i = list.length; i--;)
          icons.set(list[i], list[i]);
		  icons.play();
      });
	    
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>   
	 Chart.defaults.global.legend = {
        enabled: false   
	 };

	$(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas2"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
	  
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

		
        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
		  
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
		
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
		
		
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
		  
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->
    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      
	  };
	  
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);
		  
      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
   
   </script>
  
 <!-- /gauge.js -->

<!-- easy-pie-chart -->
    <script>
      $(document).ready(function() {
        $('.chart').easyPieChart({
          easing: 'easeOutBounce',
          lineWidth: '6',
          barColor: '#75BCDD',
          onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
          }
        });
        var chart = window.chart = $('.chart').data('easyPieChart');
        $('.js_update').on('click', function() {
          chart.update(Math.random() * 200 - 100);
        });

		
		//hover and retain popover when on popover content
        var originalLeave = $.fn.popover.Constructor.prototype.leave;
        $.fn.popover.Constructor.prototype.leave = function(obj) {
          var self = obj instanceof this.constructor ?
            obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type);
          var container,timeout;
            
          originalLeave.call(this, obj);
          
          if (obj.currentTarget) {
         
     		container = $(obj.currentTarget).siblings('.popover');
            timeout = self.timeout;
            container.one('mouseenter', function() {

			//We entered the actual popover ? call off the dogs
              clearTimeout(timeout);
             
			 //Let's monitor popover content instead
              container.one('mouseleave', function() {			  
                $.fn.popover.Constructor.prototype.leave.call(self, self);
			  });
            });
        };

        $('body').popover({
          selector: '[data-popover]',
          trigger: 'click hover',
          delay: {
            show: 50,
            hide: 400
          }
        });
      });
    </script>
    <!-- easy-pie-chart -->

	<script>
	
	// Doughnut chart
	
	 var options = {
          legend: false,
          responsive: false
        };
	
      var ctx = document.getElementById("canvasDoughnut");
      var
	  data = {
      labels: [
          "Completed",
          "Locked",
          "Refuse",
          "Child Not available",
          "Incompleted"
        ],
        datasets: [{
		
          data: [<?php echo $val1_1;?>, <?php echo $val1_2;?>, <?php echo $val1_3;?>, <?php echo $val1_4;?>,<?php echo $val1_5;?>],
		  
		 backgroundColor:[
            "#455C73",
            "#9B59B6",
            "#BDC3C7",
            "#26B99A",
            "#3498DB"
          ],
		  
		  hoverBackgroundColor: [
            "#34495E",
            "#B370CF",
            "#CFD4D8",
            "#36CAAB",
            "#49A9EA"
          ]      

	   }]
        
	 };

	 
	var canvasDoughnut = new Chart(ctx, {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data:data 
        
	
		});	
		
	</script>
	
	<script>
/*
var mapProp= {
    center:new google.maps.LatLng(24.9038973,-0.120850),
    zoom:5,
	
};
var map=new google.maps.Map(document.getElementById("map"),mapProp);
*/

       /*  var arr= new Array();
         arr.push(24.79846885,67.1428128833);
		 arr.push(24.7961043,67.1383938667);

		 
        var myLatLng = {lat:arr[0],lng:arr[1]}/*{lat:24.79846885 , lng:67.1428128833} */;
		                  
		
	/*	

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'goth'		
	   });

  var coordInfoWindow = new google.maps.InfoWindow();
        coordInfoWindow.setContent(createInfoWindowContent(myLatLng , map.getZoom()));
        coordInfoWindow.setPosition(myLatLng);
        coordInfoWindow.open(map);

        map.addListener('click', function() {
          coordInfoWindow.setContent(createInfoWindowContent(myLatLng , map.getZoom()));
          coordInfoWindow.open(map);
        });
*/

/*
var markers_data = [{
    "latitude": "24.79846885",
    "longitude": "67.1428128833"
}, 
{
    "latitude": "24.7961043",
    "longitude": "67.1383938667"
}, {
    "latitude": "24.7916263",
    "longitude": "67.1417475667"
}, {
    "latitude": "45.722110",
    "longitude": "11.435023"
}, {
    "latitude": "45.391083",
    "longitude": "11.276997"
}, {
    "latitude": "45.691465",
    "longitude": "11.483223"
}, {
    "latitude": "45.659787",
    "longitude": "11.795147"
}, {
    "latitude": "45.720608",
    "longitude": "11.453950"
}, {
    "latitude": "45.718757",
    "longitude": "11.333138"
}, {
    "latitude": "45.607387",
    "longitude": "11.497138"
}, {
    "latitude": "46.099075",
    "longitude": "12.160999"
}, {
    "latitude": "45.523017",
    "longitude": "10.152080"
}, {
    "latitude": "45.408520",
    "longitude": "10.838590"
}, {
    "latitude": "45.717608",
    "longitude": "11.462909"
}, {
    "latitude": "45.395371",
    "longitude": "11.274200"
}, {
    "latitude": "45.555142",
    "longitude": "11.543407"
}, {
    "latitude": "45.693428",
    "longitude": "11.446203"
}, {
    "latitude": "44.661260",
    "longitude": "10.886416"
}, {
    "latitude": "45.530448",
    "longitude": "11.499496"
}, {
    "latitude": "45.530448",
    "longitude": "11.499496"
}, {
    "latitude": "22.318567",
    "longitude": "114.179606"
}, {
    "latitude": "45.443304",
    "longitude": "10.952222"
}, {
    "latitude": "45.836699",
    "longitude": "12.014122"
}, {
    "latitude": "45.803245",
    "longitude": "11.355629"
}, {
    "latitude": "45.722110",
    "longitude": "11.435023"
}, {
    "latitude": "45.803245",
    "longitude": "11.355629"
}, {
    "latitude": "45.836699",
    "longitude": "12.014122"
}, {
    "latitude": "45.779430",
    "longitude": "11.429520"
}, {
    "latitude": "45.803245",
    "longitude": "11.355629"
}];


var geocoder;
var map;
var mapCenter = new google.maps.LatLng(24.8615, 67.0099);


function initialize() {
    //Google map option
            var googleMapOptions =
            { 
    
            	center: mapCenter, // map center
                zoom: 5, //zoom level, 0 = earth view to higher value
                panControl: true, //enable pan Control
                zoomControl: true, //enable zoom control
                zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL //zoom control size   
	
	},
            
    			scaleControl: true, // enable scale control
                mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
                
			};

            map = new google.maps.Map(document.getElementById("map"), googleMapOptions);
           
		   var marker = new google.maps.Marker({
                position: mapCenter,
                map: map
            });

            var infowindow = new google.maps.InfoWindow({
                content:"Center"
            });

            infowindow.open(map,marker);
   update(markers_data);

	}
 function update(markers) {
        var infowindow = new google.maps.InfoWindow(),
        marker, i;

            for (i = 0; i < markers.length; i++) {
            var lat = markers[i].latitude;
            var lng = markers[i].longitude;
			
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat, lng),
                map: map
            });
			
            google.maps.event.addListener(marker, 'click', (function(marker, lat, lng) {

                        return function() {
                            infowindow.setContent(lat + " " + lng);
                            infowindow.open(map, marker);
                        }
                    })
					(marker, lat, lng));
        }
}
google.maps.event.addDomListener(window, 'load', initialize);
*/
</script>

  <script>
     function initMap() {	  
        var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 4,
		center: {lat: 30.3753, lng: 69.3451}        
		});
		
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		
		  var markers =locations.map(function(location, i){
          return new google.maps.Marker({
          position: location,          
   		  label: labels[i % labels.length]		  
		  });
        });

		
       // Add a marker clusterer to manage the markers.
    	

    var markerCluster = new MarkerClusterer(map, markers,
    {
	imagePath:'images/m'

	});
	  
	 }

var locations= [
      	{lat:33.9429616666666 , lng: 71.5509166666666},
        {lat: 33.9417283333333, lng: 71.5528133333333},
        {lat: 33.9423666666666, lng: 71.5489999999999},
        {lat: 33.9434866666666, lng:71.549085},
		{lat: 24.79846885,lng: 67.1428128833},
        {lat: 24.7961043, lng: 67.1383938667},
        {lat: 24.7916263, lng: 67.1417475667}  
]; 
   </script> 

	
<script>

Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Mothly Visits Status'
    },
    subtitle: {
        text: 'Performance Indicator'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Temperature (°C)'
        }
    },
    plotOptions: {
        
		line: {
            dataLabels: {
                enabled: true
            },
        
		enableMouseTracking: false
        }
    },
series: [{
        name: 'Quetta',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
		
    },

	{
	    name: 'KPK',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    },
	
  
  
  {
	name:'Karachi',
	data: [4.9, 5.2, 6.7, 9.5, 12.0, 15.5, 16.1, 17.5, 14.2, 10.3, 6.6, 5.8]	
	}
	
	]
	});
	
	
</script>
	
<script src="markerclusterer.js">
    </script>
  

  
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWm0zhqowhkrvXBLACgCTuw-eyebWjkAc&callback=initMap">
    </script>
	
	
	<script>

	var dataviewer = <?php echo $comp;?>;
    var in_progress = <?php echo $in_progress;?>;
	var not_started = <?php echo $not_started;?>;		
	var districts= <?php echo  $get;?>; 
   Highcharts.chart('stackbar', {
   colors: ['lightgreen','IndianRed','DodgerBlue','Goldenrod','gray'],
   chart: {
        type: 'column'
    },

    title: {
        text: ''
    },
     
   xAxis: {
       categories:districts
		
		},
	
	
    yAxis: {
        min:0,
		//max:100, 
      

	  title: {
            text: ''
        },
		
    stackLabels:{
            enabled: false,
        
		style: {
             
			 fontWeight: '100',
             color: (Highcharts.theme && Highcharts.theme.textColor) || 'red'					    				
		}
      
	   
	   
	   }
		
		
    },
	
   legend: {   
        align: 'right',
        x: -30,    
   
   verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#E9967A',
        borderWidth: 0,
        shadow: false
    },
    
	
	
	tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
	plotOptions:{
        		
		column:{
            stacking: 'normal',
            shadow:false,
            pointWidth: 40,
            pointPadding:0,
				dataLabels: {         
     			enabled: true,
                color:'black',
				
				 style: {
          fontWeight:'bold',
          textShadow: "",
        }
		}
		
        }
    },

   
   series: 	

	[	
	
	{   name: 'completed',
        data: dataviewer		
    },

	{   name: 'partially completed',
        data: in_progress		
    },

	{   name: 'Not started',
        data: not_started		
    }
	]	
	});

</script>
	
	<script>
	    var echartFunnel = echarts.init(document.getElementById('echart_pyramid'), theme);

      echartFunnel.setOption({
        title: {
          text: 'Echart Pyramid Graph',
          subtext: 'Subtitle'
        },
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
          show: true,
          feature: {
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        legend: {
          data: ['Something #1', 'Something #2', 'Something #3', 'Something #4', 'Something #5'],
          orient: 'vertical',
          x: 'left',
          y: 'bottom'
        },
        calculable: true,
        series: [{
          name: '???',
          type: 'funnel',
          width: '40%',
          data: [{
            value: 60,
            name: 'Something #1'
          }, {
            value: 40,
            name: 'Something #2'
          }, {
            value: 20,
            name: 'Something #3'
          }, {
            value: 80,
            name: 'Something #4'
          }, {
            value: 100,
            name: 'Something #5'
          }]
        }]
      });
	</script>
	
	
	
	
	
	
 </body>
</html>