<?php/ In view create a file json_view.php and paste this content

// RFC4627-compliant header
header('Content-type: application/json');

// Encode data
if(isset($response)) {
    echo json_encode($response);
}
else
    echo json_encode(array('error' => true));