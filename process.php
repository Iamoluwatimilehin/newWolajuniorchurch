<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Define the file where you want to save the form data
    $filename = "form_data.txt";

    // Prepare the data to be written to the file
    $data = "Name: $name\n";
    $data .= "Email: $email\n";
    $data .= "Message: $message\n\n";

    // Open the file for appending
    $file = fopen($filename, "a");

    if ($file) {
        // Write the data to the file
        fwrite($file, $data);
        fclose($file);
        echo '
        
        

<!DOCTYPE html>
<html>
    <head>
        <title>Join Us</title>
    </head>
    <link href="joinUs.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
      <body>
     
        <div class="container">
         <h1>Form data has been successfully saved!<br>Go back to <a href="index.html">homepage</a></h1>
        </div>
      </body>
</html>
        ';
    } else {
        echo'
        
        

<!DOCTYPE html>
<html>
    <head>
        <title>Join Us</title>
    </head>
    <link href="joinUs.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
      <body>
     
        <div class="container">
         <h1>Unable to save form data. Please try again later.</h1>
        </div>
      </body>
</html>
        
        ';
        
    }
} else {
    echo'
    
    <!DOCTYPE html>
<html>
    <head>
        <title>Join Us</title>
    </head>
    <link href="joinUs.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
      <body>
     
        <div class="container">
         <h1>Invalid request method. Please submit the form.</h1>
        </div>
      </body>
</html>

    ';
    
}
?>
