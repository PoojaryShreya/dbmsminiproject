<!DOCTYPE html>
<html> 
<head>
        <title>Study material for engineering students</title>
       <link rel="stylesheet" href="style.css">
        
    </head>
  <body>
  <div class="registration-page">
  <div class="form">
 <form action="upload.php" method="post" enctype="multipart/form-data">
 <input type="text" name="username" placeholder="USERNAME" required/>
 <input type="text" name="bookname" placeholder="book name" required/>
 <input type="text" name="bookauthor" placeholder="book author" required/>
 <input type="text" name="subject" placeholder="subject" required/>
 <input type="text" name="branch" placeholder="branch" required/>
 <input type="number" name="sem" placeholder="semester" required/>
 Enter price zero (if free)
 <input type="number" name="price" placeholder="price" required/>
 <input type="number" name="contact" placeholder="phone number" required/>

 Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button  class="button button2" type="submit" value="Upload Image" >submit</button>
    </form>
    <button class="button button2"><a href="display.php">check</a></button>
    <button class="button button2"><a href="dash.php">back to dashboard</a></button>
    
</form>
</div>
</div>
</body>
</html>