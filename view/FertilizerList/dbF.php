<?php 
require "../../dbConnect.php";
$request = $_POST['request'];
// mkdir("path/to/my/dir", 0700);

switch($request){
    case 'select': //--------------------------case select ------------------------------
        $sql = "SELECT * FROM `db-fertilizer`";
        
        print_r(json_encode(select($sql)));
        break;
    case 'update': //--------------------------case update ------------------------------
        $Name = $_POST['name'];
        $Alias = $_POST['alias'];
        $Unit = $_POST['exampleRadios3'];
        $Usage = $_POST['exampleRadios1'];
        $FID = $_POST['id'];
        $t=time();
        $sql = '';
        $Start = '';
        $End =  '';
        // ------------------------------------ CONDITION DATA ---------------------------------
        if(isset($_POST['start'])&&$_POST['exampleRadios2']==2){
            $Start = $_POST['start'];
            $End = $_POST['end'];
        }
        else{
            $Start = '0101';
            $End = '3112';
        }
        $EQ1 = $_POST['a'];
        $EQ2 = "";
        if($Usage == 3){
            $EQ2  = 0;
        }
        else{
            $EQ2 = $_POST['b']; 
        }
        // ------------------------------------ update db-fertilizer` ---------------------------------
        $sql_del = "DELETE FROM `db-fercondition` WHERE `FID` = $FID;";
        $sql_insert = '';
        if($_FILES['icon']['name'] == ""){
            $sql = "UPDATE `db-fertilizer` 
            SET `Start` = '$Start', `End`= '$End', `Name` = '$Name',`Alias` = '$Alias', `Usage` = $Usage,
            `EQ1` = $EQ1, `EQ2` = $EQ2 ,`Unit` = $Unit
            WHERE `FID` = $FID;";
        }
        else{
            $file = $_FILES['icon']['name'];
            $type = end(explode(".", "$file"));
            $Icon = "$t.$type";
            $sql = "UPDATE `db-fertilizer` 
            SET `Start` = '$Start', `End`= '$End', `Name` = '$Name',`Alias` = '$Alias', `Usage` = $Usage,
            `EQ1` = $EQ1, `EQ2` = $EQ2 ,`Unit` = $Unit ,`Icon` = '$Icon'
            WHERE `FID` = $FID;";
            if(move_uploaded_file($_FILES["icon"]["tmp_name"],"../../icon/fertilizer/".$Icon))
            {
            
            }
            insertLogIcon(); //-------------insert log icon ------------------
        }
         // ------------------------------------ update db fer condition` ---------------------------------
        updateData($sql);
        deletedata($sql_del);
        $size = 1;
        $Condition = $_POST['condition'];
        for($i = 0 ; $i < sizeof($Condition) ;$i++){
            if($Condition[$i] != ''){
                $sql_insert = "INSERT INTO `db-fercondition` (`FID`,`Order`,`Condition`) VALUES ($FID,$size,'$Condition[$i]');";
                addinsertData($sql_insert);
                $size++;
            }
        }
        print_r($Condition);
        // ------------------------------------ insert log ---------------------------------
        insertLog();
        break;
    case 'insert':
        $Name =  $_POST['name_insert'];
        $Alias = $_POST['alias_insert'];
        $t=time();
        $file = $_FILES['icon_insert']['name'];
        $type = end(explode(".", "$file"));
        $Icon = "$t.$type";
        $sql = "INSERT INTO `db-fertilizer` (`Name`,`Icon`,`Alias`) VALUES ('$Name','$Icon','$Alias');";
        
        
        $insertData = addinsertData($sql);
        $sql = "SELECT `FID` FROM `db-fertilizer` ORDER BY `FID` DESC LIMIT 1";
        $id = selectDataOne($sql)['FID'];
        // echo exec("mkdir F_icon/fertilizer");
        mkdir("../../icon/fertilizer/$id");
        if(move_uploaded_file($_FILES["icon_insert"]["tmp_name"],"../../icon/fertilizer/$id/$Icon"))
        {
            
        }
        // ------------------------------------ insert log ---------------------------------
        insertLog();
        insertLogIcon(); //-------------insert log icon ------------------
        break;
    case 'selectCondition':
        $id = $_POST['id'];
        $sql = "SELECT * FROM `db-fercondition` WHERE `FID` = $id";
        
        print_r(json_encode(select($sql)));
        break;
        case 'delete': //--------------------------case delete ------------------------------
}
function insertLog(){
    $sqlDIM_Fertilizer = '';
    $sqlLog_Fertilizer = "INSERT INTO `db-fertilizer` (`Name`,`Icon`) VALUES ('$Name','$Icon');";
    $sqlLog_Fer_Condition = "INSERT INTO `db-fertilizer` (`Name`,`Icon`) VALUES ('$Name','$Icon');";
}
function insertLogIcon(){
    $sql = '';
}
?>