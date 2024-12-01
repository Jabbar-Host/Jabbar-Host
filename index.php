<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free HTML Hosting</title>
    <style>
        /* বেসিক স্টাইল */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6dd5ed, #2193b0);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .upload-container {
            background: #ffffff;
            color: #333;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            text-align: center;
            width: 400px;
        }
        .upload-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .upload-container h2 {
            font-size: 20px;
            color: #555;
            margin-bottom: 20px;
        }
        input[type="file"] {
            margin: 20px 0;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .info-banner {
            margin: 10px 0;
            font-size: 16px;
            font-weight: bold;
            color: #ff5722;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
        }
        .footer a {
            text-decoration: none;
            color: #007BFF;
        }
        .footer a:hover {
            color: #0056b3;
        }
        .tagline {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h1>Welcome to Free HTML Hosting</h1>
        <h2>Upload Your HTML Files Quickly</h2>
        <div class="info-banner">
            Free Webhost Html | Free Hosting Unlimited | Hoisting
        </div>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" accept=".html" required>
            <br>
            <button type="submit" name="upload">Upload Now</button>
        </form>
        <div class="footer">
            <p>Powered By <a href="https://t.me/JABBAR_YT" target="_blank">Jabbar-YT</a> & <a href="https://t.me/All_In_BD" target="_blank">All-In-BD</a></p>
            <p class="tagline">Your trusted platform for hosting HTML files!</p>
        </div>
    </div>
</body>
</html>
