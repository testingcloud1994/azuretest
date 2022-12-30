<?php

/*   $servername = "sqlservice";
    $username = "root";
    $password = "password";
    $dbname = "visitor_count";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = 'CREATE DATABASE if not exists visitor_count';
    if ($conn->query($sql)) {
        #echo "Database Visitor_count created successfully\n";
    } else {
        echo 'Error creating database: ' . $conn->error() . "\n";
    }  
    $db_selected = $conn->select_db('visitor_count');
    $query1= "create table if not exists counter( id INT AUTO_INCREMENT key, visits INT DEFAULT 0 );";
    if(!$conn->query($query1)){
        echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;
    }
      
    $sql = "UPDATE counter SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM counter WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        $query2= "insert into counter( id ) values (1);";
        $conn->query($query2);
        echo "no results";
    }
    
    $conn->close(); */
    ?>
  


<html>    
<head>    
    <meta charset="utf-8">    
    <title>My DevOps Page</title>
    <style>
body {
    background-color:  ;
}
</style>   
</head>    
<font color="#A6ACAF" size="5">    
  <!--  <marquee><b><i>UAT ENVIRONMENT </i></b></marquee>   --> 
</font>    
<body background-color="Powerblue" link="white" alink="blue" vlink="#F8F8FF" >  
    <br />    
               
        <font face="Lato" size="5"></font>  
                               
        
    <br /><br /><br /><br />    
    <br />    
    <br />    
    <h1 align="center">    
        <font color="#F0B27A" size="9" >    
            You are Visitor Number <?php print $visits; ?> </br>  
    </font>    
   By : Suraj Singh      
    </h1>    
    <h3 align="center">    
        <font face="Lato" color="red" size="3">    
                Environment : UAT
        </font>    
    <br /><br /><br /><br /><br /><br/><br/><br/><br/>    
    <hr width="1500px">    
    <center>    
</br></br></br></br></br></br></br></br></br> 
            <font color="#FF0000">all@copyrights 2022</font>    
    </font>    
    </b>    
    </center>    
</body>    
</html>