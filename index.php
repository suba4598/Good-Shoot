<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script  src="myscript.js"></script>
    <?php include 'insert.php';?>
    <script src="https://kit.fontawesome.com/14fc097011.js" crossorigin="anonymous"></script>
    </head>
<body>
   
    
    <div class="glass-box">
        <nav>
            <i class="fas fa-bars"></i>
            <ul>
                <li><a href="#">HOME</a></li> 
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SAMPLES</a></li>
                <li><a href="#">OUTDOOR</a></li>
            </ul>
        </nav>  
        <div class="searchbox">
        <input type="search" class="search" placeholder="Type to search">
        <p class="icon"><i class="fas fa-search"></i></p>
    </div>
    <div Class ="CN"><br> 
    <h1>GOOD SHOOT PHOTOGRAPY</h1>
    <div class="Form-container">
    <p class="Book">Book your appoinment with us </p><br>
    <form name="Regform" action="insert.php" onsubmit="return Goodshoot()" method="post">
       <label for="customer-Name">Name :</label>
       <input type="text" name="txtName" id="txtName"  placeholder=""class= "na" required><br><br>
       <label for="Email">Email :</label>
       <input type="Email" name="txtEmail" id="txtEmail" Placeholder="" required><br><br>
       <label for="Phone number">Mobile  :</label>
       <input type="Phone" name="txtMobile" id="txtMobile" Placeholder="" required><br><br>
       <label for="Date">Date :</label>
       <input type="date" value="" ><br><br>
       <div class ="Occasions">
       <label for="Occasion-names">Occasions</label>
       
      
       <select type = "text"  id="txtOccasions" required>

           <option value="1">Engagement</option>
           <option value="1">Marriage</option>
           <option value="2">Ear Piercing Ceremony</option>
           <option value="2">Baby Shower</option>
           <option value="2">Other</option>

       </select>
    </div>
       <br><br>
       <input type="submit" 
                   value="send" name="Submit" />


       
       
        
    </form>
    </div>

    
</div>
    <div class="Social-media">
        <p class="icon1"><i class="fab fa-facebook"></i></p>
        <p class="icon1"><i class="fab fa-instagram"></i></p>
        <p class="icon1"><i class="fab fa-twitter"></i></p>
        <p class="icon1"><i class="fab fa-linkedin"></i></p>
    </div>
    </div>
    <br>
    <br>
    

    
        <div class="img-animation">

        </div>
        <br><br>
        <div class="flex-container">
        <div class="card-container">
        <div class="card">
            <div class="card-image"></div>
            <div class="card-text">
              
              <h2>HOME</h2>
              <p>To cut a long story short; from concept to creation, the brainchild ‘Arkscope’ took form in 2015 by a bunch of three spirited youngsters driven by a strong desire in photography and the ability to find beauty in the mundane. Our job encompasses touching lives through images, time and time again</p>
            </div>
            
              </div>
              </div>
              <div class="card">
                <div class="card-image"></div>
                <div class="card-text">
                  
                  <h2>ABOUT</h2>
                  <p>To cut a long story short; from concept to creation, the brainchild ‘Arkscope’ took form in 2015 by a bunch of three spirited youngsters driven by a strong desire in photography and the ability to find beauty in the mundane. Our job encompasses touching lives through images, time and time again</p>
                </div>
                
                  </div>
                  </div>
                  <div class="card">
                    <div class="card-image"></div>
                    <div class="card-text">
                      
                      <h2>CONTACT</h2>
                      <p>To cut a long story short; from concept to creation, the brainchild ‘Arkscope’ took form in 2015 by a bunch of three spirited youngsters driven by a strong desire in photography and the ability to find beauty in the mundane. Our job encompasses touching lives through images, time and time again</p>
                    </div>
                    
                      </div>      
                      </div>
            </div>
          </div>
              <br>
              <br>
              <br>
              <br>
              <br>
              
    <div class="grid" >
    <img src="B.jpg">
    <img src="C.jpg">
    <img src="D.jpg">
    <img src="12.jpg">
    <img src="D.jpg">
    <img src="C.jpg">
    <img src="B.jpg">
    </div>
<BR>
    <br>
    
     
</body>
</html>