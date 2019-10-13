<?php 
require "../../dbConnect.php";
connectDB();
$request = $_POST['request'];
$sql = '';
$table1 = "DB-FertilizerList";
$table2 = "DB-ferCondition";
$dataUpdate = json_decode($_POST['dataUpdate']);
$dataInsert = json_decode($_POST['dataInsert']);
$dataDelete = json_decode($_POST['dataDelete']);
switch($request){
    case 'select':
        $sql = "select * $table";
        select($sql);
        break;
    case 'update':
        $sql = "UPDATE $table1 
        SET 'Start' = $data->Start, 'End'= $data->End, 'Name' = $data->Name, 'Usage' = $data->Usage, 'Icon' = $data->Icon, 
        'EQ1' = $data->EQ1, 'EQ2' = $data->EQ2 , 'Modify' = $data->Modify
        WHERE FID = $data->FID;";
        update($sql);
        $sql = "UPDATE $table2
        SET 'Condition' = $data->Condition, 'Order' = $data->Order 
        WHERE 'FID' = $data->FID";
        update($sql);
        break;
    case 'delete':
        $sql = "DELETE FROM  $table2 WHERE 'FID' = $id";
        delete($sql);
        $sql = "DELETE FROM  $table1 WHERE 'FID' = $id";
        delete($sql);
        break;
    case 'insert':
        // $sql = "INSERT INTO $table1 ('Name', 'Start', 'End', 'Usage', 'Icon', 'EQ1','EQ2')
        // VALUES ($data->Name,b$data->Start, $data->End, $data->Usage, $data->Icon, $data->EQ1,$data->EQ2);";
        $sql = "INSERT INTO $table1 ('Name','Icon')
        VALUES ($data->Name,$data->Icon);";
        insert($sql);
        break;
}
?>