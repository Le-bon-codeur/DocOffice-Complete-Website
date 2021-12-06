<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
</head>

<body style="background: rgb(250, 244, 244)">
    <style>
        .home {
            position: absolute;
            top: 10px;
            left: 12px;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            font-size: 0.7em;
            font-weight: 400;
            color: #333;
            text-align: center;
        }

        .home:hover {
            color: rgba(36, 164, 138, 0.8);
        }

        .home img {
            width: 45px;
            height: auto;
        }
    </style>
    <a href="../index.php" class="home"><img src="../public/img/home.svg" alt="home logo">HOME</a>
    <?php
    $servname = "localhost";
    $dbname = "doctor_office";
    $user = "root";
    $pass = "";
    $mysqli = new mysqli($servname, $user, $pass, $dbname);
    $mysqli->set_charset("utf8");

    $requete = "SELECT e.Patient_Last_Name as LastName, 
            e.Patient_First_Name as FirstName,
            e.Patient_SocialNumber as socialnum,
            p.Visit_type as Visit_type ,
            p.Visit_Date as Visit_date, 
            p.Visit_Duration as Visit_Duration,
            p.Visit_Cost as Visit_Cost ,
            p.Visit_Description as Visit_Description
            FROM visits p, patient e 
            WHERE p.Patient_Id=e.Patient_Id";

    $resultat = $mysqli->query($requete);
    $requete2 = "SELECT e.Patient_Last_Name as LastName, 
            e.Patient_First_Name as FirstName,
            e.Patient_SocialNumber as socialnum,
            p.Visit_type as Visit_type ,
            p.Visit_Date as Visit_date, 
            p.Visit_Duration as Visit_Duration,
            p.Visit_Cost as Visit_Cost ,
            p.Visit_Description as Visit_Description
            FROM visits p, patient e 
            WHERE p.Patient_Id=e.Patient_Id and Visit_date between adddate(now(),-30) and now()";
    $resultat2 = $mysqli->query($requete2);
    $requete3 = "SELECT e.Patient_Last_Name as LastName, 
            e.Patient_First_Name as FirstName,
            e.Patient_SocialNumber as socialnum,
            p.Visit_type as Visit_type ,
            p.Visit_Date as Visit_date, 
            p.Visit_Duration as Visit_Duration,
            p.Visit_Cost as Visit_Cost ,
            p.Visit_Description as Visit_Description
            FROM visits p, patient e 
            WHERE p.Patient_Id=e.Patient_Id and Visit_date between adddate(now(),-7) and now()";
    $resultat3 = $mysqli->query($requete3);
    ?>

    <br>
    <div class="container">
        <h3 style="text-align: center;">All patient visit</h3>
        <br>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Social Number</th>
                    <th>Visit type</th>
                    <th>visit date</th>
                    <th>Visit duration</th>
                    <th>Visit cost</th>
                    <th>Visit description</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($ligne = $resultat->fetch_assoc()) { ?>

                    <tr>
                        <td> <?php echo $ligne['FirstName'] ?> </td>
                        <td> <?php echo $ligne['LastName'] ?> </td>
                        <td> <?php echo $ligne['socialnum'] ?> </td>
                        <td> <?php echo $ligne['Visit_type'] ?> </td>
                        <td> <?php echo $ligne['Visit_date'] ?> </td>
                        <td> <?php echo $ligne['Visit_Duration'] ?> </td>
                        <td> <?php echo $ligne['Visit_Cost'] ?> </td>
                        <td> <?php echo $ligne['Visit_Description'] ?> </td>


                    </tr>

                <?php }
                $mysqli->close(); ?>

            </tbody>
        </table>
    </div>
    <br>
    <div class="container">
        <h3 style="text-align: center;">Patient visit last month</H3>
        <br>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Social Number</th>
                    <th>Visit type</th>
                    <th>visit date</th>
                    <th>Visit duration</th>
                    <th>Visit cost</th>
                    <th>Visit description</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($ligne = $resultat2->fetch_assoc()) { ?>

                    <tr>
                        <td> <?php echo $ligne['FirstName'] ?> </td>
                        <td> <?php echo $ligne['LastName'] ?> </td>
                        <td> <?php echo $ligne['socialnum'] ?> </td>
                        <td> <?php echo $ligne['Visit_type'] ?> </td>
                        <td> <?php echo $ligne['Visit_date'] ?> </td>
                        <td> <?php echo $ligne['Visit_Duration'] ?> </td>
                        <td> <?php echo $ligne['Visit_Cost'] ?> </td>
                        <td> <?php echo $ligne['Visit_Description'] ?> </td>


                    </tr>

                <?php }
                 ?>

            </tbody>
        </table>
    </div>
    <div class="container">
        <h3 style="text-align: center;">Patient visit last week</H3>
        <br>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Social Number</th>
                    <th>Visit type</th>
                    <th>visit date</th>
                    <th>Visit duration</th>
                    <th>Visit cost</th>
                    <th>Visit description</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($ligne = $resultat3->fetch_assoc()) { ?>

                    <tr>
                        <td> <?php echo $ligne['FirstName'] ?> </td>
                        <td> <?php echo $ligne['LastName'] ?> </td>
                        <td> <?php echo $ligne['socialnum'] ?> </td>
                        <td> <?php echo $ligne['Visit_type'] ?> </td>
                        <td> <?php echo $ligne['Visit_date'] ?> </td>
                        <td> <?php echo $ligne['Visit_Duration'] ?> </td>
                        <td> <?php echo $ligne['Visit_Cost'] ?> </td>
                        <td> <?php echo $ligne['Visit_Description'] ?> </td>


                    </tr>

                <?php }
                 ?>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>