<?php
include 'conn.php';
if(isset($_POST['submit'])){
$course=$_POST['course'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$name=$_POST['name'];
$file=$_FILES['notes'];
$username =$_POST['username'];

//print_r($file);
$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];

if($fileerror==0){
    $destfile='upload/'.$filename;
    echo "$destfile";
    move_uploaded_file($filepath,$destfile);
    $insertquery = " insert into notes1(course,branch,sem,notes,name,username) 
    values('$course','$branch','$sem','$destfile','$name','$username')";
    $query=mysqli_query($con,$insertquery);
    if($query){
        echo "Data Inserted";
        ?>
      <script>
                location.replace("back1.html");
            </script><?php
    }else{
        echo "Data Not Inserted";
    }
}
}else{
    echo "No button has been clicked";
}