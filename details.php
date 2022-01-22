<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
//$amt=$_POST['amt'];


$conn=mysqli_connect("localhost","id18324186_root","Uno1dos2tres3@");
mysqli_select_db($conn,"id18324186_donators");
if(!$conn){
    die("Error connecting to MySql. Please go back to home page and try again. ".mysqli_connect_error());
}
/*
else{
    echo "connection successful";
}*/

if (isset($email)){
    
        $insert="insert into people values('$name','$phone','$email')";
        mysqli_query($conn,$insert);
        
}
?>





<html>
    <head>
        <style>
            html, body {
  height: 100%;
}

.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #4FD1C5;
background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px rgba(79,209,197,.64);
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }

button::before {
content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}

button::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #00FFCB;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}
        </style>
</head>
<body>

<div class='wrap'>
<button id="rzp-button1" class='button' "> 
<form>
<br>
  <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_ImS2BmP5QyHWVC" async> </script> </form>
</button></div>

</script>

</body>
</html>