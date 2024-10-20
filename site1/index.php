<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Landing Page</h1>
    </header>
    <div class="container">
        <h2>Hello, World!</h2>
        <p>This is a simple landing page created using PHP. You can modify this template to suit your needs.</p>
        <p>Feel free to add more content and customize the design!</p>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Landing Page</p>
    </footer>
</body>
</html>
