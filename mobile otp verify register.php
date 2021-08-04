<?php
require_once "config.php";
?>
<!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-firestore.js"></script>




<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
      apiKey: "AIzaSyCG_eOzAL1LOT-JV-J2RYAhaWEa2lWQzOo",
      authDomain: "hublogin-dc0ac.firebaseapp.com",
      databaseURL: "https://hublogin-dc0ac.firebaseio.com",
      projectId: "hublogin-dc0ac",
      storageBucket: "hublogin-dc0ac.appspot.com",
      messagingSenderId: "597432346852",
      appId: "1:597432346852:web:979ae81e6e8300ecce64f1",
      measurementId: "G-TCJ9FRXVVG"
    };
    
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();
</script>

<script src="js/auth.js"></script>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" type="text/css" href="login-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/counter.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link  rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body{
        background-color: black;
    }
</style>
<body>
<?php
require 'header.php';
?>
<div class="container container-header">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-card">
                <div class="card-header">Sign-Up</div>

                <div class="card-body">
                    <form id='register'>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control" name="phone_number" value="" required autocomplete="phone_number" placeholder = "+918030785155" autofocus>
                                    <div id ="recaptcha-container"></div>
                                        <span class="invalid-feedback" role="alert">
                                            <strong></strong>
                                        </span>

                                </div>
                            </div>
                            <div class="form-group row offset-4">
                                    <button type="button" onclick="phoneAuth();" class="btn" id="sign-in-button" >Send Code</button>
                            </div>                        
                    </form>
                    <form id='verify' style="display:none">
                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Enter Code</label>
                            <div class="col-md-6">
                                <input id="verificationCode" type="text" class="form-control" name="verificationCode" value="" required autocomplete="verificationCode" autofocus>
                                <div id ="recaptcha-container"></div>
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                            </div>
                            </div>

                            <div class="form-group row offset-4">
                                    <button type="button" onclick="codeVerify();" class="btn" id="sign-in-button">Verify Code</button>
                            </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require'footer.php';
?>
</body>


