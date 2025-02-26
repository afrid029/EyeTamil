<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eye Tamil FM | Home</title>
    <link rel="icon" type="image/png" href="/Assets/Images/logo.png" />
    <script src="https://kit.fontawesome.com/a10acb0cd6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Lexend:wght@100..900&family=Monomakh&family=Noto+Sans+Tamil:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="Assets/CSS/index.css" />
    <link rel="stylesheet" href="Assets/CSS/Form.css" />
    <script src="https://cdn.jsdelivr.net/npm/howler@2.2.4/dist/howler.min.js"></script>

</head>

<body id="body">

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

    ?>

    <div class="body-cover"></div>


    <div class="alert-container" id="alert">
        <div class="alert" id="alertCont">
            <p id="alert-text"></p>
        </div>
    </div>

    <div class="buttons">
        <div onclick="goToSponsor(true)" class="sponsor">
            <i class="fa-solid fa-atom"></i>
            <h4>Be Our Next Sponsor!</h4>
        </div>
        <div onclick="openSignin(true)" class="sponsor">
            <i class="fa-solid fa-user-tie"></i>
            <h4>Signin</h4>
        </div>
    </div>

    <!-- Sign IN -->
    <div class="signin-form">
        <h3>Sign In</h3>
        <div class="close">
            <div onclick="openSignin(false)">x</div>
        </div>

        <?php
        if (isset($_COOKIE['user'])) {

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
            $role = $passedArray['role'];

            echo "<div class='button dash-button'>
                    <button onclick=\"goToDash('$role')\" type='button'
                    class='submit'>Dashboard</button>
                </div>";
        } else {
        ?>
            <form class="Form" action="/login" method="post" oninput="validateLogin()" onsubmit="return submitLoginform()">
                <div class="FormRow">
                    <input type="text" name="username" id="username" required placeholder="Username">
                </div>
                <div class="FormRow">
                    <input type="password" name="password" id="password" required placeholder="Password">
                </div>

                <div class="button">



                    <!-- <button onclick="goToDash()" type="button"
                    class="submit">Dashboard</button> -->

                    <button
                        type="submit"
                        id="login-submit"
                        name="submit"
                        disabled="true"
                        class="submit">
                        Sign In
                    </button>

                    <button
                        style="display: none;"
                        id="login-submiting"
                        disabled="true"
                        class="submit"> Signing In...
                    </button>
                </div>
            </form>
        <?php
        }
        ?>

    </div>

    <div onclick="scrollToTop()" class="scroll">
        <i class="fa-solid fa-jet-fighter-up" style="color: #f3f3f2;"></i>
    </div>

    <!-- Mobile SIde bar -->
    <div class="mobile-side-bar">
        <div class="mobile-side-bar-content">
            <div onclick="slideBar(false)" class="close">x</div>
            <img src="/Assets/Images/logo.png" alt="">

            <div onclick="goToSponsor(false)" class="mobile-side-bar-optn">
                <i class="fa-solid fa-atom"></i>
                <h4>Be Our Next Sponsor!</h4>
            </div>
            <hr>
            <div onclick="mobileOpenSignin(true)" class="mobile-side-bar-optn">
                <i class="fa-solid fa-user-tie"></i>
                <h4>Signin</h4>
            </div>
            <hr>
            <div class="mobile-side-bar-optn">


                <div class="mobile-form">
                    <div onclick="mobileOpenSignin(false)" class="mobile-close">
                        <i class="fa-solid fa-caret-up"></i>
                    </div>
                    <h3>Sign In</h3>



                    <?php
                    if (isset($_COOKIE['user'])) {

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
                        $role = $passedArray['role'];

                        echo "<div class='button dash-button'>
                    <button onclick=\"goToDash('$role')\" type='button'
                    class='submit'>Dashboard</button>
                </div>";
                    } else {
                    ?>
                        <form class="Form" action="/login" method="post" oninput="mobileValidateLogin()" onsubmit="return mobileSubmitLoginform()">
                            <div class="FormRow">
                                <input type="text" name="username" id="mobile-username" required placeholder="Username">
                            </div>
                            <div class="FormRow">
                                <input type="password" name="password" id="mobile-password" required placeholder="Password">
                            </div>

                            <div class="button">

                                <!-- <button onclick="goToDash()" type="button"
                                class="submit">Dashboard</button> -->
                                <button
                                    type="submit"
                                    id="mobile-login-submit"
                                    name="submit"
                                    disabled="true"
                                    class="submit">
                                    Sign In
                                </button>

                                <button
                                    style="display: none;"
                                    id="mobile-login-submiting"
                                    disabled="true"
                                    class="submit"> Signing In...
                                </button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>





                </div>
            </div>


        </div>
    </div>

    <!-- Show Programs -->
    <div class="program-overlay">
        <div class="program-view">
            <div class="title">
                <h4>Programs</h4>
                <div onclick="programListView(false)" class="p-close">x</div>
            </div>

            <div class="program-list-body">

            </div>
        </div>
    </div>


    <!-- Song Request -->
    <div class="req-overlay">
        <div class="req-view">
            <div class="title">
                <h4>Dedicate a song to your favorites</h4>
                <div onclick="SongReqView(false)" class="r-close">x</div>
            </div>
            <form class="Form" id="song-form" method="post" oninput="validateReqForm()">
                <!-- Requester Name -->
                <div class="FormRow">
                    <input type="text" id="req-name" name="req-name" placeholder="Your name" required>
                </div>
                <!-- From -->
                <div class="FormRow">
                    <input type="text" id="from" name="from" placeholder="Request From" required>
                </div>

                <!-- Song Name -->
                <div class="FormRow">
                    <input type="text" id="song" name="song" placeholder="Song" required>
                </div>
                <!-- Movie -->
                <div class="FormRow">
                    <input type="text" id="movie" name="movie" placeholder="Movie" required>
                </div>

                <!-- Event Selection -->


                <div class="FormRow">

                    <select name="select-event" id="select-event" required>

                    </select>

                </div>


                <!-- Description -->
                <div class="FormRow">
                    <textarea type="text" id="description" name="description" placeholder="Describe your message" maxlength="250" required></textarea>
                </div>

                <div class="button">
                    <button
                        type="submit"
                        id="req-submit"
                        name="submit"
                        disabled="true"
                        class="submit">
                        <i class="fa-regular fa-paper-plane" style="color: #f1f2f4;"></i>
                        Request
                    </button>

                    <button
                        style="display: none;"
                        id="req-submiting"
                        disabled="true"
                        class="submit"> Sending request...
                    </button>
                </div>
            </form>
        </div>
    </div>

    <svg width="0" height="0">
        <defs>
            <clipPath id="custom-clip-path">
                <!-- Define the path here -->
                <path id="clip-path" d="" />
            </clipPath>
        </defs>

        <use href="/Assets/Images/soundcloud-brands-solid.svg#clip-path"></use>
    </svg>


    <!-- <audio id="audioPlayer" src=""></audio> -->
    <audio id="newsPlayer" src=""></audio>
    <!-- http://streams.radio.co/s937ac5492/listen -->
    <div class="nav">


        <div class="nav-cover"></div>
        <div class="nav-container">
            <div class="nav-logo">
                <img src="Assets/Images/logo.png" alt="">

            </div>
            <div class="nav-player">
                <div class="nav-player-cover"></div>

                <div class="player">
                    <div class="spikes">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>

                    </div>
                    <div class="playerButton">
                        <div class="player-image"></div>
                        <div class="image-cover"></div>
                        <div onclick="playRadio()" class="playIcon">
                            <i class="fa-solid fa-play play"></i>
                            <i class="fa-solid fa-pause pause" style="color: #f5f5f5; display: none;"></i>

                        </div>

                    </div>
                    <div class="spikes">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>

                    </div>
                </div>

            </div>

        </div>


    </div>

    <div class="mobile-nav">
        <div class="mobile-nav-logo">
            <img src="Assets/Images/logo.png" alt="">

        </div>

        <div onclick="slideBar(true)" class="mobile-nav-option">
            <span></span>
            <span></span>
            <span></span>

        </div>

    </div>

    <script>
        function updateClipPath() {
            var container = document.querySelector('.nav');
            var path = document.getElementById('clip-path');

            // console.log(container.offsetHeight);


            var width = container.offsetWidth;
            var height = container.offsetHeight;

            // Define the Bezier curve coordinates based on container size
            var startX = (0 / 100) * width; // 20% of container width
            var startY = height; // 100% of container height
            var endX = (70 / 100) * width; // 70% of container width
            var endY = 0; // 0% of container height

            var controlX1 = (40 / 100) * width;
            var controlY1 = (90 / 100) * height;
            var controlX2 = (45 / 100) * width;
            var controlY2 = (20 / 100) * height;

            // Update the path with calculated pixel values
            path.setAttribute('d', `M${startX} ${startY} C ${controlX1} ${controlY1}, ${controlX2} ${controlY2}, ${endX} ${endY} L${width} 0 L${width} ${height}`);
        }
        // window.addEventListener('load', updateClipPath);

        setTimeout(() => {
            updateClipPath();
        }, 500)

        window.addEventListener('resize', updateClipPath)
    </script>

    <!-- <div class="temp-container">
        <div>
        <h1>We are cooking something great!</h1>
        </div>
        <div>
        <h3>Releasing Soon</h3>
        </div>
    </div> -->

    <!-- <footer>
        <p> &#xA9; Mass Production IT</p>
    </footer> -->


    <div class="onair">
        <div class="montreal">
            <i class="fa-solid fa-phone-volume"></i>
            <h5>Montreal 514-584-1029 </h5>
        </div>

        <div class="toronto">
            <i class="fa-solid fa-phone-volume"></i>
            <h5>Toronto 416-584-1029 </h5>
        </div>
    </div>

    <div class="container-body">
        <div class="container-body-cover"></div>
        <div class="time">Time</div>
        <div class="fm-intro">
            <h1>Welcome to EYE<span> தமிழ்</span> FM 102.9</h1>
            <h4>தமிழ் எம் உயிர்க்கு நிகர்!</h4>
        </div>
        <div class="container-spinner">
            <i class="fa-solid fa-spinner fa-spin-pulse"></i>
        </div>

        <div class="container" style="display: none;">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    chevron_left
                </button>
                <ul class="image-list">

                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    chevron_right
                </button>
            </div>

            <div class="home-button">
                <div onclick="scrollToCenter()" class="home">
                    <i class="fa-solid fa-house"></i>
                </div>
            </div>


            <div class="slider-scrollbar">



                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>

        </div>
        <div class="programs">
            <div onclick="programListView(true)" class="prgrm-bnt"><i class="fa-regular fa-rectangle-list" style=" margin-right: 5px"></i> Program List</div>
            <div onclick="SongReqView(true)" class="prgrm-bnt"><i class="fa-solid fa-music" style="margin-right: 5px"></i> Request Song</div>
        </div>
    </div>

    <div class="features">
        <div class="feature-title">
            <h3>
                Featured News
            </h3>
            <div class="circle-bar">
                <div class="circle active-circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
        <div class="feature-container">
           
            <div class="mobile-playing-feature">
                <div class="mobile-playing-feature-cover"></div>
                <div class="player-bottom" style="position: relative;">

                    <div style="cursor: pointer" onclick="controlAudio()">
                        <i class="fa-regular fa-circle-play fa-shake playControl audioPlay show" style="color: #d1811b80; "></i>
                        <i class="fa-regular fa-circle-pause playControl audioPause hide" style="color: #d1811b80;"></i>
                    </div>
                    <div class="news-title">
                        <h4></h4>
                        <h6></h6>
                    </div>
                </div>

                <div id="seekBar" onclick="seekAudio(event)">
                    <div id="seekBarProgress"></div>
                </div>

                <div class="duration" style="margin: auto;">
                    <div class="current">52:25</div>
                    <div class="total">52:25</div>
                </div>

            </div>

            <div onclick="selectAudio(event)" class="all-features">

                <!-- All News WIll be loaded here -->
            </div>
            <div class="hr-line">

            </div>
            <div class="playing-feature">
                <div class="playing-feature-cover"></div>

                <img class="feature-image curr-image" src="" alt="">

                <div class="player-bottom" style="position: relative;">

                    <div style="cursor: pointer" onclick="controlAudio()">
                        <i class="fa-regular fa-circle-play fa-shake playControl audioPlay show" style="color: #d1811b80; "></i>
                        <i class="fa-regular fa-circle-pause playControl audioPause hide" style="color: #d1811b80;"></i>
                    </div>
                    <div class="news-title">
                        <h4></h4>
                        <h6></h6>
                    </div>
                </div>

                <div id="seekBar2" onclick="seekAudio2(event)">
                    <div id="seekBarProgress2"></div>

                </div>
                <div class="duration">
                    <div class="current">52:25</div>
                    <div class="total">52:25</div>
                </div>
            </div>



        </div>

    </div>

    <div class="footer">
        <div class="logo">
            <div class="logo-img"></div>
            <img src="/Assets/Images/borderlogo.png" alt="">
        </div>

        <div class="footer-body">
            <div class="contact">

                <h3>Office</h3>

                <div class="contact-item">
                    <div class="contact-item-text">
                        <i class="fa-solid fa-thumbtack"></i>
                        <h5>303 Rue Edmond Larivee, Laval, QC, H7L 0A4</h5>
                    </div>
                    <hr>
                </div>
                <div class="contact-item">
                    <div class="contact-item-text">
                        <i class="fa-solid fa-headset"></i>
                        <h5>1-514-584-2699</h5>
                    </div>

                    <hr>
                </div>
                <div class="contact-item">
                    <div class="contact-item-text">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <h5>contact@eyetamilfm.com</h5>
                    </div>

                    <hr>
                </div>
                <div class="contact-item">
                    <div class="contact-item-text">
                        <i class="fa-solid fa-door-open"></i>
                        <h5>Monday - Friday 09:00 AM - 05:00 PM</h5>
                    </div>

                    <hr>
                </div>

            </div>

            <div class="sponsorForm">
                <h3>We appreciate hearing from you</h3>

                <form id="sponsor-form" method="post" oninput="validateForm()">
                    <!-- <div class="div"> </div> -->
                    <div class="Form">
                        <!-- Name -->
                        <div class="FormRow">
                            <input type="text" id="select-name" name="name" placeholder="Name" required>
                        </div>
                        <!-- Company Name -->
                        <div class="FormRow">
                            <input type="text" id="select-company" name="company" placeholder="Company Name" required>
                        </div>
                        <!-- Contact -->
                        <div class="FormRow">
                            <input type="text" id="select-contact" name="contact" placeholder="Contact Number" required>
                        </div>
                        <!-- Email -->
                        <div class="FormRow">
                            <input type="email" id="select-email" name="email" placeholder="Contact Email" required>
                        </div>
                        <!-- Address -->
                        <div class="FormRow">
                            <input type="text" id="select-address" name="address" placeholder="Address" required>
                        </div>
                        <!-- Description -->
                        <div class="FormRow">
                            <textarea type="text" id="select-description" name="description" placeholder="Describe your message" maxlength="250" required></textarea>
                        </div>

                        <div class="button">
                            <button
                                type="submit"
                                id="submit"
                                name="submit"
                                disabled="true"
                                class="submit">
                                <i class="fa-regular fa-paper-plane" style="color: #f1f2f4;"></i>
                                Share Proposal
                            </button>

                            <button
                                style="display: none;"
                                id="submiting"
                                disabled="true"
                                class="submit"> Sharing...
                            </button>
                        </div>



                    </div>
                </form>

            </div>
        </div>

        <p class="copyright"> Copyright : Mass Production IT</p>

    </div>

    <div class="mobile-player">
        <div class="playerButton">
            <div class="player-image"></div>
            <div class="image-cover"></div>
            <div onclick="playRadio()" class="playIcon">
                <i class="fa-solid fa-play play"></i>
                <i class="fa-solid fa-pause pause" style="color: #f5f5f5; display: none;"></i>

            </div>

        </div>
    </div>


</body>

<script>
    const radioId = document.getElementById('audioPlayer');

    // radioId.addEventListener('canplaythrough', function() {
    //     console.log('Stream Loaded')
    //     icons = document.querySelectorAll('.playIcon');
    //     icons.forEach((el) => {
    //         el.style.display = 'block';
    //     });
    // });

    // Error event listener to handle any issues with loading the audio
    // radioId.addEventListener('error', function() {
    //     console.log("Failed to load stream. Please check the stream key.");
    //     // playButton.disabled = true; // Disable the play button in case of error
    // });

    const audioPlayer = document.getElementById('newsPlayer');
    const seekBar = document.getElementById('seekBar');
    const seekBarProgress = document.getElementById('seekBarProgress');
    const seekBar2 = document.getElementById('seekBar2');
    const seekBarProgress2 = document.getElementById('seekBarProgress2');


    let isDragging = false;
    let isDragging2 = false;

    // Mouse down event: start dragging
    seekBar.addEventListener('mousedown', function(event) {
        isDragging = true;
        seekAudio(event); // Immediately seek to the clicked position
    });

    seekBar2.addEventListener('mousedown', function(event) {
        isDragging2 = true;
        seekAudio2(event); // Immediately seek to the clicked position
    });



    // Mouse move event: update the progress while dragging
    document.addEventListener('mousemove', function(event) {
        if (isDragging2) {
            seekBar2.classList.add('grabbing');
            seekAudio2(event); // Update the seek position as the mouse moves
        }
        if (isDragging) {
            seekBar.classList.add('grabbing');
            seekAudio(event); // Update the seek position as the mouse moves
        }
    });

    // Mouse up event: stop dragging
    document.addEventListener('mouseup', function() {
        isDragging = false;
        seekBar.classList.remove('grabbing');
        isDragging2 = false;
        seekBar2.classList.remove('grabbing');
    });

    // Update the seek bar as the audio plays
    audioPlayer.addEventListener('timeupdate', function() {
        const progress = (audioPlayer.currentTime / audioPlayer.duration) * 100;
        seekBarProgress2.style.width = progress + '%';
        seekBarProgress.style.width = progress + '%';

        if (audioPlayer.currentTime + 1 > audioPlayer.duration) {
            console.log('Finishinggg');


            controlAudio();
            seekBarProgress.style.width = '0%';
            seekBarProgress2.style.width = '0%';
            audioPlayer.currentTime = 0;
        }


        const currentTime = document.querySelectorAll(".current");

        const duration = audioPlayer.currentTime;
        const hours = Math.floor(duration / 3600);
        const minutes = Math.floor((duration % 3600) / 60);
        const seconds = Math.floor(duration % 60);

        currentTime.forEach((el) => {

            el.innerText = `${hours < 10 ? '0' + hours : hours}:${minutes < 10 ? '0' + minutes : minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
        })
    });

    // When the metadata (duration) of the audio is loaded
    audioPlayer.addEventListener('loadedmetadata', function() {
        // Get the duration in seconds
        const duration = audioPlayer.duration;

        // Calculate hours, minutes, and seconds
        const hours = Math.floor(duration / 3600);
        const minutes = Math.floor((duration % 3600) / 60);
        const seconds = Math.floor(duration % 60);

        const totalTime = document.querySelectorAll(".total");

        totalTime.forEach((el) => {
            el.innerText = `${hours < 10 ? '0' + hours : hours}:${minutes < 10 ? '0' + minutes : minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
        })

        // Display the duration (in hours:minutes:seconds format)

    });

    // Seek to a specific time in the audio when clicking on the seek bar
    function seekAudio(event) {
        const rect = seekBar.getBoundingClientRect();
        const offsetX = event.clientX - rect.left;
        const percentage = (offsetX / seekBar.offsetWidth);
        audioPlayer.currentTime = percentage * audioPlayer.duration;

        const currentTime = document.querySelectorAll(".current");

        currentTime.forEach((el) => {
            el.innerText = audioPlayer.currentTime;
        })

    }

    // const audioPlayer2 = document.getElementById('newsPlayer');

    
    // Update the seek bar as the audio plays
    // audioPlayer2.addEventListener('timeupdate', function () {

    // });

    // Seek to a specific time in the audio when clicking on the seek bar
    function seekAudio2(event) {
        const rect = seekBar2.getBoundingClientRect();
        const offsetX = event.clientX - rect.left;
        const percentage = (offsetX / seekBar2.offsetWidth);
        audioPlayer.currentTime = percentage * audioPlayer.duration;

        const currentTime = document.querySelectorAll(".current");
        const duration = audioPlayer.currentTime;
        const hours = Math.floor(duration / 3600);
        const minutes = Math.floor((duration % 3600) / 60);
        const seconds = Math.floor(duration % 60);

        currentTime.forEach((el) => {

            el.innerText = `${hours}:${minutes < 10 ? '0' + minutes : minutes}:${seconds < 10 ? '0' + seconds : seconds}`;;
        })
    }
    //Time Show

    setInterval(() => {
        currentDate = new Date();

        // Specify the options for the desired time zone (Toronto)
        let options = {
            timeZone: 'America/Toronto',
            hour12: true,
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            month: 'long',
            day: 'numeric'
        };

        let timeInToronto = new Intl.DateTimeFormat('en-US', options).format(currentDate);

        document.querySelector(".time").innerText = timeInToronto;


    }, 1000)

    window.addEventListener("resize", initSlider);
    // window.addEventListener("load", initSlider);
    // window.addEventListener("load", EventLoader);
    window.onload = function() {
        loadStream();
        EventLoader();
        FeatureLoader();
        AllProgramLoad();
    }

    const scrollButton = document.querySelector('.scroll');
    const player = document.querySelector('.player');
    const nav = document.querySelector('.nav');
    window.onscroll = function() {

        if (document.body.scrollTop > nav.offsetHeight || document.documentElement.scrollTop > nav.offsetHeight) {
            // Show button if scrolled more than 300px from top
            scrollButton.style.display = "flex";

            setTimeout(() => {
                scrollButton.style.opacity = 1;
            }, 500)
        } else {
            // Hide button if scrolled back to top
            scrollButton.style.opacity = 0;
            setTimeout(() => {
                scrollButton.style.display = "none";
            }, 500)

        }


        const rect = player.getBoundingClientRect();

        let scrolled = window.scrollY;

        // console.log(nav.offsetHeight);

        if (scrolled >= 2 * nav.offsetHeight) {
            console.log('reached');
            document.querySelector('.sponsor').style.display = 'none';
            const classes = document.querySelector('.nav').classList;

            if (!classes.contains('top-nav')) {
                classes.add('top-nav');
            }


        } else if (scrolled < 2 * nav.offsetHeight) {
            console.log('yet to reach');
            document.querySelector('.sponsor').style.display = 'flex';
            const classes = document.querySelector('.nav').classList;

            if (classes.contains('top-nav')) {
                classes.remove('top-nav');
                setTimeout(() => {
                    updateClipPath();
                }, 600)
            }

        }
    };

    let onlineRadio;
    let isPlaying = false;
    let streamKey;
    const icons = document.querySelectorAll('.playIcon');

    function loadStream() {
        const xhr = new XMLHttpRequest();

        xhr.open('GET', '/Controllers/GetStream.php', true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {

                var response = JSON.parse(xhr.responseText);

                // console.log(response);


                const radioContainer = document.getElementById('audioPlayer')
                
                streamKey = response.data['stream'];
                console.log('Stream Loadeding');
                icons.forEach((el) => {
                            el.style.display = 'block';
                        });
                // radioContainer.setAttribute('src', response.data['stream'])


                // onlineRadio = new Howl({
                //     src: [streamKey],
                //     html5: true,
                //     format: ['mp3', 'aac'],
                //     onload: () => {
                //         console.log('Stream Loaded');
                //         isPlaying = false;
                       

                //     },
                //     onend: () => {
                //         console.log('Stream ended');
                //     },
                //     onloaderror: (id, error) => {
                //         console.error('Load error', error);
                //     },
                //     onplayerror: (id, error) => {
                //         console.error('Play error', error);
                //     }
                // });

                // onlineRadio.play();




            }
        };

        xhr.send();

    }

    function AllProgramLoad() {
        const xhr = new XMLHttpRequest();

        xhr.open('GET', '/Controllers/GetAllProgram.php', true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {

                var response = JSON.parse(xhr.responseText).data;

                const PlListBody = document.querySelector(".program-list-body");
                PlListBody.innerHTML = '';

                const Days = {
                    1: 'Monday',
                    2: 'Tuesday',
                    3: 'Wednesday',
                    4: 'Thursday',
                    5: 'Friday',
                    6: 'Saturday',
                    7: 'Sunday'
                }


                for (let i = 1; i < 8; i++) {
                    const filterd = response.filter((el) => el.day == i);

                    const PL = document.createElement('div');
                    PL.setAttribute('class', 'program-list');

                    const day = document.createElement('div');
                    day.setAttribute('class', 'day');

                    const h4 = document.createElement('h4');
                    h4.innerText = Days[i];

                    day.appendChild(h4);
                    PL.appendChild(day);

                    if (filterd.length > 0) {

                        filterd.forEach((ele) => {
                            const list = document.createElement('div');
                            list.setAttribute('class', 'list');

                            const name = document.createElement('div');
                            name.setAttribute('class', 'name');
                            name.innerText = ele.name;

                            const slot = document.createElement('div');
                            slot.setAttribute('class', 'slot');
                            slot.innerText = ele.start + ' - ' + ele.end;

                            const hr = document.createElement('hr');

                            list.appendChild(name);
                            list.appendChild(slot);

                            PL.appendChild(list);
                            PL.appendChild(hr);
                        })


                    } else {
                        const list = document.createElement('div');
                        list.setAttribute('class', 'list');
                        list.innerText = 'Not Scheduled';

                        PL.appendChild(list);
                    }

                    PlListBody.appendChild(PL);
                }

            }
        };

        xhr.send();

    }


    function validateForm() {
        const name = document.getElementById('select-name').value;
        const company = document.getElementById('select-company').value;
        const email = document.getElementById('select-email').value;
        const contact = document.getElementById('select-contact').value;
        const address = document.getElementById('select-address').value;
        const description = document.getElementById('select-description').value;
        const button = document.getElementById('submit');

        let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (emailPattern.test(email) && name.length > 0 && company.length > 0 && contact.length > 0 && address.length > 0 && description.length > 0) {
            button.disabled = false;

        } else {
            button.disabled = true;

        }

    }

    //Submit sponsor
    document.getElementById("sponsor-form").addEventListener('submit', function(event) {
        let button = document.getElementById('submit');
        let button2 = document.getElementById('submiting');
        button.style.display = 'none';
        button2.style.display = 'block';
        event.preventDefault();

        const formData = new FormData;

        const name = document.getElementById('select-name').value;
        const company = document.getElementById('select-company').value;
        const email = document.getElementById('select-email').value;
        const contact = document.getElementById('select-contact').value;
        const address = document.getElementById('select-address').value;
        const description = document.getElementById('select-description').value;

        formData.append('name', name);
        formData.append('company', company);
        formData.append('email', email);
        formData.append('contact', contact);
        formData.append('address', address);
        formData.append('description', description);
        formData.append('submit', true)

        const xhr = new XMLHttpRequest();

        xhr.open('POST', '/Controllers/SendSponsorInfo.php', true);

        xhr.onload = function() {
            if (xhr.status == 200) {

                var response = JSON.parse(xhr.responseText);
                button.style.display = 'block';
                button2.style.display = 'none';

                if (response.status) {
                    alertRise(true, response.message)
                    scrollToTop();
                } else {
                    alertRise(false, response.message)
                }



                document.getElementById('select-name').value = '';
                document.getElementById('select-company').value = '';
                document.getElementById('select-email').value = '';
                document.getElementById('select-contact').value = '';
                document.getElementById('select-address').value = '';
                document.getElementById('select-description').value = '';
                validateForm();

            } else {
                console.error('Error submitting form ', xhr.statusText);
            }
        }

        xhr.send(formData);


    })

    function scrollToTop() {
        const element = document.getElementById('body');
        element.scrollIntoView({
            behavior: 'smooth' // This adds smooth scrolling
        });

    }

    function goToSponsor(val) {
        const element = document.querySelector('.footer');
        if (!val) {
            slideBar(false);
            const rect = element.getBoundingClientRect();

            // Scroll the page down by the position of the element plus an additional 100px
            window.scrollTo({
                top: window.scrollY + rect.top, // Current scroll position + element's top position + 100px
                behavior: 'smooth' // Smooth scrolling
            });
        } else {
            const rect = element.getBoundingClientRect();

            // Scroll the page down by the position of the element plus an additional 100px
            window.scrollTo({
                top: window.scrollY + rect.top - 200, // Current scroll position + element's top position + 100px
                behavior: 'smooth' // Smooth scrolling
            });
        }

    }


    function EventLoader() {

        const xhr = new XMLHttpRequest();
        // let today = new Date("2025-02-17");
        // const day = today.getDay() == 0 ? 7 : today.getDay();

        // console.log(day);

        let currentDate = new Date();

        // Specify the options for the desired time zone (Toronto)
        let options = {
            timeZone: 'America/Toronto',
            hour12: false,
            weekday: 'short',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric'
        };

        let timeInToronto = new Intl.DateTimeFormat('en-US', options).format(currentDate);

        timeInToronto = timeInToronto.split(' ')
        const WeekDays = {
            'Mon': 1,
            'Tue': 2,
            'Wed': 3,
            'Thu': 4,
            'Fri': 5,
            'Sat': 6,
            'Sun': 7
        }

        const day = WeekDays[timeInToronto[0]];
        const time = timeInToronto[1].split(':');
        const curHour = time[0];
        const curMin = time[1];

        const curTimeInSeconds = curHour * 3600 + curMin * 60;


        xhr.open('GET', '/Controllers/GetTodayEvents.php?today=' + day, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.querySelector(".container-spinner").style.display = "none"
                document.querySelector(".container").style.display = "block"

                var response = JSON.parse(xhr.responseText).data;
                document.querySelector(".image-list").innerHTML = '';


                for (let i = 0; i < response.length; i++) {
                    const Sthour = response[i].start.split(':')[0];
                    const StMin = response[i].start.split(':')[1];
                    const startTimeInSeconds = Sthour * 3600 + StMin * 60;

                    const Enhour = response[i].end.split(':')[0];
                    const EnMin = response[i].end.split(':')[1];
                    const endTimeInSeconds = Enhour * 3600 + EnMin * 60;

                    let imgSrc = response[i].image;
                    imgSrc = imgSrc.split("/");
                    imgSrc = imgSrc[imgSrc.length - 1];

                    imgSrc = "Public/Program/" + imgSrc;

                    const prgName = response[i].name;
                    const Start = response[i].start;
                    const End = response[i].end;



                    if (curTimeInSeconds >= startTimeInSeconds && curTimeInSeconds < endTimeInSeconds) {


                        const activeItem = document.createElement('div');
                        activeItem.classList.add("active-item");

                        const activeItemCover = document.createElement('div');
                        activeItemCover.classList.add("active-item-cover");

                        const activeImg = document.createElement('img');
                        activeImg.classList.add("active-src");
                        // const img = response[i].image;
                        activeImg.setAttribute('src', imgSrc);

                        const activeItemText = document.createElement('div');
                        activeItemText.classList.add("active-item-text");

                        const activeH4 = document.createElement('h4');
                        activeH4.textContent = "ON Air";

                        const activeSlot = document.createElement('div');
                        activeSlot.classList.add("slot");

                        const activeSpan = document.createElement('span');
                        activeSpan.textContent = prgName;


                        activeSlot.appendChild(activeSpan);
                        activeItemText.appendChild(activeH4);
                        activeItemText.appendChild(activeSlot);
                        activeItem.appendChild(activeItemCover);
                        activeItem.appendChild(activeImg);
                        activeItem.appendChild(activeItemText);

                        document.querySelector(".image-list").appendChild(activeItem);
                    } else {
                        const imageItem = document.createElement('div');
                        imageItem.classList.add("image-item");

                        const imageItemCover = document.createElement('div');
                        imageItemCover.classList.add("image-item-cover");

                        const img = document.createElement('img');
                        img.classList.add("image-src");
                        // const imgSrc = response[i].image;
                        img.setAttribute('src', imgSrc);

                        const imageItemText = document.createElement('div');
                        imageItemText.classList.add("image-item-text");

                        const h4 = document.createElement('h4');
                        h4.textContent = prgName;

                        const slot = document.createElement('div');
                        slot.classList.add("slot");

                        const i = document.createElement('i');
                        i.classList.add('fa-brands', 'fa-creative-commons-sampling', 'icon');

                        const span = document.createElement('span');
                        span.textContent = Start + ' - ' + End;

                        slot.appendChild(i);
                        slot.appendChild(span);
                        imageItemText.appendChild(h4);
                        imageItemText.appendChild(slot);
                        imageItem.appendChild(imageItemCover);
                        imageItem.appendChild(img);
                        imageItem.appendChild(imageItemText);

                        document.querySelector(".image-list").appendChild(imageItem);

                    }


                }


                initSlider();
                scrollToCenter();




            }
        };

        xhr.send();


    }

    let audioResponse;

    function FeatureLoader() {

        const xhr = new XMLHttpRequest();

        xhr.open('GET', '/Controllers/GetFeaturedNews.php', true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {

                audioResponse = JSON.parse(xhr.responseText).data;
                // console.log(audioResponse);

                const featureContainer = document.querySelector(".feature-container");

                if (audioResponse.length > 0) {
                    const allFeatures = document.querySelector(".all-features");
                    allFeatures.innerHTML = '';


                    for (let i = 0; i < audioResponse.length; i++) {


                        let imgSrc = audioResponse[i].image;
                        imgSrc = imgSrc.split("/");
                        imgSrc = imgSrc[imgSrc.length - 1];
                        imgSrc = "Public/News/" + imgSrc;

                        let audioSrc = audioResponse[i].audio;
                        audioSrc = audioSrc.split("/");
                        audioSrc = audioSrc[audioSrc.length - 1];
                        audioSrc = "Public/Audio/" + audioSrc;

                        const prgName = audioResponse[i].description;
                        const newsDate = audioResponse[i].date;


                        if (i == 0) {
                            const newsPlayer = document.getElementById("newsPlayer");
                            newsPlayer.setAttribute('src', audioSrc);
                            // console.log(newsPlayer.duration);

                            const newsTitle = document.querySelectorAll(".news-title");
                            for (let k = 0; k < newsTitle.length; k++) {
                                newsTitle[k].querySelector("h4").innerText = prgName;
                                newsTitle[k].querySelector("h6").innerText = newsDate;
                            }

                            document.querySelector(".curr-image").setAttribute('src', imgSrc);

                            const hr = document.createElement("hr");
                            hr.setAttribute("class", "current_player");

                            const h6 = document.createElement("h6");
                            h6.innerText = newsDate;

                            const img = document.createElement("img");
                            img.setAttribute('class', 'feature-image');
                            img.setAttribute('src', imgSrc);

                            const feature = document.createElement('div');
                            feature.setAttribute('id', i + 1);
                            feature.setAttribute('class', 'feature');

                            feature.appendChild(img);
                            feature.appendChild(h6);
                            feature.appendChild(hr);

                            allFeatures.appendChild(feature);
                        } else {
                            const h6 = document.createElement("h6");
                            h6.innerText = newsDate;

                            const img = document.createElement("img");
                            img.setAttribute('class', 'feature-image');
                            img.setAttribute('src', imgSrc);

                            const feature = document.createElement('div');
                            feature.setAttribute('id', i + 1);
                            feature.setAttribute('class', 'feature');

                            feature.appendChild(img);
                            feature.appendChild(h6);

                            allFeatures.appendChild(feature);
                        }


                    }

                } else {
                    featureContainer.innerHTML = "<div style='width: 100%; text-align: center'>No Recordings found</div>"
                }





            }
        };

        xhr.send();


    }

    function initSlider() {

        const imageList = document.querySelector(".slider-wrapper .image-list")
        const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
        const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
        const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
        const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

        console.log(imageList.scrollWidth);


        scrollbarThumb.addEventListener("mousedown", (e) => {
            const startX = e.clientX;
            const thumbPosition = scrollbarThumb.offsetLeft;
            const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;


            const handleMouseMove = (e) => {
                const deltX = e.clientX - startX;
                const newThumbPosition = thumbPosition + deltX;

                const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                scrollbarThumb.style.left = `${boundedPosition}px`;
                imageList.scrollLeft = scrollPosition;

            }

            const handleMouseUp = () => {
                document.removeEventListener("mousemove", handleMouseMove);
                document.removeEventListener("mouseup", handleMouseUp);
            }

            document.addEventListener("mousemove", handleMouseMove);
            document.addEventListener("mouseup", handleMouseUp);


        });


        slideButtons.forEach(button => {
            button.addEventListener("click", () => {
                const direction = button.id === "prev-slide" ? -1 : 1;
                const scrollAmount = imageList.clientWidth * direction;

                imageList.scrollBy({
                    left: scrollAmount,
                    behavior: "smooth"
                })
            })
        });

        const handleSlideButtons = () => {
            slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";

            slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";

        }

        const updateScrollThumbPosition = () => {
            const scrollPosition = imageList.scrollLeft;
            const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth = scrollbarThumb.offsetWidth);
            scrollbarThumb.style.left = `${thumbPosition}px`;
        }

        imageList.addEventListener("scroll", () => {
            updateScrollThumbPosition();
            handleSlideButtons();
        });


    }

    function scrollToCenter() {
        const imageList = document.querySelector(".image-list");
        const activeItem = document.querySelector(".active-item");



        // Ensure there is an active item
        if (activeItem) {
            // Get the width of the image list and the active item


            const listWidth = imageList.clientWidth;
            const itemWidth = activeItem.offsetWidth;

            // Calculate the center position of the active item
            const activeItemPosition = activeItem.offsetLeft;

            // Calculate the scroll position to center the active item
            const centerScrollPosition = activeItemPosition - (listWidth / 2) + (itemWidth / 2);

            // Scroll the image list to the calculated position
            imageList.style.scrollBehavior = 'smooth';
            imageList.scrollLeft = centerScrollPosition;
        }
    }



    // Call updateClipPath on load and window resize

    window.addEventListener('resize', updateClipPath);

    function playRadio(val) {
        const radio = document.getElementById("audioPlayer");
        const audio = document.getElementById("newsPlayer");
        const play = document.querySelectorAll(".play");
        const pause = document.querySelectorAll(".pause");

        if (val) {
            play.forEach((e) => {
                e.style.display = "block";
            })
            pause.forEach((e) => {
                e.style.display = "none";
            })

            // radio.pause();
            onlineRadio.stop();
            isPlaying = false;
            deactiveSpike();
        } else {
            console.log('Is Playing...', isPlaying);
            
            if (!isPlaying) {

                console.log('audio Paused..', audio.paused);
                
                if (!audio.paused) {
                    controlAudio();

                    setTimeout(() => {
                        // radio.play();

                        // if (onlineRadio) {
                        //     onlineRadio.unload();
                        // }

                        onlineRadio = new Howl({
                            src: [streamKey],
                            html5: true,
                            format: ['mp3', 'aac'],
                            onload: () => {
                                console.log('Stream Loaded');
                    

                            },
                            onend: () => {
                                console.log('Stream ended');
                            },
                            onloaderror: (id, error) => {
                                console.error('Load error', error);
                            },
                            onplayerror: (id, error) => {
                                console.error('Play error', error);
                            }
                        });

                        isPlaying = true;
                        onlineRadio.play();
                    }, 300)

                } else {
                    // radio.play();
                    // if (onlineRadio) {
                    //     onlineRadio.unload();
                    // }

                    onlineRadio = new Howl({
                        src: [streamKey],
                        html5: true,
                        format: ['mp3', 'aac'],
                        onload: () => {
                            console.log('Stream Loaded');
                           

                        },
                        onend: () => {
                            console.log('Stream ended');
                        },
                        onloaderror: (id, error) => {
                            console.error('Load error', error);
                        },
                        onplayerror: (id, error) => {
                            console.error('Play error', error);
                        }
                    });

                    isPlaying = true;
                    onlineRadio.play();
                }
                // radio.currentTime = 0;
                // play.classList.toggle("show");


                play.forEach((e) => {
                    e.style.display = "none";
                })
                pause.forEach((e) => {
                    e.style.display = "block";
                })

                // setTimeout(() => {

                //     pause.classList.toggle("show")
                // }, 1000)

                activeSpike();
            } else {

                play.forEach((e) => {
                    e.style.display = "block";
                })
                pause.forEach((e) => {
                    e.style.display = "none";
                })


                // radio.volume = 0;
                // radio.pause();
                isPlaying = pause;
                onlineRadio.stop();
                deactiveSpike();
            }
        }

    }

    let current = 1;

    function selectAudio(event) {
        // console.log(event.target.parentElement.id);
        if (event.target.classList.contains("feature-image")) {
            const parenElement = event.target.parentElement;
            if (current != parenElement.id) {
                const selectedRecord = audioResponse[parenElement.id - 1];

                let imgSrc = selectedRecord.image;
                imgSrc = imgSrc.split("/");
                imgSrc = imgSrc[imgSrc.length - 1];
                imgSrc = "Public/News/" + imgSrc;

                let audioSrc = selectedRecord.audio;
                audioSrc = audioSrc.split("/");
                audioSrc = audioSrc[audioSrc.length - 1];
                audioSrc = "Public/Audio/" + audioSrc;

                /* Pick the audio and play in audio player */

                const newsTitle = document.querySelectorAll(".news-title");
                for (let k = 0; k < newsTitle.length; k++) {
                    newsTitle[k].querySelector("h4").innerText = selectedRecord.description;
                    newsTitle[k].querySelector("h6").innerText = selectedRecord.date;
                }

                document.querySelector(".curr-image").setAttribute('src', imgSrc);


                playAudio(audioSrc);

                document.querySelector(".current_player").remove();
                document.querySelector(".active-circle").classList.remove("active-circle");
                const hr = document.createElement("hr");
                hr.classList.add("current_player");
                parenElement.appendChild(hr)
                current = Number(parenElement.id);
                current = Math.ceil(current / 3)
                // console.log(current);


                const circles = document.querySelectorAll(".circle");
                circles[current - 1].classList.add("active-circle");

            }
        }
    }

    function playAudio(src) {
        const audio = document.getElementById("newsPlayer");
        // const radio = document.getElementById("audioPlayer");
        const play = document.querySelectorAll(".audioPlay");
        const pause = document.querySelectorAll(".audioPause");
        audio.setAttribute('src', src);
        // console.log(audio);

        playRadio(true);

        if (audio) {
            if (isPlaying) {
                isPlaying = false;
                onlineRadio.stop()
                deactiveSpike();
            }
            setTimeout(() => {
                audio.play();
            }, 500)

        } else {
            console.log("audio not found");

        }

        play.forEach((el) => {
            el.classList.remove("show");
            el.classList.add("hide");
        })

        pause.forEach((el) => {
            el.classList.add("show");
            el.classList.remove("hide");
        })


    }

    function controlAudio() {
        const audio = document.getElementById("newsPlayer");
        const play = document.querySelectorAll(".audioPlay");
        const pause = document.querySelectorAll(".audioPause");

        if (audio.paused) {
            audio.play();
            playRadio(true);

        } else {
            audio.pause();
        }

        play.forEach((el) => {
            el.classList.toggle("show");
            el.classList.toggle("hide");
        })

        pause.forEach((el) => {
            el.classList.toggle("show");
            el.classList.toggle("hide");
        })



    }


    function activeSpike() {

        const lines = document.querySelectorAll(".line");
        lines.forEach(lin => {
            lin.classList.add("lines");
        })
    }

    function deactiveSpike() {
        const lines = document.querySelectorAll(".line");
        lines.forEach(lin => {
            lin.classList.remove("lines");
        })
    }

    function slideBar(val) {
        const sidebar = document.querySelector(".mobile-side-bar");
        const sidebarContent = document.querySelector(".mobile-side-bar-content");
        if (val) {
            sidebar.style.display = "block"
        } else {

            sidebarContent.classList.add("bar-close");

            setTimeout(() => {
                sidebar.style.display = "none"
                sidebarContent.classList.remove("bar-close");
            }, 300)

        }

    }

    function openSignin(val) {
        const form = document.querySelector(".signin-form");

        if (val) {
            form.style.display = "flex"
        } else {
            form.style.display = "none"
        }
    }

    function validateLogin() {
        const username = document.getElementById("username").value.length;
        const password = document.getElementById("password").value.length;
        const login = document.getElementById("login-submit");

        if (username > 0 && password > 0) {
            login.disabled = false;
        } else {
            login.disabled = true;
        }
    }

    function submitLoginform() {
        let button = document.getElementById('login-submit');
        let button2 = document.getElementById('login-submiting');
        button.style.display = 'none';
        button2.style.display = 'block';
        return true;
    }

    function mobileOpenSignin(val) {
        const form = document.querySelector(".mobile-form");

        if (val) {
            form.style.display = "flex"
        } else {
            form.style.display = "none"
        }
    }

    function mobileValidateLogin() {
        const username = document.getElementById("mobile-username").value.length;
        const password = document.getElementById("mobile-password").value.length;
        const login = document.getElementById("mobile-login-submit");

        if (username > 0 && password > 0) {
            login.disabled = false;
        } else {
            login.disabled = true;
        }
    }

    function mobileSubmitLoginform() {
        let button = document.getElementById('mobile-login-submit');
        let button2 = document.getElementById('mobile-login-submiting');
        button.style.display = 'none';
        button2.style.display = 'block';
        return true;
    }

    function programListView(val) {
        const pList = document.querySelector(".program-overlay").style;
        if (val) {
            pList.display = "block";
        } else {

            document.querySelector(".program-view").classList.add("close-program-view");
            setTimeout(() => {
                pList.display = "none";
                document.querySelector(".program-view").classList.remove("close-program-view");

            }, 300)
        }

    }

    function SongReqView(val) {

        const pList = document.querySelector(".req-overlay").style;
        if (val) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', '/Controllers/GetProgramList.php', true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const response = JSON.parse(xhr.responseText)

                    const select = document.getElementById('select-event')
                    select.innerHTML = '';
                    const FixedOption = document.createElement('option')
                    FixedOption.innerText = 'Select Program';
                    FixedOption.setAttribute('selected', true);
                    FixedOption.setAttribute('hidden', true);
                    FixedOption.setAttribute('value', 'none');
                    select.appendChild(FixedOption);


                    for (let i = 0; i < response.data.length; i++) {
                        const option = document.createElement('option');
                        option.innerText = response.data[i]['name'];
                        option.setAttribute('value', response.data[i]['ID']);
                        select.appendChild(option);
                    }


                } else {
                    console.error('Error submitting form ', xhr.statusText);
                }
            };

            xhr.send();
            pList.display = "block";
        } else {

            document.querySelector(".req-view").classList.add("close-req-view");
            setTimeout(() => {
                pList.display = "none";
                document.querySelector(".req-view").classList.remove("close-req-view");

            }, 300)
        }

    }

    function openSelect(ID, value) {
        const select = document.getElementById(ID);

        if (!value) {
            select.style.display = 'none';
        } else {
            select.style.display = 'flex';
        }
    }



    function validateReqForm() {
        const reqName = document.getElementById("req-name").value.length;
        const song = document.getElementById("song").value.length;
        const movie = document.getElementById("movie").value.length;
        const from = document.getElementById("from").value.length;
        const event = document.getElementById("select-event").value;
        const description = document.getElementById("description").value.length;
        const req = document.getElementById("req-submit");

        if (reqName > 0 && song > 0 && movie > 0 && from > 0 && event != 'none' && description > 0) {
            req.disabled = false;
        } else {
            req.disabled = true;
        }
    }

    //Add Song request
    document.getElementById("song-form").addEventListener('submit', function(event) {
        let button = document.getElementById('req-submit');
        let button2 = document.getElementById('req-submiting');
        button.style.display = 'none';
        button2.style.display = 'block';

        event.preventDefault();

        const formData = new FormData;


        const reqName = document.getElementById('req-name').value;
        const reqFrom = document.getElementById('from').value;
        const song = document.getElementById('song').value;
        const movie = document.getElementById('movie').value;
        const eventName = document.getElementById('select-event').value;
        const description = document.getElementById('description').value;

        formData.append('reqName', reqName);
        formData.append('reqFrom', reqFrom);
        formData.append('song', song);
        formData.append('movie', movie);
        formData.append('event', eventName);
        formData.append('description', description);
        formData.append('submit', true);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/Controllers/AddSongRequest.php', true);
        xhr.onload = function() {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText)

                button.style.display = 'block';
                button2.style.display = 'none';


                if (data.status) {
                    SongReqView(false);
                    alertRise(true, data.message)
                    document.getElementById('req-name').value = '';
                    document.getElementById('from').value = '';
                    document.getElementById('song').value = '';
                    document.getElementById('movie').value = '';
                    document.getElementById('select-event').value = 'none';
                    document.getElementById('description').value = '';
                } else {
                    SongReqView(false);
                    alertRise(false, data.message)
                    document.getElementById('req-name').value = '';
                    document.getElementById('from').value = '';
                    document.getElementById('song').value = '';
                    document.getElementById('movie').value = '';
                    document.getElementById('select-event').value = 'none';
                    document.getElementById('description').value = '';
                }

                validateReqForm();
            } else {
                console.error('Error submitting form ', xhr.statusText);
            }
        };

        xhr.send(formData);
    });

    function goToDash(role) {
        // window.location.href = "/dashboard"

        if (role === 'RJ') {
            window.open("/rjboard", "_blank");
        } else {
            window.open("/dashboard", "_blank");
        }

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



</html>