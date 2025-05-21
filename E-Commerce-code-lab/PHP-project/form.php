<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>User Registration</title>
 <style>
   .form-box {
     width: 400px;
     border: 1px solid #ccc;
     padding: 20px;
   }
   h2 { text-align: center; }
   label{ font-weight: bold; }
   input, textarea, select {
     width: 100%;
     padding: 10px 12px;
     box-sizing: border-box;
   }
   .btn-group {
       display: flex;
       justify-content: flex-start;
       gap: 12px;
   }
   input[type="submit"], input[type="reset"] {
     background-color: green;
     border: none;
     padding: 10px 12px;
     width: 48%;
   }
   input[type="reset"] {
     background-color: red;
   }
 </style>
</head>


<body style="display: flex; font-family: Arial;justify-content: center;">
 <div class="form-box">
   <h2>User Registration Form</h2>
   <form action="store.php" method="post">
     <div>
       <label for="name">Name:</label>
       <input type="text" name="name" id="name">
     </div><br>
     <div>
       <label for="email">Email:</label>
       <input type="email" name="email" id="email">
     </div><br>
     <div>
       <label for="email">Password:</label>
       <input type="password" name="password" id="email">
     </div><br>


      <div class="btn-group">
           <label>Interests:</label>
           <span><input type="checkbox" name="interests[]" 
                 value="Coding"></span>
           <span>Coding</span>
           <span><input type="checkbox" name="interests[]" 
                 value="sports"></span>
           <span>sports</span>
           <span><input type="checkbox" name="interests[]" 
                 value="Music"></span>
           <span>Music</span>
       </div><br>


       <div class="btn-group">
           <label>Gender:</label>
           <span>Male</span>
           <span><input type="radio" name="gender" value="Male"></span>&nbsp;
           <span>Female</span>
           <span><input type="radio" name="gender" value="Female"></span>
       </div><br>


     <div>
       <label for="message">About:</label>
       <textarea name="message" id="message" rows="2"></textarea>
     </div><br>
     <div class="btn-group">
       <input type="submit" value="Submit">
       <input type="reset" value="Reset">
     </div>
   </form>
 </div>
</body>
</html>