<style>
.auth-main {
  margin-top:4em;
}
[type="checkbox"] {
	 position: absolute;
	 white-space: nowrap;
	 width: 1px;
	 height: 1px;
	 overflow: hidden;
	 border: 0;
	 padding: 0;
	 clip: rect(0 0 0 0);
	 clip-path: inset(50%);
	 margin: -1px;
}
 /* html {
	 font-family: "Inter UI", "Inter", Inter UI, Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
	 line-height: 1;
	 font-size: 100%;
	 font-weight: normal;
}
 body {
	 font-family: inherit;
	 line-height: 1;
	 font-weight: normal;
	 font-size: 1rem;
} */
 .container, section:not(.page-header), article, .page-header > hgroup {
	 width: 90%;
	 max-width: 768px;
	 max-width: 60ch;
	 margin: 0 auto;
}
 .container, section:not(.page-header), article, .page-header > hgroup {
	 padding: 2em 0;
	 margin-bottom: 2em;
}
.auth-main p {
	 font-family: inherit;
	 line-height: 1.5;
	 margin: 0 auto 1.5em;
	 font-weight: normal;
	 font-size: 1em;
}
 [type="color"], [type="date"], [type="datetime"], [type="search"], [type="datetime-local"], [type="tel"], [type="email"], [type="month"], [type="number"], [type="password"], [type="text"], [type="time"], [type="url"], [type="week"], input:not([type]), textarea {
	 font-family: inherit;
	 line-height: 1;
	 margin: 0 auto 1.5em;
	 display: block;
	 width: 100%;
	 transition: all 120ms;
	 font-weight: normal;
	 padding: 0.75em;
	 border-radius: 0.375em;
	 vertical-align: middle;
	 border: 1px solid #ddd;
	 background-color: #f2f2f2;
}
 [type="color"]:focus, [type="date"]:focus, [type="datetime"]:focus, [type="search"]:focus, [type="datetime-local"]:focus, [type="tel"]:focus, [type="email"]:focus, [type="month"]:focus, [type="number"]:focus, [type="password"]:focus, [type="text"]:focus, [type="time"]:focus, [type="url"]:focus, [type="week"]:focus, input:not([type]):focus, textarea:focus {
	 border-color: #501fff !important;
	 outline: 3px solid rgba(80, 31, 255, 0.25);
}

 .auth-main form,
 .auth-main fieldset,
 .auth-main label,
 .auth-main legend {
	 display: block;
	 width: 100%;
	 border: none;
	 margin: 0;
	 padding: 0;
}
 .auth-main label {
	 font-weight: 500;
	 font-size: 1em;
	 font-family: inherit;
	 line-height: 1;
	 margin: 0 auto 0.5em;
}
 .auth-main legend {
	 font-size: x-large;
	 font-weight: 600;
	 line-height: 1;
	 margin: 0 auto 2rem;
}
 .auth-main textarea {
	 resize: vertical;
	 line-height: 1.5;
}
 ::placeholder {
	 color: #999;
}

 .auth-main a,
 .auth-main a:link,
 .auth-main a:any-link,
 .auth-main a:visited {
	 text-decoration: none;
	 font-family: inherit;
	 font-size: inherit;
	 display: inline-block;
	 color: #501fff;
	 transition: all 120ms;
	 cursor: pointer;
	 user-select: none;
	 font-weight: 500;
}

 .auth-main a:focus,
 .auth-main a:link:focus,
 .auth-main a:any-link:focus,
 .auth-main a:visited:focus {
	 border-color: #501fff !important;
	 outline: 3px solid rgba(80, 31, 255, 0.25);
	 border-radius: 0.375em;
	 outline-offset: 2px;
}
 [type="checkbox"] {
	 appearance: none;
	 user-select: none;
	 transition: all 120ms;
}
 [type="checkbox"] + label {
	 display: flex;
	 width: 100%;
	 flex-direction: row;
	 justify-content: flex-start;
	 text-align: left;
	 vertical-align: middle;
	 align-items: center;
	 align-content: center;
	 gap: 0.5em;
	 user-select: none;
	 margin: 1.5em auto 1em;
}
 [type="checkbox"] + label::before {
	 content: '';
	 display: inline-block;
	 width: 1.25em;
	 height: 1.25em;
	 vertical-align: middle;
	 background-color: #ddd;
	 line-height: 1;
	 margin: 0;
	 border-radius: 0.3em;
	 cursor: pointer;
	 transition: all 120ms;
	 border: 1px solid darkgray;
	 background-repeat: no-repeat;
	 background-size: 0.85em 0.85em;
	 background-position: center center;
	 background-origin: center center;
}
 [type="checkbox"]:checked + label::before {
	 background-color: #501fff;
	 border-color: #3c06ff;
	 background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cg fill='%23ffffff'%3E%3Cpath d='M15.854,3.146l-1.5-1.5c-.195-.195-.512-.195-.707,0L5.5,9.793l-3.146-3.146c-.195-.195-.512-.195-.707,0L.146,8.146c-.195,.195-.195,.512,0,.707l5,5c.098,.098,.226,.146,.354,.146s.256-.049,.354-.146L15.854,3.854c.195-.195,.195-.512,0-.707Z' fill='%23ffffff'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
}
 [type="checkbox"]:focus + label::before {
	 border-color: #501fff !important;
	 outline: 3px solid rgba(80, 31, 255, .25);
}
 [type="submit"] {
	 appearance: none;
	 transition: all 120ms;
	 display: block;
	 font-family: inherit;
	 font-weight: 600;
	 line-height: 1.25;
	 padding: 0.75em;
	 border: 1px solid transparent;
	 background-color: #501fff;
	 color: white;
	 border-radius: 0.375em;
	 cursor: pointer;
	 user-select: none;
	 letter-spacing: 0.75px;
	 font-family: inherit;
	 font-size: 1em;
	 margin: 1.5em auto 2.5em;
	 width: 100%;
}
 [type="submit"]:focus {
	 border-color: #501fff !important;
	 outline: 3px solid rgba(80, 31, 255, 0.25);
}
 .auth-main section {
	 max-width: 400px !important;
}
 /* html, body, main {
	 height: 100vh;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
} */
 .lead {
	 font-size: larger;
	 font-weight: 500;
	 width: 100%;
}
 .center {
	 text-align: center;
	 display: block;
	 width: 100%;
	 margin: 1em auto;
}
 .auth-main form p {
	 line-height: 1 !important;
	 margin: 0 auto 1em !important;
}
 [type="password"] {
	 margin-bottom: 0.5em;
}

</style>


<main class="auth-main">
<section>
  <form id="login-form" class="form" method="post" action="">
    <!-- <input type="hidden" name="mode" value="authentication">
    <input type="hidden" name="action" value="login"> -->
    <input type="hidden" name="postAction" value="1">
    <fieldset>
      <legend>Sign Into Your Account</legend>

      <div class="input-control">
      <label for="email-input">Your email</label>
      <input type="email" name="email" id="email" placeholder="user@example.com" value="<?=$_POST['email'] ?? '' ;?>">
    </div>

      <div class="input-control">
      <label for="password-input">Your password</label>
      <input type="password" name="password" id="password" placeholder="•••••••" value="<?=$_POST['password'] ?? '' ;?>">
    </div>

      <div class="text-danger" style="margin-bottom:1em;">
        <?php
        foreach($_SESSION['validationRules']['errors'] ?? [] as $error) {
        ?>

        <?=$error;?> <br/>

      <?php } ?>
      </div>

      <p><small>Don't remember your password? <a href="#">Reset it</a>.</small></p>

      <input type="checkbox" name="remember-me-input" id="remember-me-input">
      <label for="remember-me-input">Remember me</label>
    </fieldset>

    <input type="submit" value="Sign in">
  </form>

  <p class="center lead">Don't have an account? <a href="<?=$GenFramePath.'/register';?>">Sign up</a>.</p>
</section>
</main>



    <script>

    </script>
