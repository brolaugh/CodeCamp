<form class="form-horizontal" action="functions/register.php" method="post" id="register-form">
  <fieldset>
    <legend>Register</legend>
    <div class="col-lg-10">
      <input class="form-control" id="inputEmail" placeholder="Email" type="email" name="register-email" required="required">
    </div>
    <div class="col-lg-10">
      <input class="form-control floating-label" id="inputUsername" placeholder="username" type="text" name="register-username" required="required" data-hint="May only contain letters and numbers">
    </div>

    <div class="col-lg-10">
      <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="register-password" required="required">
    </div>
    <div class="col-lg-10">
      <input class="form-control floating-label" id="inputFName" placeholder="First name" type="text" name="register-fname" data-hint="May only contain letters.">
    </div>
    <div class="col-lg-10">
      <input class="form-control floating-label" id="inputSName" placeholder="Surname" type="text" name="register-sname" data-hint="May only contain letters.">
    </div>
    <div class="col-lg-10">
      <input class="form-control" id="inputPhoneNumber" placeholder="Phone Number" type="text" name="register-phone-number">
    </div>
    <div class="col-lg-10 col-lg-offset-2">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </fieldset>
</form>
