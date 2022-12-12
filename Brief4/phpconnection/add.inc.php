<?php 

    include 'connection.php';

    if(isset($_POST['submit'])){
        $file = $_FILES['Club_Image'];
        $fileTemp = $file['tmp_name'];
        $filename = $file['name'];
        $fileError = $file['error'];
        $fileExt = explode('.', $filename);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png','jfif');

        if(in_array($fileActualExt , $allowed)){
            if($fileError === 0 ){
                $fileNameNew = uniqid('', true) . ".".$fileActualExt;
                $fileDestination = '../clubs_image/' . $fileNameNew;
                move_uploaded_file($fileTemp, $fileDestination);
                $club = $_POST['Club_Name'];
                $date = $_POST['Date_Of_Creation'];
                $discription = $_POST['Description'];
                
                $sql= "INSERT INTO clubs( name,logoSrc, date , discription) 
                VALUES ('$club','$fileNameNew','$date','$discription');";
                mysqli_query($conection,$sql);
                header("Location:../AdminPage.php?imageuploaded");
            }else{
                    echo "failed to upload the image";
                }

        } else{
        echo "type of file not suported";
        echo $fileActualExt;
        }

    }
    
?>