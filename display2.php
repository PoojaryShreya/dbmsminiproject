<html>
<head>
    <title>Study Material for Engineering Student</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>


<form method="post">
<center> <h1><label>Search</label></h1><center>
<center>
<input type="text" name="search" placeholder="enter the semester">
</center>
<center>
<input class="button" type="submit" name="submit">
</center>	
</form>

    <div class="main-div">
        <h2>List of notes uploaded by Students</h2>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            
                            <th>course</th>
                            <th>branch</th>
                            <th>sem</th>
                            <th>name</th>
                            <th> download</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php     
                    
                           include 'conn.php';
                           $str = $_POST["search"];

                           $selectquery = "SELECT course,branch,sem,name
                           FROM notes1 WHERE  sem= '$str'" ;

                        
                           $query = mysqli_query($con,$selectquery);
                           $nums= mysqli_num_rows($query);
   
                           while($res=mysqli_fetch_array($query)){
                         
                        
                               ?>
   
                               <tr>    
                                    
                                    
                                    <td><?php echo $res['course']; ?>  </td> 
                                   <td><?php echo $res['branch']; ?>  </td> 
                                   <td><?php echo $res['sem']; ?> </td> 
                                   <td><?php echo $res['name']; ?>  </td>
                                   
                                   <td class="text-center">
                                   <a href="download.php?id=18CS52
                                   " class="btnRegister">Download</a></td>
                               </tr> 
                               <?php 
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

                        

    
     
</body>
</html>