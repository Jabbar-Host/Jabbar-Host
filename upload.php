<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_FILES['file']) && $_FILES['file']['error'] === 0) {
        $file = $_FILES['file'];
        $fileName = basename($file['name']);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // শুধুমাত্র HTML ফাইল অনুমোদিত
        if ($fileType !== 'html') {
            echo "<p style='color:red;'>Error: Only HTML files are allowed!</p>";
            exit;
        }

        // "uploads" ফোল্ডার তৈরি করুন
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // ফাইল আপলোড পাথ
        $targetFile = $uploadDir . $fileName;

        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $fileUrl = "http://" . $_SERVER['HTTP_HOST'] . "/" . $targetFile;
            echo "<p style='color:green;'>File uploaded successfully!</p>";
            echo "<p>URL: <a href='$fileUrl' target='_blank'>$fileUrl</a></p>";
        } else {
            echo "<p style='color:red;'>Error: Failed to upload file.</p>";
        }
    } else {
        echo "<p style='color:red;'>Error: No file uploaded.</p>";
    }
} else {
    echo "<p style='color:red;'>Error: Invalid request method.</p>";
}
?>
