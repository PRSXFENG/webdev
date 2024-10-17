<?php
if (isset($_POST['submit']) && $_POST['submit'] == 'Upload File')
{
  if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['fileUpload']['tmp_name'];
    $fileName = $_FILES['fileUpload']['name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileType = $_FILES['fileUpload']['type'];
    $fileNameCmps = explode(".",$fileName); //eg me.jpg -> {"me","jpg"}
    $fileExtension = strtolower(end($fileNameCmps)); //end() get array last element eg jpg
 
    //sanitize file-name
    #$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
 
    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf');
 

    if (in_array($fileExtension, $allowedfileExtensions))//in_array() - check if a value exist in array
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = "uploads/";
      $dest_path = $uploadFileDir . $fileName; 
      #$dest_path = $uploadFileDir . $newFileName;
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['fileUpload']['error'];
  }
  echo  $message;

}




?>