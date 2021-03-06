<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/forms.css" />
    <title>Sign Up</title>
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap%27');
      p {
        color: white;
      }
    </style>

    <script type="text/javascript">
      var counter = 0;
      function changeImg() {
          counter++;
          var image = document.getElementById('myImg');
          if (counter % 3 == 0) {
              image.src = "assets/pexels-rajesh-tp-1633578.jpg";
          }
          else if (counter % 3 == 1){
              image.src = "assets/pexels-julie-aagaard-2097090.jpg";
          } else {
              image.src = "assets/pexels-william-choquette-2641886.jpg"
          }
      }
    </script>

  </head>
  <body>
    <?php
        include_once 'header.php';
    ?>

    <div class="signin">
      <div class="main">
        <h1>Create an account</h1>
        <hr>
        <form action="includes/signup.inc.php" method="post">
          
          <div class="name">
            <div class="input" style="
              width: 50%;
              margin-right: 10px;
            ">
              <label class="custom-field one">
                <input
                  class="form-input"
                  type="text"
                  placeholder=" "
                  name="first_name"
                />
                <span class="placeholder">First Name</span>
              </label>
            </div>
            <div class="input" style="
              width: 50%;
            ">
              <label class="custom-field one">
                <input
                  class="form-input"
                  type="text"
                  placeholder=" "
                  name="last_name"
                />
                <span class="placeholder">Last Name</span>
              </label>
            </div>
          </div>

          <div class="input">
            <label class="custom-field one">
              <input
                class="form-input"
                type="number"
                placeholder=" "
                name="id_num"
              />
              <span class="placeholder">ID Number</span>
            </label>
          </div>

          <div class="centersub">
            <div class="input">
              <label class="custom-field one">
                <input
                  class="form-input"
                  type="text"
                  placeholder=" "
                  name="uid"
                />
                <span class="placeholder">Username</span>
              </label>
            </div>


            


            <div class="input">
              <label class="custom-field one">
                <input
                  class="form-input"
                  type="password"
                  placeholder=" "
                  name="pwd"
                />
                <span class="placeholder">Password</span>
              </label>
            </div>

            <div class="input">
              <label class="custom-field one">
                <input
                  class="form-input"
                  type="password"
                  placeholder=" "
                  name="pwdRepeat"
                />
                <span class="placeholder">Repeat Password</span>
              </label>
            </div>

          </div>

          <div>

            <button class="submit-button" type="submit" name="submit">Create</button>
          </div>
        </form>

        <p>Already have an account? <a href="login.php">Log in</a></p>


        <?php
          if (isset($_GET["error"])) {
              if ($_GET["error"] == "emptyinput") {
                  echo "<p style='color:red'>*Fill in all fields!</p>";
              } 
              else if ($_GET["error"] == "invaliduid") {
                  echo "<p style='color:red'>*Choose a proper username!</p>";
              } 
              else if ($_GET["error"] == "invalideIdNum") {
                  echo "<p style='color:red'>*Enter a valid ID Number!</p>";
              } 
              else if ($_GET["error"] == "passwordsdontmatch") {
                  echo "<p style='color:red'>*Passwords doesn't match!</p>";
              } 
              else if ($_GET["error"] == "stmtfailed") {
                  echo "<p style='color:red'>*Something went wrong, try again.</p>";
              }
              else if ($_GET["error"] == "usernametaken") {
                  echo "<p style='color:red'>*Username already taken!</p>";
              }
              else if ($_GET["error"] == "none") {
                  echo "<p style='color:#00ba3b'>*You have signed up! Please log in!</p>";
              }
          }
        ?>
      </div>
      <div class="feature_img">
        <img
          id='myImg'
          src="assets/pexels-rajesh-tp-1633578.jpg"
          alt="Have a good lunch!"
          height="450px"
          width="350px"
          onclick="changeImg()"
        />
      </div>
      
    </div>
  </body>
</html>