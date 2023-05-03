
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customer Form</title>
	<link rel="stylesheet" href="Customer.css">
</head>

<body>
<div class="container">
	<form action="CustomerSpot.php" method="post">
		<h1 class="form__title">Please fill up your information</h1>
		<div class="form__message form__message--error"></div> <!-- need to be conditional -->

		<div class="form__input-group">
      <h3>Name</h3>
			<input type="text" name="name" class="form__input" autofocus placeholder="Enter your Name">
			<div class="form__input-error-message"></div>
		</div>
    <div class="form__input-group">
      <h3>Phone number</h3>
			<input type="tel" name="phone" class="form__input" autofocus placeholder="Enter your Phone number">
			<div class="form__input-error-message"></div>
		</div>
    <div class="selectdiv" style="width:250px;">
      <h3>Number of user</h3>
      <select name="user#">
          <option value="" hidden>Select your number of user</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5+">5 or more</option>
      </select>
    </div>

      	<button class="form__button" type="SUBMIT" value="Submit">Join in the queue</button>

	</form>
</div>
</body>
</html>

