<?php
include_once("./dbConnect.php");
//$username = $_POST['username'];
//$password = $_POST['password'];
session_start();
session_unset();
$username = $_POST['username'];
$password = $_POST['password']; 

print "user $username passwd $password";
$pwd = ($password);
$sql = "SELECT * FROM `user-list` WHERE `u-name` = '".$username."' AND `u-pwd` = '".$pwd."'";
//echo $sql ;
$DATA = selectData( $sql );
print_r($DATA);
// print($DATA[1]['u-is-admin']);
// print($DATA[1]['u-is-researcher']);
// print($DATA[1]['u-is-officer']);
// print($DATA[1]['u-is-farmer']);
if(sizeof($DATA) == 2)
{
    
    if($DATA[1]['u-is-admin'] == 1)
    {
        header("location:./view/UserProfile/UserProfile.php");
        $typeid = 1 ;
    }
    else if($DATA[1]['u-is-researcher'] == 1)
    {
        header("location:./view/UserProfile/UserProfile.php");
        $typeid = 2;
    }
    else if($DATA[1]['u-is-officer'] == 1)
    {
        header("location:./view/UserProfile/UserProfile.php");
        $typeid = 3 ;
    }
    else if($DATA[1]['u-is-farmer']== 1)
    {   
        header("location:./view/UserProfile/UserProfile.php");
        $typeid = 4;
    }
    else {
        //header("location:index.php");
        

    }
    $_SESSION[md5('LAST_ACTIVITY')] = $_SERVER['REQUEST_TIME'];

    $_SESSION[md5('username')] = $username;
    $_SESSION[md5('typeid')] = $typeid;
    $_SESSION[md5('user')]   = $DATA;
    //print_r($_SESSION[md5('user')]);
}
else
{
    //echo "xxxx";
    // header("location:index.php");
}
//print $_SESSION[md5('username')];
//$_SESSION[md5('userid')]   = $userid;
//header("location:OtherUsersList.php");
?>
