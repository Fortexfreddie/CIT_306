<?php include("./db/config.php") ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>FORM DATA</title>
  </head>
  <body>
    <div class="container">
      <form action="./handlers/form_handler.php" method="post">
        <label for="">FirstName</label>
        <input name="firstname" type="text" placeholder="Enter your first name" required />
        <label for="">LastName</label>
        <input name="lastname"  type="text" placeholder="Enter your Last Name" required />
        <label for="">Email</label>
        <input name="email"  type="email" placeholder="john@gmail.com" required />
        <label for="">Phone Number</label>
        <input name="phonenumber"  type="number" required />
        <label for="">Residential Address</label>
        <input name="address"  type="text" required />
        <label for="">DoB</label>
        <input name="DOB"  type="date" />
        <label for="">Nationality</label>
        <select name="nationality" id="">
          <option value="Nigerian">Nigerian</option>
          <option value="Japan">Japan</option>
          <option value="Netherlands">Netherlands</option>
          <option value="France">France</option>
          <option value="Ghana">Ghana</option>
        </select>
        <label for="">Account Number</label>
        <input name="account_number"  type="number" placeholder="Enter your account number" required />

        <button type="submit" name="form"><i>submit</i></button>
      </form>
    </div>
  </body>
</html>
