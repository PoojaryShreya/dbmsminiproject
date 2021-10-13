<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
	<link rel="stylesheet" href="s.css">
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


<div class="registration-page">
        <table class="content-table" style="width:100%">
        <thead>
        <tr>
            <th class="list-group-item">BOOK NAME</th>
            <th class="list-group-item">BOOK AUTHOR</th>
            <th class="list-group-item">BRANCH</th>
            <th class="list-group-item">SEMESTER</th>
            <th class="list-group-item">SUBJECT</th>
			<th class="list-group-item">PRICE (in Rs)</th>
			<th class="list-group-item">contact</th>

            <th class="list-group-item">PHOTO</th>
         </tr> 
          </thead>  
         <tbody>
         <?php

		   include 'conn.php';
		   $str = $_POST["search"];

		   $selectquery = "SELECT  bookname,bookauthor,branch,sem,subject,price,photo,c.contact 
           FROM book b , contact c 
           WHERE b.username = c.username and sem= '$str' or 
            bookname='$str' or bookauthor= '$str' or subject='$str' " ;
		  //$selectquery = "SELECT * FROM 'book`,`contact` WHERE 
		  //'book'.username = 'contact'.username and sem = '$str'" ;
//bookname,bookauthor,branch,sem,price, photo,contact  bookname='$str' or
//sem= '$str' or bookauthor= '$str' or subject='$str'" ;
           $query= mysqli_query($con,$selectquery);
           $result=mysqli_fetch_array($query);

           while($result = mysqli_fetch_array($query)){
          ?>
          
		  <tr>
          
           <td><?php echo $result['bookname']; 
           ?></td>
           <td><?php echo $result['bookauthor']; 
           ?></td>
           <td><?php echo $result['branch']; 
           ?></td>
           <td><?php echo $result['sem']; 
           ?></td>
          <td><?php echo $result['subject']; 
           ?></td>
           <td><?php echo $result['price']; 
		   ?></td>
		   <td><?php echo $result['contact']; 
           ?></td>
           <td><img src=" <?php echo $result['photo'];?>"></td>
           </tbody>
         </tr>
         <?php
    }
    ?>
        </table>
        </div>

</body>
</html>

