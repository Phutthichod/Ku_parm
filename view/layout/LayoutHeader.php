<!DOCTYPE html>
<html lang="en" style="overflow-y: hidden;">

<!-- Setting Session Variable -->
<?php 
    include_once("../../dbConnect.php"); 

    //Set pointer menu
    $sql = "SELECT `mm-mainmenu`,`mm-submenu` ";
    $sql = $sql." FROM `main-menu-list` as L INNER JOIN `web-menu` as M ";
    $sql = $sql." ON L.`wm-id`= M.`wm-id` ";
    $sql = $sql." WHERE `ut-id`='".$idUT."'";
    $sql = $sql." && `wm-alias`='".$CurrentMenu."'";
  
    $DATA = selectData( $sql );

    $selectedMenu1 = $DATA[1]['mm-mainmenu'];
    $selectedMenu2 = $DATA[1]['mm-submenu'];

    //Create menu list
    $sql = "SELECT `mm-mainmenu`,`mm-submenu`,`wm-name`, `wm-alias`, `wm-page`, `wm-icon`, `wm-note`";
    $sql = $sql." FROM `main-menu-list` as L JOIN `web-menu` as M ";
    $sql = $sql." ON L.`wm-id`=M.`wm-id` ";
    $sql = $sql." WHERE L.`ut-id`=".$idUT;
    $sql = $sql." ORDER BY L.`mm-mainmenu`,L.`mm-submenu`";
  
    $DATA = selectData( $sql );

    $strMenu = "";

    for($i=1;$i<=$DATA[0]['numrow'];$i++)
    {
      if( $DATA[$i]['mm-submenu']==0 )
      { 
        // main menu
        if( $DATA[$i]['mm-mainmenu']==$selectedMenu1 )
        {
          // active main menu
          $classType = " class='nav-item active' ";
        } 
        else    
        {
          $classType = " class='nav-item' ";
        }
  
        if( $DATA[$i]['wm-icon']=="")
        {
          $icon = "favorite";
        }  
        else
        {    
          $icon =  $DATA[$i]['wm-icon'];
        }

          
        if(($i+1 <= $DATA[0]['numrow'] && $DATA[$i]['mm-mainmenu'] != $DATA[$i+1]['mm-mainmenu']) || $DATA[$i]['wm-name'] == "ออกจากระบบ")
        {
          $url	= $DATA[$i]['wm-alias']."/".$DATA[$i]['wm-page'];

          if($DATA[$i]['wm-name'] == "กิจกรรมต่างๆ" || $DATA[$i]['wm-name'] == "การจัดการผู้ใช้" || $DATA[$i]['wm-name'] == "การจัดการศัตรูพืช")
          {
            $strMenu .= " <li ".$classType." id='activityList'>
                            <a class='nav-link' href='../".$url."'>
                              <i class='material-icons'>".$icon."</i>
                              <span>".$DATA[$i]['wm-name']."</span>
                            </a>
                          </li>";
          }
          else
          {
            $strMenu .= " <li ".$classType.">
                            <a class='nav-link' href='../".$url."'>
                              <i class='material-icons'>".$icon."</i>
                              <span>".$DATA[$i]['wm-name']."</span>
                            </a>
                          </li>";
          }
        }
        else
        {    

          if($DATA[$i]['wm-name'] == "กิจกรรมต่างๆ" || $DATA[$i]['wm-name'] == "การจัดการผู้ใช้" || $DATA[$i]['wm-name'] == "การจัดการศัตรูพืช")
          {
            $strMenu .= " <li class='nav-item' id='activityList'>
                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#link-".$i."' aria-expanded='true' aria-controls='link-".$i."'>
                              <i class='material-icons'>".$icon."</i>
                              <span>".$DATA[$i]['wm-name']."</span>
                            </a>
                            <div id='link-".$i."' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
                              <div class=' py-2 collapse-inner rounded' style='border-left: 2px solid white; border-radius: 0% !important;'>";
          }
          else
          {
            $strMenu .= " <li class='nav-item'>
                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#link-".$i."' aria-expanded='true' aria-controls='link-".$i."'>
                              <i class='material-icons'>".$icon."</i>
                              <span>".$DATA[$i]['wm-name']."</span>
                            </a>
                            <div id='link-".$i."' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
                              <div class=' py-2 collapse-inner rounded' style='border-left: 2px solid white; border-radius: 0% !important;'>";
          }
        }
  
      }
      else
      { 
        //sub menau
        if( $DATA[$i]['mm-submenu']==$selectedMenu2 ) 
        {
          // active sub menu
          $classType = "class='collapse-item active'";
        }
        else
        {   
          $classType = "class='collapse-item'";
        }
  
        $strMenu .= "<a ".$classType." href='../".$DATA[$i]['wm-alias']."/".$DATA[$i]['wm-page']." ' style='color:white;'>".$DATA[$i]['wm-name']."</a>";
  
        if( $DATA[$i]['mm-mainmenu'] != $DATA[$i+1]['mm-mainmenu'] )
        {
          $strMenu .= "</div>
                      </div>
                    </li>";
        }

      }
    }//each menu  
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link rel="icon" href="../../picture/cowicon.png"> -->
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

  <title>ระบบติดตามงานจัดการสวนปาล์มน้ำมัน</title>

  <?php include_once("MainCSS.php"); ?>
  <style>
    h1, h2, h3, h4, h5, h6 ,span,p,label,div{
      font-family: 'Kanit', sans-serif;
    }

    #accordionSidebar{
      background-color: #E91E63;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" style="cursor:default;">
        <div class="sidebar-brand-icon rotate-n-15">
            <!-- <i class="fas fa-laugh-wink"></i>ระบบบริหารจัดการแปลงปลูก -->
            <img src="" style="width: 80px; transform: rotate(15deg);">
        </div>
        <div class="sidebar-brand-text mx-3">ปาล์มน้ำมัน</div>
      </a>


      <!-- Divider -->
      <hr class="sidebar-divider my-0">
        <div style="overflow-y: scroll; overflow-x: hidden; max-height:75vh; margin-right: 1%;" id="barP">
          <?php echo $strMenu; ?>
        </div>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="background-color: #EBF5FB;">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul>
            <div class="text-left" style="padding-top:20px;color:#E91E63">
              <h5>ระบบติดตามงานจัดการสวนปาล์มน้ำมัน</h5>
            </div>
          </ul>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto" >

            
            <div class="topbar-divider d-none d-sm-block"></div>
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="../../picture/default.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../UserProfile/UserProfile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../Logout.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" style="overflow-y:scroll; max-height:100vh; padding-top: 1.5rem!important; padding-bottom: 6.5rem!important;">