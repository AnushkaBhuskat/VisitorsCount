<!DOCTYPE html> 
<html> 
<head> 
<title>Visitor Counter</title> 
<style> 
body { 
font-family: Arial, sans-serif; 
text-align: center; 
margin-top: 50px;


} 
.counter { 
display: inline-block; 
padding: 20px; 
border: 2px solid #ddd; 
 
 
            border-radius: 10px; 
            background-color:rgb(161, 105, 36); 
        } 
h1
{
   
}
    </style> 
</head> 
<body> 
    
    <h1>Welcome to the Visitor Counter Page </h1> 
    
    <div class="counter"> 
        <?php 
        
        $file = "visitor_count.txt"; 
 
        // Check if the file exists 
        if (!file_exists($file)) { 
            // Create the file and set the initial count to 0 
            file_put_contents($file, 0); 
        } 
 
        // Read the current count from the file 
        $count = (int)file_get_contents($file); 
 
        // Increment the count 
        $count++; 
 
 
 
        // Write the updated count back to the file 
        file_put_contents($file, $count); 
 
        // Display the count 
        echo"<p>Anushka Bhuskat<p>";
        echo"<p>Roll No.1</p>"
        echo "<h2>Total Visitors: $count</h2>"; 
        ?> 
    </div> 
</body> 
</html>