<!DOCTYPE html>
<html lang="en">
    <head>
        <title>404 Page Not Found</title>
        <style type="text/css">
            ::selection{ background-color: #E13300; color: white; }
            ::moz-selection{ background-color: #E13300; color: white; }
            ::webkit-selection{ background-color: #E13300; color: white; }
            body {
                background-color: #7F9FD8;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #fff;
            }

            a {
                color: #fff;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #fff;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #container {
                border: 1px solid rgb(208, 208, 208);
                border-radius: 5px 5px 5px 5px;
                margin: 0px auto;
                width: 270px;
                text-align: center;
                box-shadow: 0px 0px 5px 1px whitesmoke;
                
            }

            p {
                margin: 12px 15px 12px 15px;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <h1>!!! <?php echo $heading; ?> !!!</h1>
            <?php echo $message; ?>
        </div>
    </body>
</html>