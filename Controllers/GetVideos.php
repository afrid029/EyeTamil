<?php 
SESSION_START();
include('DBConnectivity.php');

$query = "SELECT * from stream order by ID desc LIMIT 1";

$str = mysqli_query($db, $query);

$rowStr = mysqli_fetch_assoc($str);

$query = "SELECT *
FROM recordedaudio
ORDER BY date desc";
$result = mysqli_query($db, $query);
$html = '';

$html .= "<div class='buttons'>
            <div onclick=handleModel('audio',true)><i class='fa-solid fa-plus'></i> News</div>
        </div>";

   

        // $_GET['role'] === 'superadmin'
    if($_SESSION['role'] === 'superadmin'){
        $html .= "<div class='program'>
        <h3>Radio Stream key</h3>
        <div class='program-bar'>
            <div style = 'text-transform : none' id='streamKey' class='next-slot'>
                " . $rowStr['stream'] . "
            </div>
            <div class='modify'>
                    <div onclick=handleModel('edit-stream',true) class='edit'>
                        Edit
                    </div>
    
            </div>
        </div>
        </div>";
    }


if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        $html .= "
        <div id='". $row['ID'] ."' class='program'>
            <h3>". $row['description'] ."</h3>
            <div class='program-bar'>
                <div class='next-slot'>
                    ". $row['date'] ."
                </div>
                <div class='modify'>
                    <div onclick=handleModel('edit-audio',true,'". $row['ID'] ."') class='edit'>
                        Edit
                    </div>
                    <div onclick=handleModel('delete-model',true,'". $row['ID'] ."','audio') class='delete'>
                        Delete
                    </div>
                </div>
            </div>
        </div>
        ";
    }

} else {
    $html .= "<div style = 'margin-left : 15px'>No Recorderd Audio Found</div>";
}

mysqli_close($db);


        echo json_encode([
            'html' => $html
        ]);
?>