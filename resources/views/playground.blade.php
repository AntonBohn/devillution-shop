<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            --gradient-100: radial-gradient(hsl(0, 0%, 5.9%), hsl(168.7, 100%, 50%));
            --gradient-200: radial-gradient(hsl(337.4, 100%, 50%), hsl(168.7, 100%, 50%));
            --the-gradient: var(--gradient-200);
            font-size: 6em;
            background: url('data:image/jpeg;base64,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'), var(--the-gradient);
            background-clip: text;
            color: transparent;
            transform: rotate(0deg);
            background-blend-mode: overlay;
        }

        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.unsplash.com/photo-1566793474285-2decf0fc182a?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDl8Sjl5clBhSFhSUVl8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
            height: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .hero-text button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            background-color: #ddd;
            text-align: center;
            cursor: pointer;
        }

        .hero-text button:hover {
            background-color: #555;
            color: white;
        }
    </style>
    <title></title>
</head>
<body>

<div class="hero-image">
    <div class="hero-text">
        <h1 style="font-size:100px">Nuke Ware Store</h1>
</body>
</html>
