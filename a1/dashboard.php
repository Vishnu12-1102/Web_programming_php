<!DOCTYPE html>
<html lang="en">
<head>
<!-- Designed by Dr. Ripal Ranpara for student Activity Project Assignment-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        #header {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: left;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        #sidebar {
            background: #343a40;
            color: #fff;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #sidebar ul {
            list-style: none;
            padding: 0;
        }
        #sidebar li {
            margin-bottom: 10px;
        }
        #sidebar li a {
            color: #fff;
            text-decoration: none;
        }
        #sidebar .list-group-item {
            background: transparent;
            border: none;
            color: #fff;
        }
        #sidebar .list-group-item:hover {
            background: #212529;
        }
        #main-content {
            padding: 20px;
        }
        .section-title {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        .dashboard-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }
        #footer {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
		
		* Button 1: Ocean Blue */
.ocean-blue-button {
    background: linear-gradient(135deg, #006a88, #0091ad);
    color: #fff;
}

/* Button 2: Sunset Orange */
.sunset-orange-button {
    background: linear-gradient(135deg, #ff8c42, #ffbc3b);
    color: #fff;
}

/* Button 3: Spring Green */
.spring-green-button {
    background: linear-gradient(135deg, #72b01d, #97cc11);
    color: #fff;
}

/* Button 4: Royal Purple */
.royal-purple-button {
    background: linear-gradient(135deg, #7c53c3, #a44bc5);
    color: #fff;
}

/* Button 5: Ruby Red */
.ruby-red-button {
    background: linear-gradient(135deg, #cb1e52, #de6b4b);
    color: #fff;
}

/* Button 6: Goldenrod Yellow */
.goldenrod-yellow-button {
    background: linear-gradient(135deg, #ffbf3f, #ffb344);
    color: #fff;
}

/* Button 7: Sky Blue */
.sky-blue-button {
    background: linear-gradient(135deg, #31a7ff, #3abeff);
    color: #fff;
}

/* Common Button Styles */
.gradient-button {
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><p><?php  echo $name=$_REQUEST['m1'] ?> </p></li>
                    <li class="list-group-item"><p><?php echo $name=$_REQUEST['m2'] ?> </p></li>
                    <li class="list-group-item"><p><?php echo $name=$_REQUEST['m3'] ?> </p></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo ($gog=$_POST['gog']); ?> " target="_blank">Google Site</a></li>
                    <li class="list-group-item"><a href="<?php echo ($blg=$_POST['bl']); ?> " target="_blank">Blog</a></li>
                    <li class="list-group-item"><a href="<?php echo ($lin=$_POST['lin']); ?> " target="_blank">LinkedIn</a></li>
                    <li class="list-group-item"><a href="<?php echo ($git=$_POST['git']); ?> " target="_blank">GitHub</a></li>
                </ul>
            </nav>   
            <!-- Main content -->
            <main class="col-md-9">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Title</h1>
                            </div>
                            <div class="col-md-6"><?php
                            if($_FILES['h1']['error']===UPLOAD_ERR_OK){
                                $tmpname=$_FILES['h1']['tmp_name'];
                                $name=$_FILES['h1']['name'];
                                $destination='img/' . $name;
                                if(move_uploaded_file($tmpname,$destination))
                            {}

                            }
                            ?>
                                <img src="<?php echo $destination; ?>" alt="Logo" width="100" class="float-right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>
                        </div>
                        <p><?php 
                        echo $name=$_REQUEST['nm'] ?></p>
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>My Skillset</h2>
                        </div>
                        <p><?php 
                        echo $name=$_REQUEST['skl'] ?></p>
                    </div>
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">
                            <button class="ocean-blue-button gradient-button"><a href="<?php echo ($task=$_POST['ta1']); ?>"> Task 1</a></button>
<button class="sunset-orange-button gradient-button"><a href="<?php echo ($task2=$_POST['ta2']); ?>"> Task 2</a></button>
<button class="spring-green-button gradient-button"><a href="<?php echo ($task3=$_POST['ta3']); ?>"> Task 3</a></button>
<button class="royal-purple-button gradient-button"><a href="<?php echo ($task4=$_POST['ta4']); ?>"> Task 4</a></button>
<button class="ruby-red-button gradient-button"><a href="<?php echo ($task5=$_POST['ta5']); ?>"> Task 5</a></button>
<button class="goldenrod-yellow-button gradient-button"><a href="<?php echo ($mpm=$_POST['mpm']); ?>"> Minor Project Module</button><br>

<button class="spring-green-button gradient-button"><a href="<?php echo ($dm=$_POST['dm']); ?>">Database  Module</button>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>My Project Details</h2>
                        </div>
                        <p><?php 
                        echo $name=$_REQUEST['prj'] ?></p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
        <h3>Footer Title</h3>
        <?php
                            if($_FILES['f1']['error']===UPLOAD_ERR_OK){
                                $tmpname=$_FILES['f1']['tmp_name'];
                                $name=$_FILES['f1']['name'];
                                $destination2='img/' . $name;
                                if(move_uploaded_file($tmpname,$destination2))
                            {}

                            }
                            ?>
        <img src="<?php echo $destination2; ?>" alt="Footer Logo" width="100">
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>