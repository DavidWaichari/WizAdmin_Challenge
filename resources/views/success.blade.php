<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Bootstrap default background color */
        }

        .success-container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff; /* White background color */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .success-icon {
            font-size: 80px;
            color: #28a745; /* Bootstrap success color */
            margin-bottom: 20px;
        }

        .success-message {
            font-size: 24px;
            color: #28a745; /* Bootstrap success color */
            margin-bottom: 20px;
        }

        .back-to-home {
            font-size: 18px;
            color: #007bff; /* Bootstrap primary color */
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="success-container">
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>

        <div class="success-message">
            <p>Details saved successfully!</p>
        </div>

        <a href="{{ url('/') }}" class="back-to-home">Back to Home</a>
    </div>

    <!-- Bootstrap JS and Font Awesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
</body>

</html>
