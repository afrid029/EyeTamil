<?php 

$html = '';
$html .= "
<div class='program'>
            <div class='program-bar request'>
                <h4>RequesterName</h4>
                <h5>Event name</h5>
            </div>
            <div class='request-info'>
                <div class='name'>
                    <p>Name :</p>
                    <p>Afrid</p>
                </div>
                <div class='name'>
                    <p>From :</p>
                    <p>Kalmunai, Sri Lanka</p>
                </div>
                <div class='name'>
                    <p>Song :</p>
                    <p>Kannukkulle ennai vaithen</p>
                </div>
                <div class='name'>
                    <p>Movie :</p>
                    <p>Kannum Kannum Kollai adithal</p>
                </div>
                <div class='checked'>
                    <input onclick='checkTicked()' type='checkbox' name='conform' id='conform'>
                    <button disabled class='btn'>Viewed</button>
                </div>
            </div>
            <div class='desc-info'>
                Description of song dedication
            </div>
        
        </div>
        
        <div class='program'>
            <div class='program-bar request'>
                <h4>RequesterName</h4>
                <h5>Event name</h5>
            </div>
            <div class='request-info'>
                <div class='name'>
                    <p>Name :</p>
                    <p>Afrid</p>
                </div>
                <div class='name'>
                    <p>From :</p>
                    <p>Kalmunai, Sri Lanka</p>
                </div>
                <div class='name'>
                    <p>Song :</p>
                    <p>Kannukkulle ennai vaithen</p>
                </div>
                <div class='name'>
                    <p>Movie :</p>
                    <p>Kannum Kannum Kollai adithal</p>
                </div>
                <div class='checked'>
                    <input onclick='checkTicked()' type='checkbox' name='conform' id='conform'>
                    <button disabled class='btn'>Viewed</button>
                </div>
            </div>
            <div class='desc-info'>
                Description of song dedication
            </div>
        
        </div>
        
        <div class='program'>
            <div class='program-bar request'>
                <h4>RequesterName</h4>
                <h5>Event name</h5>
            </div>
            <div class='request-info'>
                <div class='name'>
                    <p>Name :</p>
                    <p>Afrid</p>
                </div>
                <div class='name'>
                    <p>From :</p>
                    <p>Kalmunai, Sri Lanka</p>
                </div>
                <div class='name'>
                    <p>Song :</p>
                    <p>Kannukkulle ennai vaithen</p>
                </div>
                <div class='name'>
                    <p>Movie :</p>
                    <p>Kannum Kannum Kollai adithal</p>
                </div>
                <div class='checked'>
                    <input onclick='checkTicked()' type='checkbox' name='conform' id='conform'>
                    <button disabled class='btn'>Viewed</button>
                </div>
            </div>
            <div class='desc-info'>
                Description of song dedication
            </div>
        
        </div>
        
        <div class='program'>
            <div class='program-bar request'>
                <h4>RequesterName</h4>
                <h5>Event name</h5>
            </div>
            <div class='request-info'>
                <div class='name'>
                    <p>Name :</p>
                    <p>Afrid</p>
                </div>
                <div class='name'>
                    <p>From :</p>
                    <p>Kalmunai, Sri Lanka</p>
                </div>
                <div class='name'>
                    <p>Song :</p>
                    <p>Kannukkulle ennai vaithen</p>
                </div>
                <div class='name'>
                    <p>Movie :</p>
                    <p>Kannum Kannum Kollai adithal</p>
                </div>
                <div class='checked'>
                    <input onclick='checkTicked()' type='checkbox' name='conform' id='conform'>
                    <button disabled class='btn'>Viewed</button>
                </div>
            </div>
            <div class='desc-info'>
                Description of song dedication
            </div>
        
        </div>";

        echo json_encode([
            'html' => $html
        ]);
?>