<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sodesa Logistic</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Montserrat, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
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

    <div class="message">
        <h3>Has recibido un mensaje de contacto</h3>
        <p><b>De:</b> {{ $requester['name'] }},</p>
        <p><b>Correo:</b> {{ $requester['email'] }}</p>
        @if(isset($requester['phone']))
            <p><b>Teléfono:</b> {{ $requester['phone'] }}</p>
        @endif
        {{--        If Subject, add Subject--}}
        @if(isset($requester['subject']))
            <p><b>Asunto:</b> {{ $requester['subject'] }}</p>
        @endif
        <p>
            {{ $requester['message']  }}
        </p>
    </div>

</div>
</body>

</html>
