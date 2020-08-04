<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up Form</title>
</head>

<body>
<h1> Buat Account Baru!</h1>
<h2> Sign Up Form </h2>

<form  action="welcome" method="post">
    @csrf
    @method('POST')
<p>First Name
  <label for="textfield">:</label>
  <input type="text" name="firstName" id="firstName">
</p>
<p>Last Name
  <label for="textfield2">:</label>
  <input type="text" name="lastName" id="lastName">
</p>
<p>Gender:</p>
<p>
  <label>
    <input type="radio" name="gender" value="male" id="gender_0">
  Male</label>
  <br>
  <label>
    <input type="radio" name="gender" value="female" id="gender_1">
    Female</label>
  <br>
  <label>
    <input type="radio" name="gender" value="other" id="gender_2">
    Other</label>
</p>
<p>Nationality:</p>
<p>
  <label for="nationality">Select:</label>
  <select name="nationality" id="nationality">
    <option value="indonesian">Indonesian</option>
    <option value="chinese">Chinese</option>
    <option value="indian">Indian</option>
	<option value="malay">Malaysian</option>
  </select>
</p>
<p>Language spoken:</p>
<p>
  <label>
    <input type="checkbox" name="language" value="bahasa" id="language_0">
    Bahasa Indonesia</label>
  <br>
  <label>
    <input type="checkbox" name="language" value="english" id="language_1">
    English</label>
  <br>
  <label>
    <input type="checkbox" name="language" value="other" id="language_2">
    Other</label>
  <br>
Bio:</p>
<p>
  <textarea name="bio" rows="5" id="textarea"></textarea> 
</p>
<p>
  <input type="submit" name="signUp" id="signUp" value="Sign Up">
</p>
</form>
</body>
</html>
