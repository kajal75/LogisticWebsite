<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
   <?php include ("header.php") ?>
<div class="banner4"  >
 <div class="track1" >
<div class="pc">
   <p class="text" style="line-height: 35px; font-size: 2.50rem; "><span class="easily" >Track your</span>
      orders easily
   </p>
   <p class="txt" style="font-size: 1.50rem;">Just enter your  Order ID & it’s done.</p>
      
 
        </div>

<div class="track2" >



   <form style="padding-right: 70px;" action="order_id.php" method="GET">
      <div class="trackingform1">
        <h2 class="track">Track By Order Id:</h2>
        
        
        <input type="text" name="order-id" placeholder="Enter Order ID">
        <button class="btnnn" style="text-decoration: none;"><a href="" id="order">Track Order</a></button>
        <p class="termss">Ecommerce Parcel Tracking
        </p>
        <p class="terms">It's easy to track your order, simply enter your tracking Order Id number.
</p>
      </div>
      </form>

 </div>
</div>
</div>
<div class="tracking-section">
<p class="tracking-heading">Track the way you want
</p>
<p class="tracking-subheading">Need the status of your shipment or proof of delivery? Enter your tracking number or reference number.

</p>
</div>
<hr>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9796806081918!2d77.37646777457275!3d28.63037108418049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x604c3c4160741f7b%3A0x5be6bb2f97663c66!2sPSS%20Techno%20Service%20Digital%20Marketing!5e0!3m2!1sen!2sin!4v1704304088556!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



<?php include ("footer.php") ?>


 
 <!--Javascript for toggle menu-->

 

 <script>
   function openForm() {
     document.getElementById("myForm").style.display = "block";
   }
   
   function closeForm() {
     document.getElementById("myForm").style.display = "none";
   }
   </script>
 
 </body>
 </html>

