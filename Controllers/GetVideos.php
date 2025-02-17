<?php 
$html = '';

$html .= "<div class='buttons'>
            <div><i class='fa-solid fa-plus'></i> News</div>
        </div>

        <div class='program'>
            <h3>Radio Stream key</h3>
            <div class='program-bar'>
            <div class='next-slot'>
                http://streams.radio.co/s937ac5492/listen/
                </div>
                <div class='modify'>
                    <div class='edit'>
                        Edit
                    </div>
    
                </div>
            </div>
        </div>

        
        <div class='program'>
            <h3>Program 1</h3>
            <div class='program-bar'>
                <div class='next-slot'>
                    2025/02/12
                </div>
                <div class='modify'>
                    <div class='edit'>
                        Edit
                    </div>
                    <div class='delete'>
                        Delete
                    </div>
                    <div class='image-update'>
                        Change Cover
                    </div>
                </div>
            </div>
        
        </div>
        <div class='program'>
            <h3>Program 1</h3>
            <div class='program-bar'>
                <div class='next-slot'>
                    2025/02/12
                </div>
                <div class='modify'>
                    <div class='edit'>
                        Edit
                    </div>
                    <div class='delete'>
                        Delete
                    </div>
                    <div class='image-update'>
                        Change Cover
                    </div>
                </div>
            </div>
         
        </div>
        <div class='program'>
            <h3>Program 1</h3>
            <div class='program-bar'>
                <div class='next-slot'>
                    2025/02/12
                </div>
                <div class='modify'>
                    <div class='edit'>
                        Edit
                    </div>
                    <div class='delete'>
                        Delete
                    </div>
                    <div class='image-update'>
                        Change Cover
                    </div>
                </div>
            </div>
            
        </div>";

        echo json_encode([
            'html' => $html
        ]);
?>