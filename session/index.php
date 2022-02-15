<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet"   
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
         crossorigin = "anonymous">      
    <link rel="stylesheet" href="style.css">        
    <title>Registration Form</title>
</head>
<body>
<div class="container register form">
    <form action="registeruser.php" method="post">
    <div class="note">  
                    <h3> Register here! </h3>  
                </div>
        <div class="form-content">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email" name="email" >  
            </div>
    
            <div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Choose Password"/>  
            </div>
           
            <div class="form-group">
            <button type="submit" class="btnSubmit"> Submit </button>  
            </div>
            </div>
</form>
    </div>
</div>
</body>
</html>