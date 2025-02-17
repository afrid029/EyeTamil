<?php 

$html = '';

$html .= "
<div class='buttons'>
            <div onclick=handleModel('announcement',true)><i class='fa-solid fa-plus'></i> Announcements </div>
            <div onclick=handleModel('user',true)><i class='fa-solid fa-plus'></i> Users</div>
            <div><i class='fa-solid fa-plus'></i> Programs</div>
        </div>
        <div class='program'>
            <h3>Program 1</h3>
            <div class='program-bar'>
                <div class='next-slot'>
                    Monday 09:00 - 10:00
                </div>
                <div class='rj'>
                    Radio Jury
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
            <hr>
            <div class='notes'>
                You have Thios notes today
                <div class='note-edit'>
                        Edit
                    </div>
            </div>
        </div>
        <div class='program'>
            <h3>Program 1</h3>
            <div class='program-bar'>
                <div class='next-slot'>
                    Monday 09:00 - 10:00
                </div>
                <div class='rj'>
                    Radio Jury
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
            <hr>
            <div class='notes'>
                You have Thios notes today
                <div class='note-edit'>
                        Edit
                    </div>
            </div>
        </div>
        <div class='program'>
            <h3>Program 1</h3>
            <div class='program-bar'>
                <div class='next-slot'>
                    Monday 09:00 - 10:00
                </div>
                <div class='rj'>
                    Radio Jury
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
            <hr>
            <div class='notes'>
                You have Thios notes today
                <div class='note-edit'>
                        Edit
                    </div>
            </div>
        </div>
        <div class='program'>
            <h3>Program 1</h3>
            <div class='program-bar'>
                <div class='next-slot'>
                    Monday 09:00 - 10:00
                </div>
                <div class='rj'>
                    Radio Jury
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
            <hr>
            <div class='notes'>
                You have Thios notes today
                <div class='note-edit'>
                        Edit
                    </div>
            </div>
        </div>
 ";


        echo json_encode([
            'html' => $html
        ]);
?>