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
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,400&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

   <section class="header" style="background: transparent;">
      <nav style="padding-top: 10px;">
         <a href="index.html"><img src="images/Delhivery_logo.dcef706.png" alt=""></a>
         <div class="signing">
            <a href="signin.php"><button class="up" style="background-color:#ED4136 ;box-shadow: 0 0 20px 0 black;">Login/SignUp </i>
             </button> </a>
         </div>
      </nav>
   </section>
   
   <div class="banner5">
      <div class="track1">
         <div class="pc" style="padding-top: 100px;">
            <p class="text" style="line-height: 35px; font-size: 1.85rem;color: white; font-weight: bold;">We are <span
                  style="font-size: 2rem;color: #ED4136;"> India's largest </span> fully integrated
               logistics services provider
            </p>
            <p class="txt" style="font-size: 1.2rem;">We are India’s largest fully integrated logistics provider. We aim
               to build the operating system for commerce, through a combination of world-class infrastructure,
               logistics operations of the highest quality and cutting-edge engineering and technology capabilities.</p>
            <div class="signing">
               <a href="delivery.php"><button class="up" style="box-shadow: 0 0 20px 0 #e98a83;"><b>Know More <i class="fa fa-arrow-right" aria-hidden="true"></i>
       </button></a>
            </div>
         </div>
         <form style="padding-right: 80px; padding-top:40px" action="order_id.php" method="GET">
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

   <script>
      function openForm() {
         document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
         document.getElementById("myForm").style.display = "none";
      }
   </script>

   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>