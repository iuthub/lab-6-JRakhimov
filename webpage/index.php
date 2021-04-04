<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if (preg_match("/\w{2,}/", $_POST["name"])) {
			$nameRes = "OK";
		} else {
			$nameRes = "It has to contain at least 2 chars. It should not contain any number.";
		}

		if (preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/", $_POST["email"])) {
			$emailRes = "OK";
		} else {
			$emailRes = "It should correspond to email format.";
		}

		if (preg_match("/\w{5,}/", $_POST["username"])) {
			$usernameRes = "OK";
		} else {
			$usernameRes = "It has to contain at least 5 chars.";
		}

		if (preg_match("/\w{8,}/", $_POST["password"])) {
			$passwordRes = "OK";
		} else {
			$passwordRes = "It has to contain at least 8 chars.";
		}

		if ($_POST["password"] == $_POST["confirm_password"] && preg_match("/\w{8,}/", $_POST["confirm_password"])) {
			$passwordConfirmRes = "OK";
		} else {
			$passwordConfirmRes = "It has to be equal to Password field.";
		}

		if (preg_match("/\d{1,2}.\d{1,2}.\d{4,4}/", $_POST["dob"])) {
			$dobRes = "OK";
		} else {
			$dobRes = "Date should be written in dd.MM.yyyy format. For ex, 07.03.2019";
		}

		if (preg_match("/Male|Female/", $_POST["gender"])) {
			$genderRes = "OK";
		} else {
			$genderRes = "Only 2 options accepted: Male, Female";
		}

		if (preg_match("/Single|Married|Divorced|Widowed/", $_POST["m_status"])) {
			$mStatusRes = "OK";
		} else {
			$mStatusRes = "Only 4 options accepted: Single, Married, Divorced, Widowed";
		}

		if (preg_match("/\d{6,6}/", $_POST["p_code"])) {
			$pCodeRes = "OK";
		} else {
			$pCodeRes = "This is required field. It should follow 6 digit format. For ex, 100011";
		}

		if (preg_match("/\d{2,2} \d{7,7}/", $_POST["h_phone"])) {
			$hPhoneRes = "OK";
		} else {
			$hPhoneRes = "This is required field. It should follow 9 digit format. For ex, 97 1234567";
		}

		if (preg_match("/\d{2,2} \d{7,7}/", $_POST["m_phone"])) {
			$mPhoneRes = "OK";
		} else {
			$mPhoneRes = "This is required field. It should follow 9 digit format. For ex, 97 1234567";
		}

		if (preg_match("/\d{4,4} \d{4,4} \d{4,4} \d{4,4}/", $_POST["card"])) {
			$cardRes = "OK";
		} else {
			$cardRes = "This is required field. It should follow 9 digit format. For ex, 97 1234567";
		}

		if (preg_match("/\d{1,2}.\d{1,2}.\d{4,4}/", $_POST["card_exp"])) {
			$cardExpRes = "OK";
		} else {
			$cardExpRes = "Date should be written in dd.MM.yyyy format. For ex, 07.03.2019";
		}

		if (preg_match("/UZS (?:[0-9]+,)*[0-9]+(?:\.[0-9]{2,2})?$/", $_POST["salary"])) {
			$salaryRes = "OK";
		} else {
			$salaryRes = "This is required field. It should be written in following format UZS 200,000.00";
		}

		if (preg_match("/(http|https):\/\/(\w|\d)+\.\w+[\/]?/", $_POST["url"])) {
			$urlRes = "OK";
		} else {
			$urlRes = "This is required field. It should match URL format. For ex, http://github.com";
		}

		if (preg_match("/[0-3]\.[0-9]|4\.[0-5]/", $_POST["gpa"])) {
			$gpaRes = "OK";
		} else {
			$gpaRes = "This is required field. It should be a floating point number less than 4.5";
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<form action="index.php" method="post">
				<dt>Name</dt>
				<dd>
					<input type="text" name="name" required>
					<br>
					<?= $nameRes ?? "" ?>
				</dd>

				<dt>Email</dt>
				<dd>
					<input type="text" name="email" required>
					<br>
					<?= $emailRes ?? "" ?>
				</dd>

				<dt>Username</dt>
				<dd>
					<input type="text" name="username" required>
					<br>
					<?= $usernameRes ?? "" ?>
				</dd>

				<dt>Password</dt>
				<dd>
					<input type="text" name="password" required>
					<br>
					<?= $passwordRes ?? "" ?>
				</dd>

				<dt>Confirm password</dt>
				<dd>
					<input type="text" name="confirm_password" required>
					<br>
					<?= $passwordConfirmRes ?? "" ?>
				</dd>

				<dt>Date of birth</dt>
				<dd>
					<input type="text" name="dob">
					<br>
					<?= $dobRes ?? "" ?>
				</dd>

				<dt>Gender</dt>
				<dd>
					<input type="text" name="gender">
					<br>
					<?= $genderRes ?? "" ?>
				</dd>

				<dt>Marital Status</dt>
				<dd>
					<input type="text" name="m_status">
					<br>
					<?= $mStatusRes ?? "" ?>
				</dd>

				<dt>Address</dt>
				<dd>
					<input type="text" name="address" required>
				</dd>

				<dt>City</dt>
				<dd>
					<input type="text" name="city" required>
				</dd>

				<dt>Postal code</dt>
				<dd>
					<input type="text" name="p_code">
					<br>
					<?= $codeRes ?? "" ?>
				</dd>

				<dt>Home phone</dt>
				<dd>
					<input type="text" name="h_phone">
					<br>
					<?= $hPhoneRes ?? "" ?>
				</dd>

				<dt>Mobile phone</dt>
				<dd>
					<input type="text" name="m_phone">
					<br>
					<?= $mPhoneRes ?? "" ?>
				</dd>

				<dt>Credit card number</dt>
				<dd>
					<input type="text" name="card">
					<br>
					<?= $cardRes ?? "" ?>
				</dd>

				<dt>Credit card expiry date</dt>
				<dd>
					<input type="text" name="card_exp">
					<br>
					<?= $cardExpRes ?? "" ?>
				</dd>

				<dt>Monthly Salary</dt>
				<dd>
					<input type="text" name="salary">
					<br>
					<?= $salaryRes ?? "" ?>
				</dd>

				<dt>Web site URL</dt>
				<dd>
					<input type="text" name="url">
					<br>
					<?= $urlRes ?? "" ?>
				</dd>

				<dt>Overall GPA</dt>
				<dd>
					<input type="text" name="gpa">
					<br>
					<?= $gpaRes ?? "" ?>
				</dd>

				<br>

				<button>Register</button>
			</form>
		</dl>
	</body>
</html>