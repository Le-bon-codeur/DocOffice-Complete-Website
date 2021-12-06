<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Doc Office</title>
</head>
<body>
    <style>
        body{
          background: rgba(36, 164, 138, 0.2);
        }
        .functions{
            min-height: 100vh;
        }
        .card-func{
            margin: 40px 20px;
        }
        .title-color-green{
            color: rgba(36, 164, 138, 0.8);
        }
        .btn-custom{
            background-color: rgba(36, 164, 138, 0.7);
            color: #EDF5E1;
        }
        .btn-custom:hover{
            background-color: rgba(36, 164, 138, 0.2);
        }
    </style>
    <section class="one" >
        <div class="leftSide">
            <h2>They say laughter is the best medicine but when you are ill don’t only laugh,  go see a doctor too.</h2>
            <p>Slide down for more</p>
        </div>
        <img class="homeBg" src="./public/img/homeImg.svg" alt="doctor image">
    </section>
    <section class="three">
        <div class="title3">
            <h1>THE PROJECT</h1>
        </div>
        <div class="sectionBx">
            <div class="left3">
                <div class="instructions">
                    <p>
                        This project aims to make an interface for a database.
                        The application communicates with the SQL language. The front-end 
                        is implemented using Bootstrap. The back end is implemented in php 
                        with an MVC architecture for quick and easy maintenance.
                    </p>
                </div>
                <div class="programmingLanguage">
                    <h3>Programming Language Used</h3>
                    <div class="iconsLanguages">
                        <img src="./public/img/msqlIcon.png" alt="mysql icon">
                        <img src="./public/img/phpIcon.png" alt="php icon">
                        <img src="./public/img/htmlCssJsIcons.png" alt="html css js icons">
                    </div>
                </div>
            </div>
            <div class="right3">
                <img src="./public/img/coding_img.svg" alt="man coding image">
            </div>
        </div>
    </section>
    <div class="container functions">
        <div class="row">
            <div class="col-sm-6 col-md-offset-1 col-md-5 col-lg-offset-3 col-lg-4">
                <div class="card card-func">
                    <img src="./public/img/employeeList.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title title-color-green">See Employees</h5>
                        <p class="card-text">This function allows you to see all the employees of the database sorted by categories. </p>
                        <a href="./controler/getEmployees.php" class="btn btn-custom">See</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="card card-func">
                    <img src="./public/img/addEmployee.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title title-color-green">Add Employee</h5>
                        <p class="card-text">It allows you to add a new employee to the database. The hiring date will be the one at the time of entry.</p>
                        <a href="./view/hireSubmit.php" class="btn btn-custom">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-offset-1 col-md-5 col-lg-4">
                <div class="card card-func">
                    <img src="./public/img/fireEmployee.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title title-color-green">Fire Employee</h5>
                        <p class="card-text">It deletes an employee from the database, enter the information correctly so as not to have any errors.</p>
                        <a href="./view/fireSubmit.php" class="btn btn-custom">Fire</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="card card-func">
                    <img src="./public/img/addPatient.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title title-color-green">Add Patient</h5>
                        <p class="card-text">It allows you to add a patient to the database, pay attention to the spelling of the doctor name.</p>
                        <a href="./view/addPatientSubmit.php" class="btn btn-custom">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-offset-1 col-md-5 col-lg-offset-3 col-lg-4">
                <div class="card card-func">
                    <img src="./public/img/addVisit.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title title-color-green">Add Visit</h5>
                      <p class="card-text">It allows you to add a visit to the database, pay attention to the spelling of the patient name.</p>
                      <a href="./view/addVisitSubmit.php" class="btn btn-custom">Add</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="card card-func">
                    <img src="./public/img/modifyPatient.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title title-color-green">Modify Patient</h5>
                        <p class="card-text">Once the patient has been found, enter only the information you want to change and apply it.</p>
                        <a href="./view/selectPatientSubmit.php" class="btn btn-custom">Modify</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="card card-func">
                    <img src="./public/img/seeVisits.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title title-color-green">See visits</h5>
                        <p class="card-text">This function allows you to see all the visits of the database sorted by date.</p>
                        <a href="./view/seeVisits.php" class="btn btn-custom">See</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="card card-func">
                    <img src="./public/img/seeDoctorPatient.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title title-color-green">See doctors with their patients</h5>
                        <p class="card-text">This function allows you to see all the doctors with their patients.</p>
                        <a href="./view/seeDoctorAndPatient.php" class="btn btn-custom">See</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
