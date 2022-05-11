<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            padding: 20px;
        }
        #header, #footer{
            background-color: silver;
        }
        #main{
            display: flex;
        }
        #mainleft{
            
            width: 20%;
            background-color: whitesmoke;
        }
        #mainright{
            width: 80%;
            background-color: blueviolet;
        }
    </style>
</head>
<body>
    <div id="header"></div>
    <div id="main">
        <div id="mainleft">
            <h1>Gavin meme</h1>
        </div>
        <div id="mainright">
            <?php require_once "./mvc/views/options/".$data['option'].".php";?>
        </div>
    </div>
    <div id="footer"></div>
</body>
</html>