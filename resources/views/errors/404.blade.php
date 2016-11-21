<!DOCTYPE html>
<html>
    <head>
        <title>Page Not Found.</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="/dist/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="/css/asset/mdb-css/css/mdb.min.css">

        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family : 'Raleway', sans-serif;
                background: url(/img/cloud.jpg);
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

            .tombol{
                padding-top: 100px;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }

            .teks{
                font-weight: 100px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="content">
            <h1 style="color:white; font-size: 200px; font-weight: bold;">404</h1>
            <div class="title" style="color:white;">Oops .. pages not found :(</div>
                 <div class="tombol">
                    <a href="{{ url('/') }}" class="btn btn-primary-outline" style="width: 200px; height: 60px; padding-top: 8px; font-size:200%; border-radius: 50px; text-decoration: none; border:2px solid; border-color: white;">
                        <p style="color: white;">
                          <span class="glyphicon glyphicon-chevron-left"></span> 
                            Back
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>