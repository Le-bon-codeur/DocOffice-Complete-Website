<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Our Employees</title>
</head>
<body>
    <a href="../index.php" class="home"><img src="../public/img/home.svg" alt="home logo">HOME</a>
    <div class="page">
        <div class="content">
            <h1 style="text-align: center">Doctors</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">EMail</th>
                        <th scope="col">Speciality</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $var=0; while ($ligne = $table1 -> fetch()) { ?>
                        <tr>
                            <th scope="row"><?= $var+=1 ?></th>
                            <td><?= $ligne['lastname'] ?></td>
                            <td><?= $ligne['firstname'] ?></td>
                            <td><?= $ligne['email'] ?></td>
                            <td><?= $ligne['speciality'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="content">
            <h1 style="text-align: center">Nurses</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">EMail</th>
                        <th scope="col">Contract</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $var=0; while ($ligne = $table2 -> fetch()) { ?>
                        <tr>
                            <th scope="row"><?= $var+=1 ?></th>
                            <td><?= $ligne['lastname'] ?></td>
                            <td><?= $ligne['firstname'] ?></td>
                            <td><?= $ligne['email'] ?></td>
                            <td><?= $ligne['speciality'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="content">
            <h1 style="text-align: center">Staff Members</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">EMail</th>
                        <th scope="col">Staff Post</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $var=0; while ($ligne = $table3 -> fetch()) { ?>
                        <tr>
                            <th scope="row"><?= $var+=1 ?></th>
                            <td><?= $ligne['lastname'] ?></td>
                            <td><?= $ligne['firstname'] ?></td>
                            <td><?= $ligne['email'] ?></td>
                            <td><?= $ligne['speciality'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>