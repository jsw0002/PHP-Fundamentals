<?php

?>
                
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<style>
    
    html, body {
        height: 100%;
    }
    
    .container {
        background-image: url("background.jpg");
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        padding-top: 150px;
    }
    
    .center {
        text-align: center;
    }
    
    .white {
        color: white; 
    }
    
    p {
        padding-top: 15px;
        padding-bottom: 15px;
    }
    
    button {
        margin-top: 20px;
    }

</style>
            
</head>
<body>
    
    <div class="container">
    
        <div class="row">
        
            <div class="col-md-6 col-md-offset-3 center">
            
                <h1 class="center white">Weather Predictor</h1>
                
                <p class="lead center white">Enter your city below to get a forecast for the weather.</p>
                
                <form>
                
                    <div class="form-group">
                    
                        <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..." />
                        
                    </div>
                    
                    <button class="btn btn-success btn-lg">Find My Weather</button>
                
                </form>
                
            </div>
                
        </div>
    
    </div>
            
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      
</body>
</html>