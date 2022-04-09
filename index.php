<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
   <section class="form signup">
       <header>Chat App</header>
       <form action="#" enctype = "multipart/form-data">
           <div class="error-txt"></div>
           <div class="name-details">
               <div class="field input">
                   <label>First Name</label>
                   <input type="text" name="fname" placeholder="First name" required>
               </div>
               <div class="field input">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last name" required>
            </div>
           </div>
           <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Email Address" required>
        </div>
        <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Entre Password" required>
            <i class="fa fa-eye"></i>
        </div>
        <div class="field image">
            <label>Select Image</label>
            <input type="file" name="image" required>
        </div>
        <div class="field button">
            <input type="submit" value="continue to chat">
        </div>
       </form>

       <div class="link">Already signed up?<a href="login.php">Login Now</a></div>
   </section>
    </div>

    <script src="javascript/javascript1.js">

    </script>
    <script src="javascript/signup.js"></script>
</body>
</html>