
<section class="header">
      <nav>
         <a href="index.php"><img src="images/Delhivery_logo.dcef706.png" alt=""></a>
         <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
               <li><a href="delivery.php">Home</a> </li>
               <li><a href="services.php">Services</a> </li>
               <li><a href="partner.php">Partner</a> </li>
               <li><a href="company.php">Company</a> </li>
               <li><a href="track.php">Track</a> </li>
            </ul>
         </div>
         <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
   </section>

   <script>
 
 var navLinks= document.getElementById("navLinks");
  function showMenu(){
    navLinks.style.right="0";
 }
 function hideMenu(){
    navLinks.style.right="-200px";
 }
 
</script>