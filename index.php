<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eye Tamil FM | Home</title>
    <link rel="icon" type="image/png" href="/Assets/Images/logo.png" />
    <script src="https://kit.fontawesome.com/a10acb0cd6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="Assets/CSS/index.css" />
</head>

<body>
    <div class="body-cover"></div>

    <!-- for Width 2600px -->



    <svg width="0" height="0">
        <defs>
            <clipPath id="custom-clip-path">
                <!-- Define the path here -->
                <path id="clip-path" d="" />
            </clipPath>
        </defs>

        <use href="/Assets/Images/soundcloud-brands-solid.svg#clip-path"></use>
    </svg>



    <div class="nav">
        <audio id="audioPlayer" src="http://streams.radio.co/s937ac5492/listen"></audio>

        <div class="nav-cover"></div>
        <div class="nav-container">
            <div class="nav-logo">
                <img src="Assets/Images/logo.png" alt="">

            </div>
            <div class="nav-player playing">
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
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    chevron_left
                </button>
                <ul class="image-list">

                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>

                    <div class="active-item">
                        <div class="active-item-cover"></div>
                        <img class="active-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="active-item-text">
                            <h4>ON Air</h4>
                            <div class="slot">
                            <!-- <i class="fa-brands fa-creative-commons-sampling icon"></i> -->
                             <span>Nilachoru</span>
                            </div>
                        </div>
                    </div>

                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>                 
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>                 
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>                 
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>                 
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>                 
                    <div class="image-item ">
                        <div class="image-item-cover"></div>
                        <img class="image-src" src="Assets/Images/test.jpeg" alt="">
                        <div class="image-item-text">
                            <h4>Rakankak 16</h4>
                            <div class="slot">
                            <i class="fa-brands fa-creative-commons-sampling icon"></i>
                             <span>06:00 PM - 08:00 PM</span>
                            </div>
                        </div>
                    </div>                 

                   
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    chevron_right
                </button>
            </div>

    
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>

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
                <audio id="newsPlayer" src="/Assets/Audio/My Universe.mp3"></audio>
                    <div onclick="controlAudio()">
                        <i class="fa-regular fa-circle-play fa-shake audioPlay show" style="color: #d1811b80; font-size: 48px; "></i>
                        <i class="fa-regular fa-circle-pause audioPause hide" style="color: #d1811b80; font-size: 48px;"></i>
                    </div>
                    <div class="news-title">
                        <h4>Daily News</h4>
                        <h6>2025/02/12</h6>
                    </div>
                </div>
              
            </div>
        </div>
        
    </div>

    <div>
        <button ><a href="https://eyefm.ca.ycmcloud.com/live_chat.v1.0.0.js?channelNumber=LC00000" _blank>Live Chat</a></button>

        
    </div>
    <script src="https://eyefm.ca.ycmcloud.com/live_chat.v1.0.0.js?channelNumber=LC00000" ></script>

</body>

<script>
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
    window.addEventListener("load", initSlider);

    window.onload = function() {
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
            imageList.scrollLeft = centerScrollPosition;
        }
    }



    // Call updateClipPath on load and window resize

    window.addEventListener('resize', updateClipPath);

    function playRadio() {
        const radio = document.getElementById("audioPlayer");
        const play = document.querySelector(".play");
        const pause = document.querySelector(".pause");

        if (radio.paused) {
            // radio.currentTime = 0;
            // play.classList.toggle("show");


            play.style.display = "none";
            pause.style.display = "block";

            // setTimeout(() => {

            //     pause.classList.toggle("show")
            // }, 1000)
            radio.play();
            activeSpike();
        }else {
            pause.style.display = "none";

play.style.display = "block";
// radio.volume = 0;
radio.pause();
deactiveSpike();
        }



        // if (radio.volume == 0) {

        //     play.style.display = "none";
        //     pause.style.display = "block";
        //     radio.volume = 1;
        //     radio.play();
        //     activeSpike();
        // } else {
        //     pause.style.display = "none";

        //     play.style.display = "block";
        //     radio.volume = 0;
        //     radio.pause();
        //     deactiveSpike();
        // }

    }

    let current = 1;
    function selectAudio(event) {
        // console.log(event.target.parentElement.id);
        if(event.target.classList.contains("feature-image")){
            const parenElement = event.target.parentElement;
            if(current != parenElement.id){

                /* Pick the audio and play in audio player */
                playAudio("/Assets/Audio/My Universe.mp3");

                document.querySelector(".current_player").remove();
                document.querySelector(".active-circle").classList.remove("active-circle");
                const hr = document.createElement("hr");
                hr.classList.add("current_player");
                parenElement.appendChild(hr)
                current = Number(parenElement.id);

                const circles = document.querySelectorAll(".circle");
                circles[current-1].classList.add("active-circle");
                
            }
        }
    }

    function playAudio(src){
        const audio = document.getElementById("newsPlayer");
        const play = document.querySelector(".audioPlay");
        const pause = document.querySelector(".audioPause");
        audio.setAttribute('src', src);
        // console.log(audio);
        

        if(audio) {
            playRadio();
            setTimeout(() => {
                audio.play();
            }, 500)
            
        }else{
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

        if(audio.paused){
            audio.play();

        }else {
            audio.pause();
        }

        play.classList.toggle("show");
        play.classList.toggle("hide");
        pause.classList.toggle("show");
        pause.classList.toggle("hide");
       

        // if(play.style.display === "none"){
        //     play.style.display = "block"
        //     pause.style.display = "none"
        // }

        // if(pause.style.display === "none"){
        //     play.style.display = "none"
        //     pause.style.display = "block"
        // }

        // if (radio.paused) {
        //     // radio.currentTime = 0;
        //     // play.classList.toggle("show");
        //     play.style.display = "none";
        //     pause.style.display = "block";

        //     // setTimeout(() => {

        //     //     pause.classList.toggle("show")
        //     // }, 1000)
        //     radio.play();
        //     activeSpike();
        // }
        // if (radio.volume == 0) {

        //     play.style.display = "none";
        //     pause.style.display = "block";
        //     radio.volume = 1;
        //     radio.play();
        //     activeSpike();
        // } else {
        //     pause.style.display = "none";

        //     play.style.display = "block";
        //     radio.volume = 0;
        //     radio.pause();
        //     deactiveSpike();
        // }

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
</script>



</html>