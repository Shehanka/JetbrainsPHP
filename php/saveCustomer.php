<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chamod Shehanka
 * Date: 9/26/2017
 * Time: 11:28 AM
 */
 $id=$_GET["txtId"];
 $name=$_GET["txtName"];
 $address=$_GET["txtAddress"];

 $connection=mysqli_connect("127.0.0.1","root","","PHP_Testing");

 if ($connection){
     $sql="INSERT INTO Customer VALUES ('$id','$name','$address')";
     $result=mysqli_query($connection,$sql);

     if ($result){
         echo "Customer has been saved successfully";
     }else{
         echo "Customer failed to save";
         echo mysqli_errno($connection);
     }
 }
