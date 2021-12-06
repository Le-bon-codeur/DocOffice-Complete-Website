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
      <form action="../controler/addVisit.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" placeholder="Enter the last name" maxlength="15" required>
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" placeholder="Enter the first name" maxlength="15" required>
          </div>
          <div class="input-box">
            <span class="details">Duration</span>
            <input type="time" name="duration" placeholder="Enter the visit duration" required>
          </div>
          <div class="input-box">
            <span class="details">Cost</span>
            <input type="text" name="cost" placeholder="Enter the visit cost" required>
          </div>
          <div class="input-box">
            <span class="details">Visit Type</span>
            <input type="text" name="visitType" placeholder="Enter the visit type" maxlength="15" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" name="description" placeholder="Enter a quick description" required>
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
