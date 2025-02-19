<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eye Tamil FM | Dashboard</title>
    <link rel="icon" type="image/png" href="/Assets/Images/logo.png" />
    <script src="https://kit.fontawesome.com/a10acb0cd6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Lexend:wght@100..900&family=Monomakh&family=Noto+Sans+Tamil:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="Assets/CSS/dashboard.css" />
    <link rel="stylesheet" href="Assets/CSS/Form.css" />

</head>

<body>


    <div class="alert-container" id="alert">
        <div class="alert" id="alertCont">
            <p id="alert-text"></p>
        </div>
    </div>

    <!-- Announcement Model -->
    <div id="announcement" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Announcement</h3>
                <div onclick="handleModel('announcement',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form class="form" id="announcement-form" method="post" oninput="validateAnnounce()">
                <div class="FormRow">
                    <textarea name="announce" id="announce" maxlength="250" placeholder="Announcement content" required></textarea>
                </div>

                <div class="FormRow">
                    <select name="event" id="event" required>

                    </select>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="announce-submit"
                        name="submit"
                        disabled="true"
                        class="submit">
                        Share
                    </button>

                    <button
                        style="display: none;"
                        id="announce-submiting"
                        disabled="true"
                        class="submit"> Sharing...
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit Announcement Model -->
    <div id="edit-announcement" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Edit Announcement</h3>
                <div onclick="handleModel('edit-announcement',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form class="form" id="edit-announcement-form" method="post" oninput="validateEditAnnounce()">

                <input type="text" hidden id="announce-id">
                <div class="FormRow">
                    <textarea name="announce" id="edit-announce" maxlength="250" placeholder="Announcement content" required></textarea>
                </div>

                <div class="FormRow">
                    <select name="event" id="edit-event" required>
                      
                    </select>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="edit-announce-submit"
                        name="submit"
                        disabled="true"
                        class="submit">
                        Update
                    </button>

                    <button
                        style="display: none;"
                        id="edit-announce-submiting"
                        disabled="true"
                        class="submit"> Updating...
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- User Model -->

    <div id="user" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Create RJ</h3>
                <div onclick="handleModel('user',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form id="user-form" class="form" method="post" oninput="validateUser()">
                <div class="FormRow">
                    <input type="text" name="userid" id="userid" placeholder="Username" required>
                </div>
                <div class="FormRow">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="user-submit"
                        name="submit"
                        disabled="true"
                        class="submit">
                        Create
                    </button>

                    <button
                        style="display: none;"
                        id="user-submiting"
                        disabled="true"
                        class="submit"> Creating...
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Program Model -->

    <div id="program" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Create Program</h3>
                <div onclick="handleModel('program',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form class="form" id="program-form" method="post" oninput="validateProgram()" enctype="multipart/form-data">
                <div class="FormRow">
                    <input type="text" name="pr-name" id="pr-name" placeholder="Program Name" required>
                </div>
                <div class="FormRow">
                    <label for="image">Upload Cover Image</label>
                    <input type="file" name="image" accept="image/*" id="image" required>
                </div>
                <div class="FormRow">
                    <select name="rj" id="rj" required>

                    </select>
                </div>

                <div class="FormRow row">
                    <p>Monday</p>
                    <div style="width: 100%;">
                        <input type="time" name="mon-st" id="mon-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="mon-et" id="mon-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Tuesday</p>
                    <div style="width: 100%;">
                        <input type="time" name="tue-st" id="tue-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="tue-et" id="tue-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Wednesday</p>
                    <div style="width: 100%;">
                        <input type="time" name="wed-st" id="wed-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="wed-et" id="wed-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Thursday</p>
                    <div style="width: 100%;">
                        <input type="time" name="thu-st" id="thu-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="thu-et" id="thu-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Friday</p>
                    <div style="width: 100%;">
                        <input type="time" name="fri-st" id="fri-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="fri-et" id="fri-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Saturday</p>
                    <div style="width: 100%;">
                        <input type="time" name="sat-st" id="sat-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="sat-et" id="sat-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Sunday</p>
                    <div style="width: 100%;">
                        <input type="time" name="sun-st" id="sun-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="sun-et" id="sun-et">
                        <small>End Time</small>
                    </div>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="program-submit"
                        name="submit"
                        disabled="true"
                        class="submit">
                        Create
                    </button>

                    <button
                        style="display: none;"
                        id="program-submiting"
                        disabled="true"
                        class="submit"> Creating...
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit Program Model -->

    <div id="edit-program" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Edit Program</h3>
                <div onclick="handleModel('edit-program',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form class="form" id="edit-program-form" method="post" oninput="validateEditProgram()">

                <input type="text" hidden name="ID" id="ID">
                <div class="FormRow">
                    <input type="text" name="pr-name" id="edit-pr-name" placeholder="Program Name" required>
                </div>

                <div class="FormRow">
                    <select name="rj" id="edit-rj" required>

                    </select>
                </div>

                <div class="FormRow row">
                    <p>Monday</p>
                    <div style="width: 100%;">
                        <input type="time" name="mon-st" id="edit-mon-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="mon-et" id="edit-mon-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Tuesday</p>
                    <div style="width: 100%;">
                        <input type="time" name="tue-st" id="edit-tue-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="tue-et" id="edit-tue-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Wednesday</p>
                    <div style="width: 100%;">
                        <input type="time" name="wed-st" id="edit-wed-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="wed-et" id="edit-wed-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Thursday</p>
                    <div style="width: 100%;">
                        <input type="time" name="thu-st" id="edit-thu-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="thu-et" id="edit-thu-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Friday</p>
                    <div style="width: 100%;">
                        <input type="time" name="fri-st" id="edit-fri-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="fri-et" id="edit-fri-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Saturday</p>
                    <div style="width: 100%;">
                        <input type="time" name="sat-st" id="edit-sat-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="sat-et" id="edit-sat-et">
                        <small>End Time</small>
                    </div>
                </div>
                <div class="FormRow row">
                    <p>Sunday</p>
                    <div style="width: 100%;">
                        <input type="time" name="sun-st" id="edit-sun-st">
                        <small>Start Time</small>
                    </div>
                    <div style="width: 100%;">
                        <input type="time" name="sun-et" id="edit-sun-et">
                        <small>End Time</small>
                    </div>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="edit-program-submit"
                        name="edit-submit"
                        disabled="true"
                        class="submit">
                        Update
                    </button>

                    <button
                        style="display: none;"
                        id="edit-program-submiting"
                        disabled="true"
                        class="submit"> Updating...
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Model -->

    <div id="delete-model" class="add-model-overlay">
        <div class="add-model del-model">
            <div class="title">
                <div  onclick="handleModel('delete-model',false)" class="close">
                    <div>x</div>
                </div>
            </div>
            <h3>Do you want to delete ?</h3>

            <div class="button opt-btn">
            <form id="delete-form" method="post" >
                    <input type="text" hidden name = "del-ID" id = "del-ID">
                    <input type="text" hidden name = "del-type" id = "del-type">
                    <button id="del" class="yes btn" name = "del-submit" type="submit">Delete</button>
                    <button id="deleting" disabled style="border-radius: 5px; display: none;" class="yes btn" type="button">Deleting...</button>
                    <button id="no-delete" onclick="handleModel('delete-model',false)" class="no btn" type="button">No</button>
            </form>
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

    <!-- Audio News Model -->

    <div id="audio" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Upload Recorded Audio</h3>
                <div onclick="handleModel('audio',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form class="form" id="audio-form" method="post" oninput="validateAudio()" enctype="multipart/form-data">
                <div class="FormRow">
                    <input type="text" name="short-desc" id="short-desc" placeholder="Short Description" required>
                </div>
                <div class="FormRow">
                    <label for="date">Select Date</label>
                    <input type="date" name="date" id="date" required>
                </div>
                <div class="FormRow">
                    <label for="rec-image">Select Cover Image</label>
                    <input type="file" name="image" id="rec-image" accept="image/*" required>
                </div>
                <div class="FormRow">
                    <label for="rec-audio">Select Audio file</label>
                    <input type="file" name="audio" id="rec-audio" accept="audio/*" required>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="audio-submit"
                        name="submit"
                        disabled="true"
                        class="submit">
                        Upload
                    </button>

                    <button
                        style="display: none;"
                        id="audio-submiting"
                        disabled="true"
                        class="submit"> Uploading...
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit Audio News Model -->

    <div id="edit-audio" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Edit Recorded Audio</h3>
                <div onclick="handleModel('edit-audio',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form class="form" id="edit-audio-form" method="post" oninput="validateEditAudio()" enctype="multipart/form-data">

                <input type="text" hidden id="audio-id">
                <div class="FormRow">
                    <input type="text" name="short-desc" id="edit-short-desc" placeholder="Short Description" required>
                </div>
                <div class="FormRow">
                    <label for="date">Select Date</label>
                    <input type="date" name="date" id="edit-date" required>
                </div>
                <div class="FormRow">
                    <label for="edit-rec-image">Select Cover Image</label>
                    <input type="file" name="image" id="edit-rec-image" accept="image/*">
                </div>
                <div class="FormRow">
                    <label for="edit-rec-audio">Select Audio file</label>
                    <input type="file" name="audio" id="edit-rec-audio" accept="audio/*">
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="edit-audio-submit"
                        name="edit-submit"
                        disabled="true"
                        class="submit">
                        Upload
                    </button>

                    <button
                        style="display: none;"
                        id="edit-audio-submiting"
                        disabled="true"
                        class="submit"> Uploading...
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit Stream -->

    <div id="edit-stream" class="add-model-overlay">
        <div class="add-model">
            <div class="title">
                <h3>Change Stream</h3>
                <div onclick="handleModel('edit-stream',false)" class="close">
                    <div>x</div>
                </div>
            </div>

            <form class="form" id="stream-form" method="post">
                <div class="FormRow">
                    <input type="text" name="stream" id="stream" placeholder="Stream key" required>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="edit-stream-submit"
                        name="radio-submit"
                        class="submit">
                        Upload
                    </button>

                    <button
                        style="display: none;"
                        id="edit-stream-submiting"
                        disabled="true"
                        class="submit"> Uploading...
                    </button>
                </div>
            </form>
        </div>
    </div>

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
                <div class="schedule-content">
                    <div class="day">
                        Monday
                    </div>
                    <div class="time">
                        04:00 PM - 05:00 PM
                    </div>

                </div>
                <hr>
                <div class="schedule-content">
                    <div class="day">
                        Monday
                    </div>
                    <div class="time">
                        04:00 PM - 05:00 PM
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>


    <div class="nav">

        <img src="/Assets/Images/borderlogo.png" alt="" />

        <div class="ul">

            <div onclick="gotToHome()"><i class="fa-solid fa-house" style="color: #e2e3e4;"></i></div>
            <div onclick="navigate(1)"><a class="active">Programs</a></div>
            <div onclick="navigate(2)"><a>Stream & Audios</a></div>
            <div onclick="navigate(3)"><a>Requests</a></div>
            <div><a>Logout</a></div>

        </div>
    </div>

    <div class="body">


    </div>

    <!-- <img src="/Assets/Images/logo.png" alt=""/> -->

    <script>
        let cur = 1;

        function loadPage(page) {
            var xhr = new XMLHttpRequest();


            if (page == 1) {
                xhr.open('GET', '/Controllers/GetPrograms.php', true);
            } else if (page == 2) {
                xhr.open('GET', '/Controllers/GetVideos.php', true);
            } else if (page == 3) {
                xhr.open('GET', '/Controllers/GetRequests.php?role=admin', true);
            }

            // document.getElementById('loading-spinner').style.display = 'block';
            // const onload = document.getElementById('onrowload');
            // onload.classList.add('onrowload');

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // document.getElementById('loading-spinner').style.display = 'none';
                    // // document.getElementById('onrowload').style.display = 'none';
                    // onload.classList.remove('onrowload');
                    var response = JSON.parse(xhr.responseText);

                    const dataContainer = document.querySelector('.body')

                    dataContainer.innerHTML = response.html;
                    // resizeWindow();

                    // dataContainer.classList.remove('fade-in'); // Remove the class to reset animation
                    // void dataContainer.offsetWidth; // Trigger reflow
                    // dataContainer.classList.add('fade-in'); // Apply fade-in animation
                    // document.getElementById('table-pagi').innerHTML = response.pagination;

                    // if (page === 1) {
                    //     // document.getElementById('count').textContent = "From " + response.total + " donations";
                    //     DisplayNumber(response.total, 'current')
                    // }
                }
            };

            xhr.send();
        }

        // Load the first page initially
        window.onload = function() {
            loadPage(1);
        };

        function navigate(page) {
            const ul = document.querySelector(".ul");
            const links = ul.querySelectorAll("a");
            if (page != cur) {
                links[cur - 1].classList.remove("active");
                links[page - 1].classList.add("active");


                const body = document.querySelector(".body");

                if (page > cur) {
                    body.classList.toggle("right");
                    setTimeout(() => {
                        body.classList.toggle("right");
                    }, 500)
                } else {
                    body.classList.toggle("left");
                    setTimeout(() => {
                        body.classList.toggle("left");
                    }, 500)
                }

                cur = page;
            }

            document.querySelector(".body").innerHTML = "";
            loadPage(page);
        }


        function gotToHome() {
            // window.location.href = "/";
            window.open("/", "_blank");
        }

        function handleModel(ID, value, contentId, type) {
            const ele = document.getElementById(ID);
            // console.log('sdsa');

            if (value) {
                if (ID == 'program' || ID == 'edit-program') {
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', '/Controllers/GetRjList.php', true);
                    xhr.onload = function() {
                        if (xhr.status == 200) {
                            const response = JSON.parse(xhr.responseText)
                            let select;

                            if (ID == 'edit-program') {
                                select = document.getElementById('edit-rj');
                                select.innerHTML = '';
                            }

                            if (ID == 'program') {
                                select = document.getElementById('rj');
                                select.innerHTML = '';
                                const FixedOption = document.createElement('option')
                                FixedOption.innerText = 'Select Hosting RJ';
                                FixedOption.setAttribute('selected', true);
                                FixedOption.setAttribute('hidden', true);
                                FixedOption.setAttribute('value', 'none');
                                select.appendChild(FixedOption);
                            }

                            

                            for (let i = 0; i < response.data.length; i++) {
                                const option = document.createElement('option');
                                option.innerText = response.data[i]['ID'];
                                option.setAttribute('value', response.data[i]['ID']);
                                select.appendChild(option);
                            }
                        } else {
                            console.error('Error submitting form ', xhr.statusText);
                        }
                    };

                    xhr.send();

                    if (ID == 'edit-program') {
                        const xhr2 = new XMLHttpRequest();
                        xhr2.open('GET', '/Controllers/GetSingleProgram.php?ID=' + contentId, true);
                        xhr2.onload = function() {
                            if (xhr2.status == 200) {
                                const response = JSON.parse(xhr2.responseText)
                                document.getElementById('ID').value = contentId;
                                document.getElementById('edit-pr-name').value = response.program
                                document.getElementById('edit-rj').value = response.rj

                                const data = response.data;
                                document.getElementById('edit-mon-st').value = data[0]['start'];
                                document.getElementById('edit-mon-et').value = data[0]['end'];

                                document.getElementById('edit-tue-st').value = data[1]['start'];
                                document.getElementById('edit-tue-et').value = data[1]['end'];

                                document.getElementById('edit-wed-st').value = data[2]['start'];
                                document.getElementById('edit-wed-et').value = data[2]['end'];

                                document.getElementById('edit-thu-st').value = data[3]['start'];
                                document.getElementById('edit-thu-et').value = data[3]['end'];

                                document.getElementById('edit-fri-st').value = data[4]['start'];
                                document.getElementById('edit-fri-et').value = data[4]['end'];

                                document.getElementById('edit-sat-st').value = data[5]['start'];
                                document.getElementById('edit-sat-et').value = data[5]['end'];

                                document.getElementById('edit-sun-st').value = data[6]['start'];
                                document.getElementById('edit-sun-et').value = data[6]['end'];

                                validateEditProgram();


                            } else {
                                console.error('Error submitting form ', xhr.statusText);
                            }
                        };

                        xhr2.send();
                    }
                } else if (ID == 'announcement' || ID == 'edit-announcement') {
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', '/Controllers/GetProgramList.php', true);
                    xhr.onload = function() {
                        if (xhr.status == 200) {
                            const response = JSON.parse(xhr.responseText)
                            let select;

                            if(ID === 'edit-announcement') {
                                select = document.getElementById('edit-event')
                                select.innerHTML = '';
                            } 

                            if (ID == 'announcement') {
                                select = document.getElementById('event')
                                select.innerHTML = '';
                                const FixedOption = document.createElement('option')
                                FixedOption.innerText = 'Select Program';
                                FixedOption.setAttribute('selected', true);
                                FixedOption.setAttribute('hidden', true);
                                FixedOption.setAttribute('value', 'none');
                                select.appendChild(FixedOption);
                            }

                            for (let i = 0; i < response.data.length; i++) {
                                const option = document.createElement('option');
                                option.innerText = response.data[i]['name'];
                                option.setAttribute('value', response.data[i]['ID']);
                                select.appendChild(option);
                            }

                            if(ID == 'edit-announcement'){
                                document.getElementById("announce-id").value = contentId;
                                document.getElementById("edit-announce").value = document.getElementById(contentId).innerText;
                                document.getElementById("edit-event").value = contentId;
                                validateEditAnnounce();

                            }



                        } else {
                            console.error('Error submitting form ', xhr.statusText);
                        }
                    };

                    xhr.send();

             
                } else if (ID == 'schedule') {
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', '/Controllers/GetScheduleList.php?ID=' + contentId, true);
                    xhr.onload = function() {
                        if (xhr.status == 200) {
                            const response = JSON.parse(xhr.responseText)
                            const data = response.data;

                            // console.log(type);


                            ele.querySelector('h3').innerText = type;
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
                } else if (ID == 'delete-model') {
                    ele.querySelector('h3').innerText = "Do you want to delete this "+type;
                    document.getElementById('del-ID').value = contentId;
                    document.getElementById('del-type').value = type;
                } else if (ID == 'cover-model') {
                    ele.querySelector("#cover-id").value = contentId;
                } else if (ID == 'edit-stream') {
                    const Skey = document.getElementById('streamKey').innerText;
                    document.getElementById('stream').value = Skey;
                }else if (ID == 'edit-audio') {
                    document.getElementById('audio-id').value = contentId;
                    const curElement = document.getElementById(contentId);
                    const name = curElement.querySelector("h3").innerText;
                    const date = curElement.querySelector(".next-slot").innerText;

                    document.getElementById("edit-short-desc").value = name;
                    document.getElementById("edit-date").value = date;

                    validateEditAudio();
                }
            }
            if (value) {
                ele.style.display = 'block'
            } else {
                ele.style.display = 'none'
            }

        }

        function validateAnnounce() {
            const announce = document.getElementById("announce").value.length;
            const event = document.getElementById("event").value;
            // console.log(announce);



            const btn = document.getElementById("announce-submit");

            if (announce > 0 && event.length > 0 && event != 'none') {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }

        //Add Announcement

        document.getElementById('announcement-form').addEventListener('submit', function(event) {
            let button = document.getElementById('announce-submit');
            let button2 = document.getElementById('announce-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';

            event.preventDefault();

            const formData = new FormData;


            const announce = document.getElementById('announce').value;
            const eventName = document.getElementById('event').value;

            formData.append('announce', announce);
            formData.append('event', eventName);
            formData.append('submit', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddAnnouncement.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)

                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('announcement', false)
                        alertRise(true, data.message)
                        document.getElementById('announce').value = ''
                        document.getElementById('event').value = ''
                        loadPage(1);
                    } else {
                        handleModel('announcement', false)
                        alertRise(false, data.message)
                    }

                    validateAnnounce();
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })

        function validateEditAnnounce() {
            const announce = document.getElementById("edit-announce").value.length;
            const event = document.getElementById("edit-event").value;

            const btn = document.getElementById("edit-announce-submit");

            if (announce > 0 && event.length > 0 && event != 'none') {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }


        //Edit Announcement
        document.getElementById('edit-announcement-form').addEventListener('submit', function(event) {
            let button = document.getElementById('edit-announce-submit');
            let button2 = document.getElementById('edit-announce-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';

            event.preventDefault();

            const formData = new FormData;


            const announce = document.getElementById('edit-announce').value;
            const eventName = document.getElementById('edit-event').value;

            formData.append('announce', announce);
            formData.append('event', eventName);
            formData.append('submit', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddAnnouncement.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)

                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('edit-announcement', false)
                        alertRise(true, data.message)
                        document.getElementById('edit-announce').value = ''
                        document.getElementById('edit-event').value = ''
                        loadPage(1);
                    } else {
                        handleModel('edit-announcement', false)
                        alertRise(false, data.message)
                    }

                    validateEditAnnounce();
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })


        function validateUser() {
            const id = document.getElementById("userid").value.length;
            const password = document.getElementById("password").value.length;
            const btn = document.getElementById("user-submit");

            if (id > 0 && password > 0) {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }
        // Add User
        document.getElementById('user-form').addEventListener('submit', function(event) {
            let button = document.getElementById('user-submit');
            let button2 = document.getElementById('user-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';

            event.preventDefault();

            const formData = new FormData;


            const userid = document.getElementById('userid').value;
            const password = document.getElementById('password').value;

            formData.append('userid', userid);
            formData.append('password', password);
            formData.append('submit', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddUser.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)

                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('user', false)
                        alertRise(true, data.message)
                        document.getElementById('userid').value = '';
                        document.getElementById('password').value = '';
                    } else {
                        handleModel('user', false)
                        alertRise(false, data.message)
                    }

                    validateUser();
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })

        function validateProgram() {
            const name = document.getElementById("pr-name").value.length;
            const rj = document.getElementById("rj").value;
            const image = document.getElementById("image").value.length;
            const btn = document.getElementById("program-submit");

            if (name > 0 && image > 0 && rj.length > 0 && rj != 'none') {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }

        //Add Program

        document.getElementById('program-form').addEventListener('submit', function(event) {
            let button = document.getElementById('program-submit');
            let button2 = document.getElementById('program-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';

            event.preventDefault();

            const formData = new FormData;


            const program = document.getElementById('pr-name').value;
            const rj = document.getElementById('rj').value;
            const file = document.getElementById('image').files[0];
            const monSt = document.getElementById('mon-st').value;
            const monEt = document.getElementById('mon-et').value;
            const tueSt = document.getElementById('tue-st').value;
            const tueEt = document.getElementById('tue-et').value;
            const wedSt = document.getElementById('wed-st').value;
            const wedEt = document.getElementById('wed-et').value;
            const thuSt = document.getElementById('thu-st').value;
            const thuEt = document.getElementById('thu-et').value;
            const friSt = document.getElementById('fri-st').value;
            const friEt = document.getElementById('fri-et').value;
            const satSt = document.getElementById('sat-st').value;
            const satEt = document.getElementById('sat-et').value;
            const sunSt = document.getElementById('sun-st').value;
            const sunEt = document.getElementById('sun-et').value;

            formData.append('program', program);
            formData.append('rj', rj);
            formData.append('file', file);
            formData.append('monSt', monSt);
            formData.append('monEt', monEt);
            formData.append('tueSt', tueSt);
            formData.append('tueEt', tueEt);
            formData.append('wedSt', wedSt);
            formData.append('wedEt', wedEt);
            formData.append('thuSt', thuSt);
            formData.append('thuEt', thuEt);
            formData.append('friSt', friSt);
            formData.append('friEt', friEt);
            formData.append('satSt', satSt);
            formData.append('satEt', satEt);
            formData.append('sunSt', sunSt);
            formData.append('sunEt', sunEt);

            formData.append('submit', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddProgram.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)
                    // console.log(data);


                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('program', false);
                        alertRise(true, data.message);
                        loadPage(1);
                        document.getElementById('pr-name').value = '';
                        document.getElementById('rj').value = '';
                        document.getElementById('image').value = '';
                        document.getElementById('mon-st').value = '';
                        document.getElementById('mon-et').value = '';
                        document.getElementById('tue-st').value = '';
                        document.getElementById('tue-et').value = '';
                        document.getElementById('wed-st').value = '';
                        document.getElementById('wed-et').value = '';
                        document.getElementById('thu-st').value = '';
                        document.getElementById('thu-et').value = '';
                        document.getElementById('fri-st').value = '';
                        document.getElementById('fri-et').value = '';
                        document.getElementById('sat-st').value = '';
                        document.getElementById('sat-et').value = '';
                        document.getElementById('sun-st').value = '';
                        document.getElementById('sun-et').value = '';

                    } else {
                        handleModel('program', false)
                        alertRise(false, data.message)
                        document.getElementById('pr-name').value = '';
                        document.getElementById('rj').value = '';
                        document.getElementById('image').value = '';
                        document.getElementById('mon-st').value = '';
                        document.getElementById('mon-et').value = '';
                        document.getElementById('tue-st').value = '';
                        document.getElementById('tue-et').value = '';
                        document.getElementById('wed-st').value = '';
                        document.getElementById('wed-et').value = '';
                        document.getElementById('thu-st').value = '';
                        document.getElementById('thu-et').value = '';
                        document.getElementById('fri-st').value = '';
                        document.getElementById('fri-et').value = '';
                        document.getElementById('sat-st').value = '';
                        document.getElementById('sat-et').value = '';
                        document.getElementById('sun-st').value = '';
                        document.getElementById('sun-et').value = '';
                    }

                    validateProgram();
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })

        function validateEditProgram() {
            const name = document.getElementById("edit-pr-name").value.length;
            const rj = document.getElementById("edit-rj").value;
            const btn = document.getElementById("edit-program-submit");

            if (name > 0 && rj.length > 0 && rj != 'none') {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }
        //Edit Program

        document.getElementById('edit-program-form').addEventListener('submit', function(event) {
            let button = document.getElementById('edit-program-submit');
            let button2 = document.getElementById('edit-program-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';

            event.preventDefault();

            const formData = new FormData;


            const ID = document.getElementById('ID').value;
            const program = document.getElementById('edit-pr-name').value;
            const rj = document.getElementById('edit-rj').value;
            const monSt = document.getElementById('edit-mon-st').value;
            const monEt = document.getElementById('edit-mon-et').value;
            const tueSt = document.getElementById('edit-tue-st').value;
            const tueEt = document.getElementById('edit-tue-et').value;
            const wedSt = document.getElementById('edit-wed-st').value;
            const wedEt = document.getElementById('edit-wed-et').value;
            const thuSt = document.getElementById('edit-thu-st').value;
            const thuEt = document.getElementById('edit-thu-et').value;
            const friSt = document.getElementById('edit-fri-st').value;
            const friEt = document.getElementById('edit-fri-et').value;
            const satSt = document.getElementById('edit-sat-st').value;
            const satEt = document.getElementById('edit-sat-et').value;
            const sunSt = document.getElementById('edit-sun-st').value;
            const sunEt = document.getElementById('edit-sun-et').value;

            formData.append('ID', ID);
            formData.append('program', program);
            formData.append('rj', rj);
            formData.append('monSt', monSt);
            formData.append('monEt', monEt);
            formData.append('tueSt', tueSt);
            formData.append('tueEt', tueEt);
            formData.append('wedSt', wedSt);
            formData.append('wedEt', wedEt);
            formData.append('thuSt', thuSt);
            formData.append('thuEt', thuEt);
            formData.append('friSt', friSt);
            formData.append('friEt', friEt);
            formData.append('satSt', satSt);
            formData.append('satEt', satEt);
            formData.append('sunSt', sunSt);
            formData.append('sunEt', sunEt);

            formData.append('edit-submit', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddProgram.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)
                    // console.log(data);


                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('edit-program', false);
                        alertRise(true, data.message);
                        loadPage(1);
                        document.getElementById('edit-pr-name').value = '';
                        document.getElementById('edit-rj').value = '';
                        document.getElementById('edit-mon-st').value = '';
                        document.getElementById('edit-mon-et').value = '';
                        document.getElementById('edit-tue-st').value = '';
                        document.getElementById('edit-tue-et').value = '';
                        document.getElementById('edit-wed-st').value = '';
                        document.getElementById('edit-wed-et').value = '';
                        document.getElementById('edit-thu-st').value = '';
                        document.getElementById('edit-thu-et').value = '';
                        document.getElementById('edit-fri-st').value = '';
                        document.getElementById('edit-fri-et').value = '';
                        document.getElementById('edit-sat-st').value = '';
                        document.getElementById('edit-sat-et').value = '';
                        document.getElementById('edit-sun-st').value = '';
                        document.getElementById('edit-sun-et').value = '';

                    } else {
                        handleModel('edit-program', false)
                        alertRise(false, data.message)
                        document.getElementById('edit-pr-name').value = '';
                        document.getElementById('edit-rj').value = '';
                        document.getElementById('edit-mon-st').value = '';
                        document.getElementById('edit-mon-et').value = '';
                        document.getElementById('edit-tue-st').value = '';
                        document.getElementById('edit-tue-et').value = '';
                        document.getElementById('edit-wed-st').value = '';
                        document.getElementById('edit-wed-et').value = '';
                        document.getElementById('edit-thu-st').value = '';
                        document.getElementById('edit-thu-et').value = '';
                        document.getElementById('edit-fri-st').value = '';
                        document.getElementById('edit-fri-et').value = '';
                        document.getElementById('edit-sat-st').value = '';
                        document.getElementById('edit-sat-et').value = '';
                        document.getElementById('edit-sun-st').value = '';
                        document.getElementById('edit-sun-et').value = '';
                    }

                    validateEditProgram();
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })

        //Delete

        document.getElementById('delete-form').addEventListener('submit', function(event) {
            
            
            let button = document.getElementById('del');
            let button2 = document.getElementById('deleting');
            let button3 = document.getElementById('no-delete');
            button.style.display = 'none';
            button2.style.display = 'inline';
            button3.disabled = true;

            event.preventDefault();

            const formData = new FormData;


            const ID = document.getElementById('del-ID').value;
            const type = document.getElementById('del-type').value;
            

            formData.append('ID', ID);
            formData.append('del-submit', true);
            // console.log(type);
            

            const xhr = new XMLHttpRequest();
            if(type == 'program') {
                // console.log('sdddsadasdsasd');
                xhr.open('POST', '/Controllers/AddProgram.php', true);
            } else {
                xhr.open('POST', '/Controllers/AddAudio.php', true);
            }

        
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)
                    // console.log(data);


                    button.style.display = 'inline';
                    button2.style.display = 'none';
                    button3.disabled = false;


                    if (data.status) {
                        handleModel('delete-model', false);
                        alertRise(true, data.message);
                        if(type == 'program') {
                            loadPage(1);
                        }else {
                            loadPage(2);
                        }

                        document.getElementById('del-ID').value = '';
                        document.getElementById('del-type').value = '';


                    } else {
                        handleModel('delete-model', false)
                        alertRise(false, data.message)

                        
                        document.getElementById('del-ID').value = '';
                        document.getElementById('del-type').value = '';

                        
                    }

                    
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })

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

        function validateAudio() {
            const desc = document.getElementById("short-desc").value.length;
            const date = document.getElementById("date").value.length;
            const recImage = document.getElementById("rec-image").value.length;
            const recAudio = document.getElementById("rec-audio").value.length;
            const btn = document.getElementById("audio-submit");

            if (desc > 0 && date > 0 && recImage > 0 && recAudio > 0) {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }

        //Add Audio

        document.getElementById('audio-form').addEventListener('submit', function(event) {
            let button = document.getElementById('audio-submit');
            let button2 = document.getElementById('audio-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';

            event.preventDefault();

            const formData = new FormData;

            const desc = document.getElementById("short-desc").value;
            const date = document.getElementById("date").value;
            const image = document.getElementById("rec-image").files[0];
            const audio = document.getElementById("rec-audio").files[0];


            formData.append('desc', desc);
            formData.append('date', date);
            formData.append('image', image);
            formData.append('audio', audio);
            formData.append('submit', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddAudio.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)
                    // console.log(data);


                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('audio', false);
                        alertRise(true, data.message);
                        loadPage(2);
                        document.getElementById("short-desc").value = '';
                        document.getElementById("date").value = '';
                        document.getElementById("rec-image").value = '';
                        document.getElementById("rec-audio").value = '';


                    } else {
                        handleModel('audio', false)
                        alertRise(false, data.message)
                        document.getElementById("short-desc").value = '';
                        document.getElementById("date").value = '';
                        document.getElementById("rec-image").value = '';
                        document.getElementById("rec-audio").value = '';
                    }

                    validateAudio();
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })

        function validateEditAudio() {
            const desc = document.getElementById("edit-short-desc").value.length;
            const date = document.getElementById("edit-date").value.length;
            const btn = document.getElementById("edit-audio-submit");

            if (desc > 0 && date > 0) {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }

        //Edit Audio

        document.getElementById('edit-audio-form').addEventListener('submit', function(event) {
            let button = document.getElementById('edit-audio-submit');
            let button2 = document.getElementById('edit-audio-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';

            event.preventDefault();

            const formData = new FormData;

            const ID = document.getElementById('audio-id').value;
            const desc = document.getElementById("edit-short-desc").value;
            const date = document.getElementById("edit-date").value;
            const image = document.getElementById("edit-rec-image").files[0];
            const audio = document.getElementById("edit-rec-audio").files[0];

            // image = image ? image : false;
            // audio = audio ? audio : false;

            formData.append('ID', ID);
            formData.append('desc', desc);
            formData.append('date', date);
            formData.append('image', image);
            formData.append('audio', audio);
            formData.append('edit-submit', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddAudio.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)
                    // console.log(data);


                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('edit-audio', false);
                        alertRise(true, data.message);
                        loadPage(2);
                        document.getElementById("edit-rec-image").value = '';
                        document.getElementById("edit-rec-audio").value = '';


                    } else {
                        handleModel('edit-audio', false)
                        alertRise(false, data.message)
                        document.getElementById("edit-rec-image").value = '';
                        document.getElementById("edit-rec-audio").value = '';
                    }

                    validateEditAudio();
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            
        })

        //EDit Stream Key

        document.getElementById('stream-form').addEventListener('submit', function(event) {
            let button = document.getElementById('edit-stream-submit');
            let button2 = document.getElementById('edit-stream-submiting');
            button.style.display = 'none';
            button2.style.display = 'block';

            event.preventDefault();

            const formData = new FormData;

            const radioStream = document.getElementById("stream").value;


            formData.append('stream', radioStream);
            formData.append('radio-submit', true);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/Controllers/AddAudio.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const data = JSON.parse(xhr.responseText)
                    // console.log(data);


                    button.style.display = 'block';
                    button2.style.display = 'none';


                    if (data.status) {
                        handleModel('edit-stream', false);
                        alertRise(true, data.message);
                        loadPage(2);
                        document.getElementById("stream").value = '';


                    } else {
                        handleModel('edit-stream', false)
                        alertRise(false, data.message)
                        document.getElementById("stream").value = '';
                    }
                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send(formData);

            // 
        })

        //Close Request

        function checkTicked(ID) {
            const check = document.getElementById(ID);
            const btn = document.querySelector("."+ID);

            if (check.checked) {
                btn.disabled = false
            } else {
                btn.disabled = true
            }
        }

        function closeRequest(ID) {
            let button = document.querySelector('.conform_'+ID);
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
                        loadPage(3);

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