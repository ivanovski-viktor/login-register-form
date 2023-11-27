<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles.css" />
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
          id="username"
          for="username"
          class="inputField"
        />
        <p class="errorMessage"></p>
        <input
          placeholder="Password"
          type="text"
          id="password"
          for="password"
          class="inputField"
        />
        <p class="errorMessage"></p>
        <div>
          <a href="./register.html">Create account</a>
          <input
            type="submit"
            name="loginBtn"
            id="loginBtn"
            class="buttons"
            value="Sign Up"
          />
        </div>
      </form>
    </div>
  </body>
</html>
