<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact mail</title>

    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="message " >
            <p style="margin: auto">
                <b>Name : </b> {{ $data['name'] }}
            </p>
            <p style="margin: auto">
                <b>Email : </b> {{ $data['email'] }}
            </p>
            <p style="margin: auto">
                <b>Subject : </b> {{ $data['subject'] }}
            </p>
            <p style="margin: auto">
                <b>Message : </b> {{ $data['message'] }}
            </p>
        </div>

    </div>
</body>
</html>
