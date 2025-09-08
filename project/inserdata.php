

<?php 
  //include header file
  include ('include/header.php');

  if(isset($_POST['submit'])){
	if(isset ($_POST['term'])=== true){

		// name input chack---------------

		if(isset($_POST['name']) && !empty($_POST['name'])){
			if(preg_match('/^[A-Za-z\s]+S/', $_POST['name'])){

					$name = $_POST['name'];

			}
			else{
				$nameError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
                               <strong>Only lower and upper case and space.</strong>
  							   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							   <span aria-hidden="true">&times;</span>
  							   </button>
						</div>';
			}
		}else
			{
			$nameError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
 							 <strong>Please fill the name fild. </strong>
 							 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  						     <span aria-hidden="true">&times;</span>
  							 </button>
						</div>';

			}

		// gender input chack---------------
		if(isset($_POST['gender']) && !empty($_POST['gender'])){
			$gender = $_POST['gender'];
		}else{
			$genderError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
  <strong>Select gender</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

		}
		// day input chack---------------
		if(isset($_POST['day']) && !empty($_POST['day'])){
			$day = $_POST['day'];
		}else{
			$dayError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
  <strong>Select day</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
// month input chack---------------
if(isset($_POST['month']) && !empty($_POST['month'])){
	$month = $_POST['month'];
}else{
	$monthError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
<strong>Choose month</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

		}

// year input chack---------------
if(isset($_POST['year']) && !empty($_POST['year'])){
	$year = $_POST['year'];
}else{
	$yearError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
<strong>Select Year input</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

		}

// BLOOD input chack---------------
if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
	$blood_group = $_POST['blood_group'];
}else{
	$blood_groupError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
<strong>Select blood_group input</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

		}

// City input chack---------------

if(isset($_POST['city']) && !empty($_POST['city'])){
	if(preg_match('/^[A-Za-z\s]+S/', $_POST['city'])){

			$city = $_POST['city'];

	}else{
		$cityError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
<strong>Only lower and upper case and space.</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
	}
}else{
	$cityError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
<strong>Please fill the city fild. </strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

}
// contact input chack---------------

		if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
			if(preg_match('/\d{11}/', $_POST['contact_no'])){

					$contact = $_POST['contact_no'];

			}else{
				$contactError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
  <strong>conatct should consider only 11 character</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
			}
		}else{
			$contactError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
  <strong>Please fill the contact nomber fild. </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

		}

// password input chack---------------

		if(isset($_POST['password'])&& !empty($_POST['password']) && isset($_POST['c_password'])&& !empty($_POST['c_password'])){
			if(strlen($_POST['password'])>=6){
					if($_POST['password'] == $_POST['c_password'] )
					{
							$password = $_POST['password'];
					}else{
						$passwordError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
  <strong>conform password is not same</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
					}

				}
				else{
		$passwordError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
  <strong>Please fill password filled </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}



	}else{
		$passwordError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
  <strong>Please agree with our terms and conditions. </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}

// email input chack---------------

	if(isset($_POST['email']) && !empty($_POST['email'])){
			$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

		if(preg_match($pattern, $_POST['email'])){

				$check_email = $_POST['email'];

				$sql = "SELECT email FROM donor WHERE email = '$check_email' ";

				$result = mysqli_query($connection, $sql);
					if(mysqli_num_rows($result)>0){

						$emailError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
						<strong>Sorry this email is allready exist</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
					
				}else{
						$email = $_POST['email'];
				}

		}else{
			$emailError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
<strong>Please enter valid email address</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
		}
	}else{
		$emailError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
<strong>Please fill the email fild. </strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

	}

	// submit input chack---------------




			if(isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact) && isset($city) && isset($password)){
				$DonerDOB = $year."_".$month."_".$day;	
				
				$password = md5($password);
				// md5 password ko string me convert karega 

				$sql = "INSERT INTO donor(name,gender,email,city,dob,contact_no,save_life_date,password) VALUES('$name','$gender','$email','$city','$DonerDOB','$contact','0','$password')";
		
				if(mysqli_query($connection , $sql)){
					$submitSuccess =  '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Data inserted Successfully</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';

				}else{
					$submitError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
					<strong>Oops Data not inserted directly </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>';
				}
			}

	// email input chack---------------	


}else{
	$termError =  '<div class="alert alert-denger alert-dismissible fade show" role="alert">
  <strong>please agree with our terms and conditions </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>';

		}
  }


?> 
<!-- -------------------------------------------------- -->

<?php 
if (isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $blood_group=$_POST["blood_group"];
  $gender=$_POST["gender"];
  $day=$_POST["day"];
  $month=$_POST["month"];
  $year=$_POST["year"];
  $email=$_POST["email"];
  $contact_no=$_POST["contact_no"];
  $city=$_POST["city"];
  $password=$_POST["password"];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>insert page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
 if (isset($_POST["submit"]))
 {

  $con=new mysqli("localhost", "root", "", "donatetheblood");
  $DonerDOB = $year."_".$month."_".$day;	
  $sql="insert into donor(name,gender,email,city,dob,contact_no,save_life_date,password,blood_group)  
  values('$name','$gender','$email','$city','$DonerDOB','$contact_no','0','$password', '$blood_group') ";

  $con->query($sql);
  $con->close();

  echo "<script>";
  echo "alert('Record Save!!!')";
  echo "</script>";
 }

   
?>


<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>



<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					<hr class="red-bar">
					
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post" novalidate="">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" >
						

					</div><!--full name-->

					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
			
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" >
				    </div><!--gender-->
					
				    <div class="form-inline">
						
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
               
			  <option value="">---Date---</option>
			 
                <option value="01" >01</option>
				<option value="02" >02</option>
				<option value="03" >03</option>
			
				<option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				
                <option value="01" >January</option>
				<option value="02" >February</option>
				<option value="03" >March</option>
				
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
			
                <option value="1957" >1957</option>
				<option value="1958" >1958</option>
				<option value="1959" >1959</option>
				
              </select>
			 
            </div><!--End form-group-->
			
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php if(isset($email)) echo $email; ?>">
					</div>
					
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11" value="<?php if(isset($contact)) echo $contact; ?>">
			
			</div><!--End form-group-->
			
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option>
	
	<optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup>
	<option value="Bhopal" >Bhopal</option>
	<option value="Bhimber" >Bhimber</option>
	<option value="Kotli" >Kotli</option>
	<option value="Mirpur" >Mirpur</option>
	<option value="Muzaffarabad" >Muzaffarabad</option>
	
	<option value="Mastung" >Mastung</option>
	<option value="Musakhel" >Musakhel</option>
	<option value="Naseerabad" >Naseerabad</option>
	<option value="Nushki" >Nushki</option>
	<option value="Panjgur" >Panjgur</option>
	<option value="Pishin" >Pishin</option>
	
	<option value="Buner" >Buner</option>
	<option value="Charsadda" >Charsadda</option>
	<option value="Chitral" >Chitral</option>
	<option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
	<?php if(isset($cityError)) echo $cityError; ?>          
</div><!--city end-->
			<?php if(isset($cityError)) echo $cityError; ?>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
			  
			</div><!--End form-group-->
			
            <div class="form-inline">
              <input checked="" type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>