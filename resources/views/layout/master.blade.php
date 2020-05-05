<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/styles.css"/>
    <style> * {
           box-sizing: border-box;
           font-family: Nunito, san-serif;
           }

    /* Remove margins and padding from the list */
    ul {
    margin: 0;
    padding: 0;
    }

    /* Style the list items */
    ul li {
    position: relative;
    background: #eee;
    font-size: 18px;
    transition: 0.2s;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    justify-content: flex-start;


    /* make the list items unselectable */
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    /* Darker background-color on hover */
    ul li:hover {
    background: #9dbddd;
    }

    ul li .task {
    flex-grow: 1;
    }

    ul li .action {
    margin: 5px 15px;
    vertical-align: middle;
    }

    ul li a {
    color: grey;
    }

    /* Style the header */
    .header {
    background-color: #f44336;
    padding: 30px 40px;
    color: white;
    text-align: center;
    }

    /* Clear floats after the header */
    .header:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Style the input */
    input {
    margin: 0;
    border: none;
    border-radius: 0;
    width: 75%;
    padding: 10px;
    float: left;
    font-size: 16px;
    }
    .nav a{
    color: #eeeeee;
    float: right;
    background-color: #f44336;
        font-family: "Arial Black";
    }
    .nav{
        width: 100%;
        background-color: #f44336;
    }

    /* Style the "Add" button */
    .addBtn {
    padding: 10px;
    width: 25%;
    background: #d9d9d9;
    color: #555;
    float: left;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
    border-radius: 0;
    border: none;
    }

    .container{
    width: 100%;

    }
    .main{
    margin: 5px;
    padding: 5px;

    }
    .success{
        margin: 5px;
        padding: 5px;
        border-radius: 5px;
        font-size: 25px;
        font-family: Century;
         text-align: center;
        color: #4065ee;
        background-color: #3bee95;
    }
    .error{
        margin: 5px;
        padding: 5px;
        border-radius: 5px;
        font-size: 25px;
        font-family: Century;
        text-align: center;
        color: #eeeeee;
        background-color: #ee254c;
    }
    .addBtn:hover {
    background-color: #bbb;
    }
    </style>

</head>
<body>

    @include('partials.navbar')

<div class="container">
    @include('notify.message')
     @yield('content')
    </div>

</body>
</html>
