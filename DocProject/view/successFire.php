<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully Added</title>
</head>
<body>
    <style>
        body{
            background: rgba(36, 164, 138, 0.2);
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
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
        .container img{
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: auto;
            height: 60%;
        }
        .container h3{
            font-size: 3em;
            font-weight: 500;
            letter-spacing: 1.3px;
            color: rgba(36, 164, 138, 0.8);
            text-align: center;
            z-index: 5;
        }
    </style>
    <a href="../index.php" class="home"><img src="../public/img/home.svg" alt="home logo">HOME</a>
    <div class="container">
        <h3>Successfully Fired</h3>
    </div>
</body>
</html>