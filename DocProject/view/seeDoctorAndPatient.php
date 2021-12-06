<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Office</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<style>
    .home{
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
    .home:hover{
        color: rgba(36, 164, 138, 0.8);
    }
    .home img{
        width: 45px;
        height: auto;
    }
  </style>
  <a href="../index.php" class="home"><img src="../public/img/home.svg" alt="home logo">HOME</a>
    <div class="content">
    <h1 style="text-align: center;">All doctors</h1>
        <?php
        $servname = "localhost";
        $dbname = "doctor_office";
        $user = "root";
        $pass = "";
        $mysqli = new mysqli($servname, $user, "", $dbname);
        $mysqli->set_charset("utf8");

        $requete = " SELECT Last_Name, First_Name, Email_Address, Salary, Doctor_Speciality,Doctor_Id 
                    from Doctor d, Employees e 
                    where d.Registration_Number = e.Registration_Number ;";

        $resultat = $mysqli->query($requete);


        ?>
        <div style="margin-left: 50px; margin-right: 50px;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">EmailAddress</th>
                        <th scope="col">Doctor_Speciality</th>
                        <th scope="col">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $var = 0;
                    while ($ligne = $resultat->fetch_assoc()) {
                    ?><tr>
                            <th scope="row"><?php echo $var += 1 ?></th>
                            <td><?= $ligne['Last_Name'] ?></td>
                            <td><?php echo $ligne['First_Name'] ?></td>
                            <td><?php echo $ligne['Email_Address'] ?></td>
                            <td><?php echo $ligne['Doctor_Speciality'] ?></td>
                            <td><?php echo $ligne['Salary'] ?></td>
                        </tr><?php
                            }
                            $mysqli->close();
                                ?>

                </tbody>
            </table>
        </div>

        &nbsp;
        <h1 style="text-align: center;">Doctor's patients</h1>
        <?php
        $doctorID = 0;
        $servname = "localhost";
        $dbname = "doctor_office";
        $user = "root";
        $pass = "";
        $mysqli = new mysqli($servname, $user, "", $dbname);
        $mysqli->set_charset("utf8");

        $requete1 = " SELECT Last_Name, First_Name, Email_Address, Salary, Doctor_Speciality,Doctor_Id 
                    from Doctor d, Employees e 
                    where d.Registration_Number = e.Registration_Number ;";



        $resultat1 = $mysqli->query($requete1);

        while ($ligne = $resultat1->fetch_assoc()) {
        ?>
            <h4 style="text-align:center"><?= $ligne['First_Name'] . ' ' . $ligne['Last_Name'] ?></h4>

                <?php
                $doctorID = $ligne['Doctor_Id'];

                $requete2 = "SELECT Patient_Last_Name as LastName, Patient_First_Name as FirstName, 
            Patient_City as City, Patient_Telephone as Telephone,
            Patient_Email as EmailAddress,
            Patient_BirthDate as birthdate,
            Patient_SocialNumber as socialnum 
            FROM Patient
            WHERE Doctor_Id=" . $doctorID . "  ";
                $resultat2 = $mysqli->query($requete2);

                $requete3 = " SELECT COUNT(Patient_Id) as nbr FROM Patient WHERE Doctor_Id=".$ligne['Doctor_Id']." ";
                $resultat3 = $mysqli->query($requete3);
                $res3 = $resultat3->fetch_assoc();
                ?>
            <h5 style="text-align:center">Number of patient : <?= $res3['nbr'] ?> </h5>
            <br>
            <div style="margin-left: 50px; margin-right: 50px;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Email number</th>
                            <th scope="col">birthdate</th>
                            <th scope="col">Social number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $var2 = 0;
                        while ($ligne2 = $resultat2->fetch_assoc()) {
                        ?><tr>
                                <th scope="row"><?php echo $var2 += 1 ?></th>
                                <td><?= $ligne2['LastName'] ?></td>
                                <td><?php echo $ligne2['FirstName'] ?></td>
                                <td><?php echo $ligne2['Telephone'] ?></td>
                                <td><?php echo $ligne2['EmailAddress'] ?></td>
                                <td><?php echo $ligne2['birthdate'] ?></td>
                                <td><?php echo $ligne2['socialnum'] ?></td>
                            </tr><?php
                                }
                                    ?>
                    </tbody>
                </table>
            </div>

        <?php
        }
        $mysqli->close();
        ?>

    </div>
    <script type="text/javascript" src="./assets/main.js"></script>
</body>

</html>