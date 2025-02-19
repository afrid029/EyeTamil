<?php 

include('DBConnectivity.php');

$role = $_GET['role'];

if($role == 'admin'){
    $query = "SELECT s.*, e.name FROM 
    songrequest s JOIN event e ON s.event_ID = e.ID
    ORDER BY updatedAT asc";
} else {
    $ID = urldecode($_GET['ID']);
    $query = "SELECT s.*, e.name FROM 
    songrequest s JOIN event e ON s.event_ID = e.ID
    WHERE e.rj_id = '$ID'
    ORDER BY updatedAT asc";
}


$result = mysqli_query($db, $query);

$html = '';
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $html .= "
        <div class='program'>
            <div class='program-bar request'>
                <h4>" . $row['reqname'] . "</h4>
                <h5>" . $row['name'] . "</h5>
            </div>
            <div class='request-info'>
                <div class='name'>
                    <p>From :</p>
                    <p>". $row['reqfrom'] ."</p>
                </div>
                <div class='name'>
                    <p>Song :</p>
                    <p>" . $row['song'] ."</p>
                </div>
                <div class='name'>
                    <p>Movie :</p>
                    <p>" . $row['movie'] . "</p>
                </div>
                <div class='checked'>

                    <input onclick=checkTicked('conform_". $row['ID'] ."') type='checkbox' name='conform' id='conform_". $row['ID'] ."'>
                    <button onclick=closeRequest('" . $row['ID'] . "') disabled class='btn conform_". $row['ID'] ."'>Viewed</button>
                </div>
            </div>
            
            <div class='desc-info'>
            <hr>
                <span style = 'font-weight : 400'> Request Description : </span>" . $row['description'] ."

                <div class = 'req-time'>" . $row['updatedAt'] . "</div>
            </div>
        
        </div>";
    }

} else {
    $html .= "<div style = 'margin-left : 15px'>No Song Requests Found</div>";
}



        echo json_encode([
            'html' => $html
        ]);
?>