<html>
<head>
    <title>Study Material for Engineering Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="registration-page">
            <div class="form">
            <font color ="white">
                <h3 class="register-heading">Enter the details of notes</h3></font>
            <form action="upload1.php" method="POST" enctype="multipart/form-data">
                <div class="row register-form">
                    <div class="form-group">
                    <input type="text"  placeholder="username" name="username" value="" required/>
                    <input type="text"  placeholder="course *" name="course" value="" required/>
                    <input type="text"  placeholder="branch *" name="branch" value="" required/>
                    <input type="text"  placeholder="sem *" name="sem" value="" required/>
                    <input type="text"  placeholder="module/chapter name" name="name" value="" 
                    required/>

                    <input type="file"  placeholder="Choose a notes *" name="notes" value="" required/>
                    <input type="submit" class="btnupload" name="submit" value="Upload" /> 
                    
            </form>
            </div>
        </div>  
</body>
</html>