<?php
    include('connection.php');
        $email = $_POST['em'];
        $pwd = $_POST['ps'];

        $sql = "select * from user where email = '$email' and password = '$pwd'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){
            echo  '<script>
                        window.location.href = "index2.php";
                        alert("Login successfull !!")
                    </script>';
        }  
        else{  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Invalid username or password!!")
                    </script>';
        }     
    ?> 