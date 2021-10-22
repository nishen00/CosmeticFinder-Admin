<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-firestore.js"></script>
<!--===============================================================================================-->
</head>
<body>
	<script>

var firebaseConfig = {
    apiKey: "AIzaSyDkqvqyCWIn56241mq5RXY6FFh2HY-jYt4",
    authDomain: "cosmeticfinder-712ae.firebaseapp.com",
    projectId: "cosmeticfinder-712ae",
    storageBucket: "cosmeticfinder-712ae.appspot.com",
    messagingSenderId: "1056180639483",
    appId: "1:1056180639483:web:d121be7f141a8f0eac025e"
  };
  // Initialize Firebase
 var app =  firebase.initializeApp(firebaseConfig);
 const db = firebase.firestore(app);
		firebase.auth().onAuthStateChanged((user) => {
  if (user) {
    // User is signed in, see docs for a list of available properties
    // https://firebase.google.com/docs/reference/js/firebase.User
    
	//  window.location.href = "{{URL::to('/home')}}";
    // ...
  } else {
    // User is signed out
    // ...
  }
});
	</script>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" onsubmit="return false;">
					<span class="login100-form-title p-b-43">
						Account Login
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" id="UserName">
						

						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" id="Password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id = "signIn">
							Sign in
						</button>
					</div>
					
					
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js2/main.js"></script>

</body>


<script>
	// Your web app's Firebase configuration


  
$(document).ready(function(){

$("#signIn").click(function(){
	// getMessage();

	firebase.auth().signInWithEmailAndPassword($('#UserName').val(), $('#Password').val())
  .then((userCredential) => {
    // Signed in
    var user = userCredential.user;
	var docRef = db.collection("UserType").doc(user.uid);

docRef.get().then((doc) => {
    if (doc.exists) {
      
	sessionStorage.setItem("Type", doc.data().type);
	sessionStorage.setItem("companyuser", doc.data().companypassID);
	sessionStorage.setItem("companyName", doc.data().CompanyName);
	window.location.href = "{{URL::to('/home')}}";
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
    }
}).catch((error) => {
    console.log("Error getting document:", error);
});
sessionStorage.setItem("UserID", user.uid);

    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
  });
});

 
});
</script>
</html>