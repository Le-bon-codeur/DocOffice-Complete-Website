<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<!-- Modify and make usable - Pierre-Louis Létoquart -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/styleForm.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="container">
    <div class="title">Modify</div>
    <div class="content">
      <form action="../controler/modifyPatient.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" maxlength="15" placeholder="Enter the last name" required>
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" maxlength="15" placeholder="Enter the first name" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Modify">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
