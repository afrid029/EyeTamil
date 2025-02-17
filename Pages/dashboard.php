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

<!-- Announcement Model -->
 <div id="announcement" class="add-model-overlay">
    <div class="add-model">
        <div class="title">
            <h3>Announcement</h3>
            <div onclick="handleModel('announcement',false)" class="close">
                <div >x</div>
            </div>
        </div>

        <form class="form" action="#" method="post">
            <div class="FormRow">
                <textarea name="announcement" id="announcement" maxlength="250" placeholder="Announcement content"></textarea>
            </div>

            <div class="FormRow">
                <select name="" id="">
                    <Option>cdss</Option>
                    <Option>cdss</Option>
                    <Option>cdss</Option>
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

 <!-- User Model -->

 <div id="user" class="add-model-overlay">
    <div class="add-model">
        <div class="title">
            <h3>Create RJ</h3>
            <div onclick="handleModel('user',false)" class="close">
                <div >x</div>
            </div>
        </div>

        <form class="form" action="#" method="post">
            <div class="FormRow">
                <input type="text" name="userid" id="userid" placeholder="username">
            </div>
            <div class="FormRow">
                <input type="password" name="password" id="password" placeholder="password">
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

            if (page == 1){
                xhr.open('GET', '/Controllers/GetPrograms.php', true);
            } else if (page == 2) {
                xhr.open('GET', '/Controllers/GetVideos.php', true);
            } else if (page == 3) {
                xhr.open('GET', '/Controllers/GetRequests.php', true);
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
            if(page != cur){
                links[cur-1].classList.remove("active");
                links[page-1].classList.add("active");
                

                const body = document.querySelector(".body");

                if(page > cur) {
                    body.classList.toggle("right");
                    setTimeout(() => {
                        body.classList.toggle("right");
                    }, 500)
                }else {
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

        function checkTicked() {
            const check = document.getElementById("conform");
            const btn = document.querySelector(".btn");

            if(check.checked) {
                btn.disabled = false
            }else {
                btn.disabled = true
            }
        }

        function gotToHome() {
            // window.location.href = "/";
            window.open("/", "_blank");
        }

        function handleModel(ID,value) {
            const ele = document.getElementById(ID);
            // console.log('sdsa');
            
            if(value){
                ele.style.display = 'block'
            } else {
                 ele.style.display = 'none'
            }

        }
    </script>
</body>

</html>