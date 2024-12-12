<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mike Dharen's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn {
            background-color: #000000;
            border-color: #000000;
            color: #ffffff;
        }

        .btn:hover {
            background-color: #cccccc;
            color: #000000;
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }

        h3 {
            text-align: center;
            color: #333333;
        }

        body {
            background-color: #f5f5f5;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            color: #333333;
        }

        .container {
            flex: 1;
        }

        footer {
            background-color: #333333;
            color: #ffffff;
        }

        .card {
            background-color: #f0f0f0;
            border: 1px solid #cccccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }

        a {
            text-decoration: none;
            color: #333333;
        }

        .text-justify {
            text-align: justify;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            height: 50px;
            width: auto;
        }
    </style>

    <link rel="icon" href="resources/logo.png">

</head>

<body>
    <header class="d-flex justify-content-between align-items-center p-3">
        <img src="resources/logo.png" alt="Logo" class="logo">
    </header>

    <div class="container mt-5">
        <h1 class="text-center">Mike Dharen Luansing</h1>
        <p class="lead text-center"> IT Student </p>

        <div class="row mt-4">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3><strong>About me</strong></h3>
                    <p class="text-justify">Hi! I'm Mike Dharen Lei F. Luansing, a third-year college student from
                        PUP-STC
                        currently taking Bachelor of Science in Information Technology. Focusing on the software
                        development. A future IT professional who have hands-on experience in different programming
                        languages such as Java, Python, and C++. I also have skilled in HTML, CSS, JavaScript, and
                        frameworks like Bootstrap. Let's dive in my coding journey!</p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card p-3">
                            <h3 class="card-title"><strong>Hobbies</strong></h3>
                            <p class="card-text ">I enjoy exploring technology, solving puzzles, and playing chess. I
                                also love watching movies during my free time as well as listening to music. Playing
                                online games and engaging in sports gives me enjoyment and fun specially when playing
                                with friends.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card p-3">
                            <h3 class="card-title"><strong>Contact info</strong></h3>
                            <p class="card-text">
                                <strong>Phone:</strong> 0951-560-1606 <br>
                                <strong>Email:</strong> <a href="mailto:dharenlei21@gmail.com">dharenlei21@gmail.com</a>
                                <br>
                                <strong>Facebook:</strong><a href="https://www.facebook.com/Mike.Dharen.07 "> Mike
                                    Dharen Luansing </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-3">
                <h3>Projects</h3>
                <button id="toggleButton" class="btn w-100 mb-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#projectList" aria-expanded="false" aria-controls="projectList"
                    onclick="toggleButtonText()">
                    Show Projects
                </button>
                <div class="collapse" id="projectList">
                    <div class="list-group">
                        <button onclick="window.location.href='A08/index.php'"
                            class="list-group-item list-group-item-action"
                            style="display: flex; justify-content: center; align-items: center; height: 100%; width: 100%;">Core
                            Memories</button>
                        <!-- <button onclick="window.location.href='PRAC/index.php'"
                            class="list-group-item list-group-item-action"
                            style="display: flex; justify-content: center; align-items: center; height: 100%; width: 100%;">Practice</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white text-center mt-5">
        <div class="text-center p-3">
            © 2024 Md-Lei.github.io
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function toggleButtonText() {
            var toggleButton = document.getElementById('toggleButton');
            var isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
            toggleButton.textContent = isExpanded ? 'Hide Projects' : 'Show Projects';
        }
    </script>
</body>

</html>