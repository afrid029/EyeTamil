<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eye Tamil FM | RJ Board</title>
    <link rel="icon" type="image/png" href="/Assets/Images/logo.png" />
    <script src="https://kit.fontawesome.com/a10acb0cd6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Lexend:wght@100..900&family=Monomakh&family=Noto+Sans+Tamil:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="Assets/CSS/dashboard.css" />
    <link rel="stylesheet" href="Assets/CSS/Form.css" />

</head>

<body>
    
<?php
    SESSION_START();
    if (isset($_SESSION['fromAction']) && $_SESSION['fromAction'] === true) { ?>


        <div class="alert-container" id="alertSecond">
            <div class="alert" id="alertContSecond">
                <p><?php echo $_SESSION['message'] ?></p>
            </div>
        </div>

        <?php
        if ($_SESSION['status'] === true) {
            echo "<script>document.getElementById('alertContSecond').style.backgroundColor = '#1D7524';</script>";
        } else {
            echo "<script>document.getElementById('alertContSecond').style.backgroundColor = '#E44C4C';</script>";
        }
        ?>
        <script>
            setTimeout(() => {
                document.getElementById('alertSecond').style.display = 'flex';
            }, 2000);

            setTimeout(() => {
                document.getElementById('alertSecond').style.display = 'none';
            }, 7000);
        </script>
    <?php
    }
    $_SESSION['fromAction'] = false;

    if (!isset($_COOKIE['user'])) {
        header('Location: /');
    } else {

        $data = base64_decode($_COOKIE['user']);

        // Extract the IV (the first 16 bytes)
        $iv = substr($data, 0, 16);

        // Extract the encrypted email (the rest of the string)
        $encryptedData = substr($data, 16);
        $key = '7f8b68e0133a19cce9fa5b7c440c788bf6c5679a3e7e3a4575b99f941607d3b7';
        // Decrypt the email using AES-256-CBC decryption
        $decryptedData = openssl_decrypt($encryptedData, 'aes-256-cbc', $key, 0, $iv);

        // $query = "SELECT * from users where email = '$decryptedEmail'";
        $passedArray = unserialize($decryptedData);
        // $result = mysqli_query($db, $query);

        if ($passedArray['role'] === 'RJ') {
            $_SESSION['ID'] = $passedArray['ID'];
            $_SESSION['role'] = $passedArray['role'];
        } else {
            header('Location: /');
        }
    }

    ?>

    <!-- View Schedule Model -->

    <div id="schedule" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Program Name</h3>
                <div onclick="handleModel('schedule',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <div class="schedule-body">
                
            </div>
        </div>
    </div>

     <!-- Cover Update Model -->

     <div id="cover-model" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Update Cover</h3>
                <div onclick="handleModel('cover-model',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form class="form" id="cover-form" method="post">

                <input type="text" hidden name="ID" id="cover-id">
                <div class="FormRow">
                    <label for="cover">Update Cover</label>
                    <input type="file" name="image" id="cover" accept="image/*" required>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="cover-submit"
                        name="cover-submit"
                        class="submit">
                        Update
                    </button>

                    <button
                        style="display: none;"
                        id="cover-submiting"
                        disabled="true"
                        class="submit"> Updating...
                    </button>
                </div>
            </form>

        </div>
    </div>

    <div class="alert-container" id="alert">
        <div class="alert" id="alertCont">
            <p id="alert-text"></p>
        </div>
    </div>

    <div class="nav">

        <img src="/Assets/Images/borderlogo.png" alt="" />

        <div class="ul">

            <div onclick="gotToHome()"><i class="fa-solid fa-house" style="color: #e2e3e4;"></i></div>
            <div><a href="/logoff">Logout</a></div>

        </div>
    </div>

    <div class="body">
        <div id="program" class="program">
            <h3></h3>
            <div class="program-bar">
                <div class="next-slot modify">
                    <div onclick="handleModel('schedule',true)" class='edit'>View Schedule</div>
                </div>

                <div class='rj'>
                    <?php echo $_SESSION['ID']; ?>
                </div>
                <div class='modify'>
                    <div onclick="handleModel('cover-model',true)" class='image-update'>
                        Change Cover
                    </div>
                </div>
            </div>
        </div>
        <div class="program">
            <h3>Announcement from Admin</h3>

            <div class="program-bar">
                <div id="admin-notes" class="next-slot">
                    
                </div>
                <div class='checked'>
                    <input onclick='TickAnnouncement()' type='checkbox' name='conform' id='conform'>
                    <button onclick="closeAnnouncement()" id='conform-btn' disabled class='btn'>Noted</button>
                </div>
            </div>
        </div>

        <h3 style="margin-left: 5%;">Song Requests</h3>
        <div class="req-body">

        </div>


    </div>

    <!-- <img src="/Assets/Images/logo.png" alt=""/> -->

    <script>
        let cur = 1;
        let programResponse;

        function loadProgram() {
            var xhr = new XMLHttpRequest();

            xhr.open('GET', '/Controllers/GetProgramInfo.php?ID=' + encodeURIComponent('<?php echo $_SESSION['ID'] ?>'), true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {

                    programResponse = JSON.parse(xhr.responseText).data[0];
                   

                    const program = document.getElementById('program');

                    program.querySelector('h3').innerText = programResponse['name'];

                    if(programResponse['notes']) {
                        document.getElementById('admin-notes').innerText = programResponse['notes']; 

                        if(programResponse['announceStatus'] == false) {
                            document.getElementById('conform').checked = true;
                            document.getElementById('conform').disabled = true;
                        }
                    } else {
                        document.getElementById('admin-notes').innerHTML = "<p style = 'font-style : italic'> No Announcement </p>";
                        document.getElementById('conform').disabled = true;
                    }
                   



                }
            };

            xhr.send();
        }

        function loadPage() {
            var xhr = new XMLHttpRequest();

            xhr.open('GET', '/Controllers/GetRequests.php?role=RJ&ID=' + encodeURIComponent('<?php echo $_SESSION['ID'] ?>'), true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                   
                    var response = JSON.parse(xhr.responseText);

                    const dataContainer = document.querySelector('.req-body')

                    dataContainer.innerHTML = response.html;

                }
            };

            xhr.send();
        }

        // Load the first page initially
        window.onload = function() {
            loadProgram();
            loadPage();
        };

        function handleModel(ID, value) {
            const ele = document.getElementById(ID);
            // console.log('sdsa');

            if (value) {
                if (ID == 'schedule') {
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', '/Controllers/GetScheduleList.php?ID=' + programResponse['ID'], true);
                    xhr.onload = function() {
                        if (xhr.status == 200) {
                            const response = JSON.parse(xhr.responseText)
                            const data = response.data;

                            // console.log(type);


                            ele.querySelector('h3').innerText = programResponse['name'];
                            const scheduleBody = ele.querySelector(".schedule-body");
                            scheduleBody.innerHTML = '';

                            if (data.length > 0) {
                                for (let i = 0; i < data.length; i++) {
                                    const schContent = document.createElement('div');
                                    schContent.setAttribute('class', 'schedule-content');

                                    const day = document.createElement('div');
                                    day.setAttribute('class', 'day');
                                    day.innerText = data[i].day;

                                    const time = document.createElement('div');
                                    time.setAttribute('class', 'time');
                                    time.innerText = data[i].start + ' - ' + data[i].end;

                                    schContent.appendChild(day);
                                    schContent.appendChild(time);

                                    scheduleBody.appendChild(schContent);

                                    const hr = document.createElement('hr');

                                    scheduleBody.appendChild(hr);

                                }
                            } else {
                                scheduleBody.innerHTML = "<div>Not yet Scheduled</div>"
                            }


                        } else {
                            console.error('Error submitting form ', xhr.statusText);
                        }
                    };

                    xhr.send();
                } else if (ID == 'cover-model') {
                    ele.querySelector("#cover-id").value = programResponse['ID'];
                } 
            }
            if (value) {
                ele.style.display = 'block'
            } else {
                ele.style.display = 'none'
            }

        }


         //Update Program Cover
        
         document.getElementById('cover-form').addEventListener('submit', function(event) {
            
            
            let button = document.getElementById('cover-submit');
            let button2 = document.getElementById('cover-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';
            event.preventDefault();

            const formData = new FormData;

            const file = document.getElementById('cover').files[0];
            const ID = document.getElementById('cover-id').value;
            
            formData.append('ID', ID);
            formData.append('file', file);
            formData.append('cover-submit', true);
            // console.log(type);
            

            const xhr = new XMLHttpRequest();
         
            xhr.open('POST', '/Controllers/AddProgram.php', true);
    

        
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)
                    // console.log(data);


                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('cover-model', false);
                        alertRise(true, data.message);
                        loadPage(1);

                        document.getElementById('cover').value = '';
                        document.getElementById('cover-id').value = '';
            


                    } else {
                        handleModel('cover-model', false)
                        alertRise(false, data.message)

                        
                        document.getElementById('cover').value = '';
                        document.getElementById('cover-id').value = '';

                        
                    }

                    
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })

        function gotToHome() {
            // window.location.href = "/";
            window.open("/", "_blank");
        }

        //Close Announcement

        function TickAnnouncement(){
            const check = document.getElementById('conform');
            const btn = document.getElementById('conform-btn');

            if (check.checked) {
                btn.disabled = false
            } else {
                btn.disabled = true
            }
        }

        function closeAnnouncement() {
            let button = document.getElementById('conform-btn');
            button.disabled = true

            event.preventDefault();

            const formData = new FormData;

            formData.append('ID', programResponse['ID']);
            formData.append('announcement-viewed', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddAnnouncement.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)

                    if (data.status) {
                        alertRise(true, data.message);
                        loadProgram();

                    } else {

                        alertRise(false, data.message)

                    }
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);
        }

        //Close Request

        function checkTicked(ID) {
            const check = document.getElementById(ID);
            const btn = document.querySelector("." + ID);

            if (check.checked) {
                btn.disabled = false
            } else {
                btn.disabled = true
            }
        }

        function closeRequest(ID) {
            let button = document.querySelector('.conform_' + ID);
            button.disabled = true

            event.preventDefault();

            const formData = new FormData;

            formData.append('ID', ID);
            formData.append('req-viewed', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddSongRequest.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)

                    if (data.status) {
                        alertRise(true, data.message);
                        loadPage();

                    } else {

                        alertRise(false, data.message)

                    }
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);
        }

        function alertRise(status, message) {

            document.getElementById('alert-text').innerText = message;

            if (status) {
                document.getElementById('alertCont').style.backgroundColor = '#1D7524';
            } else {
                document.getElementById('alertCont').style.backgroundColor = '#E44C4C';
            }

            setTimeout(() => {
                document.getElementById('alert').style.display = 'flex';
            }, 1000);

            setTimeout(() => {
                document.getElementById('alert').style.display = 'none';
            }, 6000);

        }
    </script>
</body>

</html>