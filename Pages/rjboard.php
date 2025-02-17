<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eye Tamil FM | RJ Board</title>
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

    <div class="nav">

        <img src="/Assets/Images/borderlogo.png" alt="" />

        <div class="ul">

            <div onclick="gotToHome()"><i class="fa-solid fa-house" style="color: #e2e3e4;"></i></div>
            <div><a>Logout</a></div>

        </div>
    </div>

    <div class="body">
            <div class="program">
                <h3>Program Name</h3>

                <div class="program-bar">
                    <div class="next-slot">
                        Monday 22:00 - 23:00
                    </div>
                    <div class='modify'>
                    
                        <div class='image-update'>
                            Change Cover
                        </div>
                    </div>
                </div>
            </div>
            <div class="program">
                <h3>Announcement from Admin</h3>

                <div class="program-bar">
                    <div class="next-slot">
                        Take care of somethof for something, then we can avoid something can happen by something
                    </div>
                    <div class='checked'>
                        <input onclick='checkTicked()' type='checkbox' name='conform' id='conform'>
                        <button disabled class='btn'>Noted</button>
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
        function loadPage() {
            var xhr = new XMLHttpRequest();

                xhr.open('GET', '/Controllers/GetRequests.php', true);
            
            // document.getElementById('loading-spinner').style.display = 'block';
            // const onload = document.getElementById('onrowload');
            // onload.classList.add('onrowload');

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // document.getElementById('loading-spinner').style.display = 'none';
                    // // document.getElementById('onrowload').style.display = 'none';
                    // onload.classList.remove('onrowload');
                    var response = JSON.parse(xhr.responseText);

                    const dataContainer = document.querySelector('.req-body')

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
            loadPage();
        };


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
    </script>
</body>

</html>