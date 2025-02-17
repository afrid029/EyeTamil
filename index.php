<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eye Tamil FM | Home</title>
    <link rel="icon" type="image/png" href="/Assets/Images/logo.png" />
    <script src="https://kit.fontawesome.com/a10acb0cd6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Lexend:wght@100..900&family=Monomakh&family=Noto+Sans+Tamil:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="Assets/CSS/index.css" />
    <link rel="stylesheet" href="Assets/CSS/Form.css" />
</head>

<body id="body">
    <div class="body-cover"></div>

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

    <div class="signin-form">
        <h3>Sign In</h3>
        <div class="close">
            <div onclick="openSignin(false)">x</div>
        </div>
        <form class="Form" action="#" method="post" oninput="validateLogin()" onsubmit="return submitLoginform()">
            <!-- <div class="FormRow">
                <input type="text" name="username" id="username" required placeholder="Username">
            </div>
            <div class="FormRow">
                <input type="password" name="password" id="password" required placeholder="Password">
            </div> -->

            <div class="button">

            

            <button onclick="goToDash()" type="button"
                    class="submit">Dashboard</button>
                <!-- <button
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
                </button> -->
            </div>
        </form>
    </div>

    <div onclick="scrollToTop()" class="scroll">
        <i class="fa-solid fa-jet-fighter-up" style="color: #f3f3f2;"></i>
    </div>

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

                    <form class="Form" action="#" method="post" oninput="mobileValidateLogin()" onsubmit="return mobileSubmitLoginform()">
                        <!-- <div class="FormRow">
                            <input type="text" name="username" id="mobile-username" required placeholder="Username">
                        </div>
                        <div class="FormRow">
                            <input type="password" name="password" id="mobile-password" required placeholder="Password">
                        </div> -->

                        <div class="button">

                        <button onclick="goToDash()" type="button"
                        class="submit">Dashboard</button>
                            <!-- <button
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
                            </button> -->
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <div class="program-overlay">
        <div class="program-view">
            <div class="title">
                <h4>Programs</h4>
                <div onclick="programListView(false)" class="p-close">x</div>
            </div>

            <div class="program-list-body">

                <div class="program-list">
                    <div class="day">
                        <h4>Monday</h4>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>

                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="program-list">
                    <div class="day">
                        <h4>Tuesday</h4>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="program-list">
                    <div class="day">
                        <h4>Wednesday</h4>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="program-list">
                    <div class="day">
                        <h4>Thursday</h4>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                </div>
                <div class="program-list">
                    <div class="day">
                        <h4>Friday</h4>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                    <div class="list">
                        <div class="name">
                            Nilchoru
                        </div>
                        <div class="slot">
                            20:00 - 21:00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="req-overlay">
        <div class="req-view">
            <div class="title">
                <h4>Dedicate a song to your favorites</h4>
                <div onclick="SongReqView(false)" class="r-close">x</div>
            </div>
            <form class="Form" action="#" method="post" oninput="validateReqForm()" onsubmit="return submitReqForm()">
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

                    <input type="text" name="event" id="select-event-value" hidden required>
                    <input style="cursor: pointer;" type="text" id="select-event" placeholder="Select Program" onclick="openSelect('dropdown-container-event',true)" readonly required>

                    <div class="dropdown-container" id="dropdown-container-event">
                        <div class="dropdown-list" id="dropdown-list-event">
                            <div value="1" class="dropdown-option">
                                Pr1
                                <div class="slot">
                                    MOnday 09scsdc
                                </div>
                            </div>
                            <hr>
                            <div value="2" class="dropdown-option">
                                    Pr1
                                <div class="slot">
                                    MOnday 09scsdc
                                </div>
                            </div>
                            <hr>
                            <div value="3" class="dropdown-option">
                                Pr1
                                <div class="slot">
                                    MOnday 09scsdc
                                </div>
                            </div>
                            <hr>
                            <div value="4" class="dropdown-option">
                                Pr1
                                <div class="slot">
                                    MOnday 09scsdc
                                </div>
                            </div>
                            <hr>
                            <div value="5" class="dropdown-option">
                                Pr1
                                <div class="slot">
                                    MOnday 09scsdc
                                </div>
                            </div>
                            <hr>
                            <div value="6" class="dropdown-option">
                                Pr1
                                <div class="slot">
                                    MOnday 09scsdc
                                </div>
                            </div>
                            <hr>
                        </div>

                    </div>

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


    <audio id="audioPlayer" src="http://streams.radio.co/s937ac5492/listen"></audio>
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

    <div class="container-body">
        <div class="container-body-cover"></div>
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
            <audio id="newsPlayer" src="/Assets/Audio/My Universe.mp3"></audio>
            <div class="mobile-playing-feature">
                <div class="mobile-playing-feature-cover"></div>
                <div class="player-bottom" style="position: relative;">

                    <div style="cursor: pointer" onclick="controlAudio()">
                        <i class="fa-regular fa-circle-play fa-shake playControl audioPlay show" style="color: #d1811b80; "></i>
                        <i class="fa-regular fa-circle-pause playControl audioPause hide" style="color: #d1811b80;"></i>
                    </div>
                    <div class="news-title">
                        <h4>Daily News</h4>
                        <h6>2025/02/12</h6>
                    </div>
                </div>
            </div>
            <div onclick="selectAudio(event)" class="all-features">
                <div id="1" class="feature">
                    <img class="feature-image" src="Assets/Images/test.jpeg" alt="">
                    <h6>2025/02/12</h6>
                    <hr class="current_player">
                </div>
                <div id="2" class="feature">
                    <img class="feature-image" src="Assets/Images/test.jpeg" alt="">
                    <h6>2025/02/12</h6>
                </div>
                <div id="3" class="feature">
                    <img class="feature-image" src="Assets/Images/test.jpeg" alt="">
                    <h6>2025/02/12</h6>
                </div>
                <div id="4" class="feature">
                    <img class="feature-image" src="Assets/Images/test.jpeg" alt="">
                    <h6>2025/02/12</h6>
                </div>
                <div id="5" class="feature">
                    <img class="feature-image" src="Assets/Images/test.jpeg" alt="">
                    <h6>2025/02/12</h6>
                </div>
                <div id="6" class="feature">
                    <img class="feature-image" src="Assets/Images/test.jpeg" alt="">
                    <h6>2025/02/12</h6>
                </div>
                <div id="7" class="feature">
                    <img class="feature-image" src="Assets/Images/test.jpeg" alt="">
                    <h6>2025/02/12</h6>
                </div>

            </div>
            <div class="hr-line">

            </div>
            <div class="playing-feature">
                <div class="playing-feature-cover"></div>

                <img class="feature-image" src="Assets/Images/test.jpeg" alt="">

                <div class="player-bottom" style="position: relative;">

                    <div style="cursor: pointer" onclick="controlAudio()">
                        <i class="fa-regular fa-circle-play fa-shake playControl audioPlay show" style="color: #d1811b80; "></i>
                        <i class="fa-regular fa-circle-pause playControl audioPause hide" style="color: #d1811b80;"></i>
                    </div>
                    <div class="news-title">
                        <h4>Daily News</h4>
                        <h6>2025/02/12</h6>
                    </div>
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

                <form action="/add-user" method="post" oninput="validateForm()" onsubmit="return submitSponsorform()">
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

    function submitSponsorform() {
        let button = document.getElementById('submit');
        let button2 = document.getElementById('submiting');
        button.style.display = 'none';
        button2.style.display = 'block';
        return true;
    }

    function scrollToTop() {
        const element = document.getElementById('body');
        element.scrollIntoView({
            behavior: 'smooth' // This adds smooth scrolling
        });

    }

    function goToSponsor(val) {
        const element = document.querySelector('.sponsorForm');
        if (!val) {
            slideBar(false)
        }
        element.scrollIntoView({
            behavior: 'smooth' // This adds smooth scrolling
        });
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


    function EventLoader() {

        setTimeout(() => {
            document.querySelector(".container-spinner").style.display = "none"
            document.querySelector(".container").style.display = "block"
            for (let i = 0; i < 15; i++) {

                if (i == 5) {
                    const activeItem = document.createElement('div');
                    activeItem.classList.add("active-item");

                    const activeItemCover = document.createElement('div');
                    activeItemCover.classList.add("active-item-cover");

                    const activeImg = document.createElement('img');
                    activeImg.classList.add("active-src");
                    activeImg.setAttribute('src', 'Assets/Images/test.jpeg');

                    const activeItemText = document.createElement('div');
                    activeItemText.classList.add("active-item-text");

                    const activeH4 = document.createElement('h4');
                    activeH4.textContent = "ON Air";

                    const activeSlot = document.createElement('div');
                    activeSlot.classList.add("slot");

                    const activeSpan = document.createElement('span');
                    activeSpan.textContent = "Nilachoru";


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
                    img.setAttribute('src', 'Assets/Images/test.jpeg');

                    const imageItemText = document.createElement('div');
                    imageItemText.classList.add("image-item-text");

                    const h4 = document.createElement('h4');
                    h4.textContent = "Rakankal 16";

                    const slot = document.createElement('div');
                    slot.classList.add("slot");

                    const i = document.createElement('i');
                    i.classList.add('fa-brands', 'fa-creative-commons-sampling', 'icon');

                    const span = document.createElement('span');
                    span.textContent = "06:00 PM - 08:00 PM";

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
        }, 2000)

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

    window.addEventListener("resize", initSlider);
    // window.addEventListener("load", initSlider);
    window.addEventListener("load", EventLoader);

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
        const play = document.querySelectorAll(".play");
        const pause = document.querySelectorAll(".pause");

        if (radio.paused) {
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
            radio.play();
            activeSpike();
        } else {

            play.forEach((e) => {
                e.style.display = "block";
            })
            pause.forEach((e) => {
                e.style.display = "none";
            })


            // radio.volume = 0;
            radio.pause();
            deactiveSpike();
        }

    }

    let current = 1;

    function selectAudio(event) {
        // console.log(event.target.parentElement.id);
        if (event.target.classList.contains("feature-image")) {
            const parenElement = event.target.parentElement;
            if (current != parenElement.id) {

                /* Pick the audio and play in audio player */
                playAudio("/Assets/Audio/My Universe.mp3");

                document.querySelector(".current_player").remove();
                document.querySelector(".active-circle").classList.remove("active-circle");
                const hr = document.createElement("hr");
                hr.classList.add("current_player");
                parenElement.appendChild(hr)
                current = Number(parenElement.id);

                const circles = document.querySelectorAll(".circle");
                circles[current - 1].classList.add("active-circle");

            }
        }
    }

    function playAudio(src) {
        const audio = document.getElementById("newsPlayer");
        const radio = document.getElementById("audioPlayer");
        const play = document.querySelector(".audioPlay");
        const pause = document.querySelector(".audioPause");
        audio.setAttribute('src', src);
        // console.log(audio);


        if (audio) {
            if (!radio.paused) {
                radio.pause();
            }
            setTimeout(() => {
                audio.play();
            }, 500)

        } else {
            console.log("audio not found");

        }
        play.classList.remove("show");
        play.classList.add("hide");
        pause.classList.add("show");
        pause.classList.remove("hide");
    }

    function controlAudio() {
        const audio = document.getElementById("newsPlayer");
        const play = document.querySelector(".audioPlay");
        const pause = document.querySelector(".audioPause");

        if (audio.paused) {
            audio.play();

        } else {
            audio.pause();
        }

        play.classList.toggle("show");
        play.classList.toggle("hide");
        pause.classList.toggle("show");
        pause.classList.toggle("hide");



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


    document.getElementById("dropdown-list-event").addEventListener('click', selectEvent)


    function selectEvent(event) {

        const selectEvent = document.getElementById('select-event');
        const selectEventValue = document.getElementById('select-event-value');

        if (event.target.classList.contains('dropdown-option')) {
            let eventName = event.target.textContent.trim();
            eventName = eventName.split(" ");
            console.log(eventName[0]);
            
            selectEvent.setAttribute('value', eventName[0])
            selectEventValue.setAttribute('value', event.target.getAttribute('value'))

            openSelect('dropdown-container-event', false);
            validateReqForm();

            // //console.log(event.target.getAttribute('value'), event.target.textContent);
        }
        else{
            console.log('Wrong');
            
        }
    }


    function validateReqForm() {
        const reqName = document.getElementById("req-name").value.length;
        const song = document.getElementById("song").value.length;
        const movie = document.getElementById("movie").value.length;
        const from = document.getElementById("from").value.length;
        const event = document.getElementById("select-event-value").value.length;
        const description = document.getElementById("description").value.length;
        const req = document.getElementById("req-submit");

        if (reqName > 0 && song > 0 && movie > 0 && from > 0 && event > 0 && description > 0) {
            req.disabled = false;
        } else {
            req.disabled = true;
        }
    }

    function submitReqForm() {
        console.log("asdasds");
        
        let button = document.getElementById('req-submit');
        let button2 = document.getElementById('req-submiting');
        button.style.display = 'none';
        button2.style.display = 'block';
        return true;
    }

    function goToDash(){
        // window.location.href = "/dashboard"
        window.open("/dashboard", "_blank");
    }
</script>



</html>