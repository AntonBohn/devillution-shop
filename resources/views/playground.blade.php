<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    <style>
        header {
            display: flex;
            justify-content: space-between;
        }
        input {
            border-width: 1px;
            border-color: black;
            border-style: none none solid;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 200ms ease-out;
        }
        #search-animation-trigger {
            display: none;
        }
        #search-animation-trigger:checked ~ input {
            transform: scaleX(1);
        }
    </style>
    <title></title>
</head>
<body>
<header>
    <span>Logo</span>
    <h2>Nuke warez</h2>
    <label>
        <input type="checkbox" id="search-animation-trigger">
        <input type="search" placeholder="Suche">
        <label for="search-animation-trigger">Icon</label>
    </label>
</header>
</body>
</html>

