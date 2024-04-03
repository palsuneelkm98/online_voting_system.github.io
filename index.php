  <html>
    <head>
       <title>Online Voting System</title>
       <link rel="stylesheet" href="./css/body.css" />
       <script src="./javascript/validation.js"></script>
  </head>
  <body>
    <div id="headerSection">
      <h1>Online Voting System</h1>
    </div>
    <hr>
    <div id="bodySection">
    <form onSubmit="return validate_index(this)" action="./api/login.php" method="post" name="login_page"> 
            <h2>Login</h2>
            <input  type="text" maxlength="10" name="number" placeholder="Enter Your Mobile Number" class="no-spin"/></br></br>
            <input type="password" name="password" placeholder="Enter Your Password"/></br></br>
            <select id="dropbox" name="role">
              <option value="0">Plz Select Your Role</option>
              <option value="1">Voter </option>
              <option value="2">Group </option>
            </select></br></br>
            <button type="submit" id="btn">Login</button></br></br>
            New user? <a href="./route/register.php">Register Here</a>
            </form>
    </div>
        <?php
            include("./route/fooder.php");
        ?>
     