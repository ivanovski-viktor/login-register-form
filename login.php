<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles.css" />
    <!-- <script src="script.js"></script> -->
    <title>Log In</title>
  </head>
  <body>
    <div class="formContainer">
      <img src="./assets/logo.avif" alt="Logo" />
      <div class="underLogoText">
        <label class="boldText" for="signin">Sign In</label>
        <label class="normalText" for="google">Use your Google account</label>
      </div>
      <form
        class="authentification"
        id="loginForm"
        method="POST"
        action="authentification.php"
      >
        <input
          placeholder="Username"
          type="text"
          name="username"
          id="username"
          for="username"
          class="inputField"
        />
        <div class="errorMessage">
        <?php  
        if (isset($_GET['error'])){echo "<p>Invalid email or password</p>";}
        ?>
        </div>
        <input
          placeholder="Password"
          type="text"
          name="password"
          id="password"
          for="password"
          class="inputField"
        />
        <div class="errorMessage">
        <?php  
        if (isset($_GET['error'])){echo "<p>Invalid email or password</p>";}
        ?>
        </div>
        <div>
          <a href="./register.html">Create account</a>
          <input
            type="submit"
            name="loginBtn"
            id="loginBtn"
            class="buttons"
            value="Log In"
          />
        </div>
      </form>
    </div>
    <!-- <script>
      // Call your JavaScript function after the page has loaded
      window.onload = function () {
        printErrorMessage();
      };
    </script> -->
  </body>
</html>
