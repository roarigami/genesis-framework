<style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            position:fixed;
            width:100%;
            background-color: #3F51B5;
            top:0;
            z-index:100;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link {
            color: #fff;
            position: relative;
            transition: 0.3s;
            transform: translateX(0);
            margin-right: 10px;
        }

        .navbar-nav .nav-item .nav-link:hover {
            transform: translateX(10px);
            /* Hover effect with a transform */
        }

        .navbar-nav .nav-item .nav-link::before {
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #ffffff;
            transition: 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover::before {
            width: 100%;
        }

        /* Center the logo on mobile devices */
        @media (max-width: 767px) {
            .navbar-brand {
                text-align: center;
                width: 54%;
            }

            .navbar-toggler {
                margin-left: auto;
                /* Push the toggler icon to the right */
            }

            .navbar-collapse {
                text-align: center;
            }
        }


        .gen-container {
          position:relative;
          width:100%;
          display:flex;
          padding-left:2em;
          padding-right:2em;
        }

            .btn-login {
                background-color: #9C27B0;
                color: #fff;
                /* border: none; */
                border-radius: 5px;
                padding: 8px 20px;
                font-size: 16px;
                font-weight: 500;
                cursor: pointer;
                border: 1px solid #9C27B0;
            }
            .btn-login:hover{
                background-color: white;
                color: #9C27B0;
                border: 1px solid #9C27B0;
            }
    </style>


<body>

    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="gen-container">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="/ABSOLUTE/GenesisFramework/SourceFiles/public/home">
                Gen Frame
            </a>

            <!-- Toggler/collapsible Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="width:100%;">
                <ul class="navbar-nav ml-auto" style="flex:1;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <!-- Signup or Login button with an icon inside it -->
                <a href="/ABSOLUTE/GenesisFramework/SourceFiles/public/login" class="btn btn-login ml-md-2">
                    <i class="fas fa-user"></i> Login/SignUp
                </a>
            </div>
        </div>
    </nav>
