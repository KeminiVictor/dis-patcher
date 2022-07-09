<?php 


function uploadFileRequest($file,$name,$folder){

    //change imagename to unix time stamp
    $fileName = uniqid("$name"."_");
    $fileExtension =$file->getClientOriginalExtension();
    $fileNewName = $fileName . "." . $fileExtension;
    
   $file->storeAs("public/$folder",$fileNewName);

   return "$folder/$fileNewName";

}
