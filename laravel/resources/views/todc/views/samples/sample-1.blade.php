<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Name: {{$name}}</div>
                
                <!-- Echoing Data If It Exists -->
                <div class="title">Name: {{isset($name) ? $name : 'Default'}}</div>
                <div class="title">Name: {{$name or 'Default'}}</div>
                
                <!-- Displaying Unescaped Data -->
                <div class="title">Name: {{!! $name !!}}</div>
            </div>
        </div>
    </body>
</html>
