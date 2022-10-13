<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Booking Form</title>
    
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Booking Form
        </div>
    
    <div class="Form">

        <form action=" " method="POST">
        <div class="input_Field">
            <label for="Name" >Name </label>
            <input type="text" class="input" id="Name" name="Name" required>
        </div>
        <div class="input_Field">
            <label for="Mobile">Mobile </label>
            <input type="text" class="input" id="Mobile" name="Mobile"  required>
        </div>
       <div class="input_Field">
            <label for="Email" >E-mail </label>
            <input type="text" class="input" id="Email" name="Email" required>
        </div>
        
  <div class="input_Field">
    <label for="Gender" >Gender </label>
    <div class="custom_select">
        <select name="Gender" id="Gender" name="Gender"  required>
            <option value=""></option>
            <option value="male"  >Male</option>
            <option value="Female"  >Female</option>
        </select>
    </div>
</div>
<div class="input_Field">
    <label >Select a Service</label>
    <div class="custom_select">
  <select name="Service" id="Service" name="Service" required>
    <option value="volvo"></option>
    <option value="Kids: Boys 12 & Under"> Kids: Boys 12 & Under</option>
    
    <option value="Single Process (Regular)"> Single Process (Regular)</option>
    <option value=" Single Process (Regular)"> Single Process (Regular)</option>
    <option value=" Single Process (w/ Haircut)">  Single Process (w/ Haircut)</option>
    <option value="Double Process">   Double Process </option>
    <option value=" Partial Highlights">  Partial Highlights </option>
    <option value=" Full Head Highlight (w/ Haircut)">   Full Head Highlight (w/ Haircut)  </option>
    <option value=" Standard Manicure">   Standard Manicure  </option>
    <option value=" Express Pedicure">   Express Pedicure </option>
    <option value="Spa Pedicure">   Spa Pedicure </option>


</select>
</div>

</div>

<div class="input_Field">
    <label for="Date">Date</label>
    <div class="dt">
  <input type="date" id="Date" name="Date" required>
</div>
</div>
<div class="input_Field">
    <label for="appt"> Time</label>
    <div class="dt">
  <input type="time" id="Time" name="Time" required>
</div>
</div>
<div class="input_Field">
    <label >Address </label>
    <textarea class="textarea" id="Address" name="Address" required></textarea>
</div>
<div class="input_Field">
    <input type="submit" name="submit" value="Book"  class="btn">
</div>
</form>
  
    
    </div>
</div>
</body>
</html>


<?php
include 'connect.php';
if(isset($_POST['submit'])){
$Name = $_POST['Name'];
$Mobile = $_POST['Mobile'];
 $Email = $_POST['Email'];
 $Gender = $_POST['Gender'];
 $Service = $_POST['Service'];
 $Date = $_POST['Date'];
 $Time = $_POST['Time'];
 $Address = $_POST['Address'];

$insertquery=" insert into customer(Name,Mobile,Email,Gender,Service,Date,Time,Address) values('$Name','$Mobile','$Email','$Gender','$Service','$Date','$Time','$Address') ";

$res= mysqli_query($con,$insertquery);

if($res){
    ?>
      <script>
          alert("Details Submitted ");
      </script>
    <?php
}else{
    ?>
      <script>
          alert("Details not Submitted ");
      </script>
    <?php
}

}

?>



