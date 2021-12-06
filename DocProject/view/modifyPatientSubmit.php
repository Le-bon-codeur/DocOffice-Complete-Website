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
    <div class="title">Modify Patient</div>
    <div class="content">
      <form action="../controler/applyModifPatient.php" method="post">
        <input name="OriginalLname" type="hidden" value="<?= $patient['lastname'] ?>">
        <input name="OriginalFname" type="hidden" value="<?= $patient['firstname'] ?>">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" maxlength="15" placeholder="<?= $patient['lastname'] ?>">
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" maxlength="15" placeholder="<?= $patient['firstname'] ?>">
          </div>
          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" name="birthday" placeholder="<?= $patient['birthday'] ?>">
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" name="city" maxlength="15" placeholder="<?= $patient['city'] ?>">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" maxlength="45" placeholder="<?= $patient['email'] ?>">
          </div>
          <div class="input-box">
            <span class="details">Telephone</span>
            <input type="text" name="telephone" maxlength="10" placeholder="<?= $patient['telephone'] ?>">
          </div>
          <div class="input-box">
            <span class="details">Social Number</span>
            <input type="text" name="socialNo" maxlength="15" placeholder="<?= $patient['socialNo'] ?>">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Apply">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
