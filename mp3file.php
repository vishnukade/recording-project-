<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if file uploaded through the form
    if (isset($_FILES['input_file'])) {
        $uploadedFile = $_FILES['input_file'];
        
        // Example: Move the uploaded file to a directory
        $uploadDirectory = 'uploads/';
        $uploadedFilePath = $uploadDirectory . basename($uploadedFile['name']);
        
        if (move_uploaded_file($uploadedFile['tmp_name'], $uploadedFilePath)) {
            // File upload successful, you can process the uploaded file further if needed
            
            // Example: Output the uploaded file path
            echo "File uploaded successfully: $uploadedFilePath";
            // Handle further processing if necessary
        } else {
            // Error handling for file upload failure
            echo "Failed to upload file.";
        }
    }
    
    // Check if audio data sent through JavaScript
    if (isset($_FILES['audio'])) {
        $uploadedAudio = $_FILES['audio'];
        
        // Example: Move the uploaded audio to a directory
        $uploadDirectory = 'uploads/';
        $uploadedAudioPath = $uploadDirectory . basename($uploadedAudio['name']);
        
        if (move_uploaded_file($uploadedAudio['tmp_name'], $uploadedAudioPath)) {
            // Audio upload successful, you can process the uploaded audio further if needed
            
            // Example: Output the uploaded audio path
            echo "Audio uploaded successfully: $uploadedAudioPath";
            // Handle further processing if necessary
        } else {
            // Error handling for audio upload failure
            echo "Failed to upload audio.";
        }
    }
} else {
    // Handle invalid or unsupported requests
    http_response_code(405); // Method Not Allowed
    echo "Method Not Allowed";
}
?>

