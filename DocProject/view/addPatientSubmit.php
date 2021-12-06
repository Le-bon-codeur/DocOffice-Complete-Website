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
    <div class="title">Add Patient</div>
    <div class="content">
      <form action="../controler/addPatient.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Doctor Name</span>
            <input type="text" name="doctor" placeholder="Enter the doctor name" maxlength="15" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" placeholder="Enter the last name" maxlength="15" required>
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" placeholder="Enter the first name" maxlength="15" required>
          </div>
          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" name="birthday" placeholder="Enter the birthday date" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" name="city" placeholder="Enter the city location" maxlength="15" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter the email" maxlength="45" required>
          </div>
          <div class="input-box">
            <span class="details">Telephone</span>
            <input type="text" name="telephone" placeholder="Enter the telephone no" maxlength="10" required>
          </div>
          <div class="input-box">
            <span class="details">Social Number</span>
            <input type="text" name="socialNo" placeholder="Enter the social number" maxlength="15" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
