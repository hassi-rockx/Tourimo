 <!-- ...........SignIn Modal................ -->


 <div class="bg-modal">
     <div class="form-login">
         <div class="img-box-avatar">
             <div class="cls" id="close">+</div>
             <img src="../Tourimo/admin/img/admin.png" alt="">
         </div>
         <div class="form-content">
             <h2>SignIn</h2>
             <form method="POST" action="">
                 <label class="label1" for="Email">Email</label>
                 <input type="email" id="useremail" placeholder="Email" required>
                 <label class="label1" for="Password">Password</label>
                 <input type="password" id="userpass" placeholder="Password" required>
                 <a href="#" class="btn-gold btn-sign" id="LogIn" type="submit" onclick="signin()">Sign In</a>
                 <a href="#" class="forgotbtn">Forgot Password ?</a>
             </form>
         </div>
     </div>
 </div>


 <!-- .......SignUp Modal .........  -->
 <div class="bg-modal1">
     <div class="grid-container">
         <div class="bg-img-ds">
             <div class="status">
                 <h2>JoinUs Now </h2>
                 <p>Explore Pakistan</p>
             </div>
         </div>
         <div class="form-SignUp">
             <div class="cls" id="close1">+</div>
             <div class="signup-content">
                 <form>
                     <label class="label1" for="Name">Enter Your Full Name</label>
                     <input type="email" id="sname" placeholder="FullName" required>

                     <label class="label1" for="Email">Enter Your Email</label>
                     <input type="email" id="semail" placeholder="Email" required>

                     <label class="label1" for="Password">Enter Your Password</label>
                     <input type="password" id="spassword" placeholder="Password" required>

                     <label class="label1" for="cPassword">Repeat Password</label>
                     <input type="password" id="scpassword" placeholder="Repeat Password" required>

                     <label class="label1" for="DateOfBirth">Enter DOB</label>
                     <input type="date" id="sdob" placeholder="Date of Birth" required>

                     <label class="label1" for="Password">Enter Your Contact No</label>
                     <input type="text" id="scontact" placeholder="0300-1234567" required>

                     <label class="label1"><input type="checkbox" required> I agree terms and conditions</label>

                     <a href="#" class="btn-gold btn-signup" onclick="signup()" type="Submit">Sign Up</a>
                 </form>

             </div>
         </div>

     </div>
 </div>












 <div class="footer-basic">
     <footer>
         <div class="social">
             <a href="https://instagram.com/hassi_rockx"><i class="icon ion-social-instagram"></i></a>
             <a href="https://snapchat.com"><i class="icon ion-social-snapchat"></i></a>
             <a href="https://twitter.com/hassi.rockx"><i class="icon ion-social-twitter"></i></a>
             <a href="https://fb.com/hassi.rockxs"><i class="icon ion-social-facebook"></i></a>
         </div>
         <ul class="list-inline">
             <li class="list-inline-item"><a href="index.php">Home</a></li>
             <li class="list-inline-item"><a href="trips.php">Trips</a></li>
             <li class="list-inline-item"><a href="about.php">About</a></li>
             <li class="list-inline-item"><a href="gallery.php">Gallery</a></li>
             <li class="list-inline-item"><a href="contact.php">Contact</a></li>
         </ul>
         <p class="copyright">All Right Reserves Tourimo Trip Advisors © 2021</p>
     </footer>
 </div>




 <script src="js/index.js"></script>
 <script src="https://kit.fontawesome.com/406c1b2a7f.js" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>