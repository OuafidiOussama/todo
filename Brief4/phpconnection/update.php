<?php 

    include 'connection.php';

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
                $id =$_POST['id'];
                $imageName = $_POST['logoSrc'];
                $imagepath = '../clubs_image/' . $imageName;
                unlink( $imagepath );
                
                
                $sql = "UPDATE clubs Set name='$club',logoSrc='$fileNameNew' ,date ='$date' , discription ='$discription' WHERE idclubs=$id";
                mysqli_query($conection,$sql);

                 header('Location: ../AdminPage.php');
            

            }else{
                    echo "failed to upload the image";
                }

        } else{
        echo "type of file not suported";
        echo $fileActualExt;
        }

    

?>