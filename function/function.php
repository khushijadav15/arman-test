<?php
function upload_single_file_new($file, $target_directory)
{
    if (isset($file['name'])) {
        $image_name = $file['name'];
        $image_size = $file['size'];
        $image_tmp = $file['tmp_name'];
        $image_type = $file['type'];

        // rename the file 
        $new_file_name = $image_name;
        
        // check file type 
        if (move_uploaded_file($image_tmp, $target_directory . $new_file_name)) {
            // File was successfully uploaded, add its details to the array of uploaded images
            $response = [
                'status' => 200,
                'message' => $new_file_name,
            ];
            return $response;
        } else {
            $response = [
                'status' => 400,
                'message' => 'File is not uploaded',
            ];
            return $response;
        }
    } else {
        $response = [
            'status' => 400,
            'message' => 'No Data Found',
        ];
        return $response;
    }
}
?>