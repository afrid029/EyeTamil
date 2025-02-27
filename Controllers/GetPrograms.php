<?php
SESSION_START();
include('DBConnectivity.php');

$query = "SELECT 
e.ID as event, 
e.name, 
e.rj_id,
e.notes as announcement, 
e.announceStatus
FROM event e
ORDER BY name";

$html = '';
$result = mysqli_query($db, $query);

$query = "SELECT * FROM users order by role";
$result1 = mysqli_query($db, $query);

$html .= " <div class='buttons'>
            <div onclick=handleModel('announcement',true)><i class='fa-solid fa-plus'></i> Announcements </div>
            <div onclick=handleModel('user',true)><i class='fa-solid fa-plus'></i> Users</div>
            <div onclick=handleModel('program',true)><i class='fa-solid fa-plus'></i> Programs</div>
        </div>";


     
        // $_GET['role'] === 'superadmin'
    if($_SESSION['role'] === 'superadmin'){
        $html .= "<h3 style='margin-left: 5%;'>Users</h3>";

        while($row = mysqli_fetch_assoc($result1)){
            $class = $row['active'] ? 'active-status' : 'deactive-status';
            $staus = $row['active'] ? 'Active' : 'Disabled';

            $html .= "<div class='program'>
            <h3>". $row['ID'] ."</h3>
            <div class='program-bar'>
                <div class='next-slot user-status'>
                    <div class = '". $class ."'></div>
                    <div>Status : ". $staus ."</div>
                   
                </div>

                 <div class='next-slot'>
                    
                   ". $row['role'] ."
                </div>
                <div class='modify'>
                    <div onclick=handleModel('edit-user',true,'". $row['ID'] ."') class='edit'>
                        Edit
                    </div>
                </div>
            </div>
        </div>";
        }
        $html .= "<h3 style='margin-left: 5%;'>Programs</h3>";
    }






if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $status = $row['announceStatus'] ? 'Pending' : 'Noted';
       
       $prgrm = json_encode($row['name']);

        $html .= "
        <div class='program'>
            <h3>". $row['name'] ."</h3>
            <div class='program-bar'>
                <div class='next-slot modify'>
                    <div onclick=\"handleModel('schedule',true,'" . $row['event'] ."','". $row['name'] ."')\" class='edit'>View Schedule</div>
                </div>
                <div class='rj'>
                    ". $row['rj_id'] ."
                </div>
                <div class='modify'>
                    <div onclick=handleModel('edit-program',true,'" . $row['event'] ."') class='edit'>
                        Edit
                    </div>
                    <div onclick=handleModel('delete-model',true,'" . $row['event'] ."','program') class='delete'>
                        Delete
                    </div>
                    <div onclick=handleModel('cover-model',true,'" . $row['event'] ."') class='image-update'>
                        Change Cover
                    </div>
                </div>
            </div>
            <hr>";

            $html .=   $row['announcement'] ? "
             <div class='notes'>
                <div id='". $row['event']  ."'>". $row['announcement']  ."</div>
                <div  onclick=handleModel('edit-announcement',true,'" . $row['event'] ."') class='note-edit'>
                Edit
                </div>
                <div class='anounce-status'>
                ". $status ."
                </div>

            </div>
            " : "
            <div class='notes'>
                No Announcements
            </div>

            ";

        $html .= " </div>";
    }
}else {

    $html .= "<div style = 'margin-left : 15px'>No Programs Created</div>";
}

mysqli_close($db);


echo json_encode([
    'html' => $html
]);
