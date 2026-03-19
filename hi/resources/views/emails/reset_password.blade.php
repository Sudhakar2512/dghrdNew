<!DOCTYPE html>
<html>
<head>
    <title>Password Reset Link</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Inline CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #2980b9;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>नमस्ते,</p>
        <p>कृपया नीचे दिए गए बटन पर क्लिक करें या अपने पासवर्ड को रीसेट करने के लिए अपने ब्राउज़र के एड्रेस बार में लिंक को कॉपी-पेस्ट करें:</p>
        <p>
            <a href="{{ $resetLink }}" class="btn">पासवर्ड रीसेट</a>
        </p>
        <p>यदि आपने पासवर्ड रीसेट का अनुरोध नहीं किया है, तो कृपया इस ईमेल को अनदेखा करें।</p>
        <p>धन्यवाद!</p>
    </div>
</body>
</html>
