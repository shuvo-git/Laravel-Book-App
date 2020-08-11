<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="Scotch">

<title>BookWorm</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

   

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#0C9;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float{
            margin-top:22px;
        }
        #login-form{
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 30%;
            margin-right: 30%;
            background: #dff5e5;
            padding: 30px 15px 30px 15px;
            border: #15a77d solid 1px;
            border-radius: 7px;
            color: green;
            box-shadow: 2px 2px 3px #999;
        }
        #reg-form{
            margin-top: 10px;
            margin-bottom: 10px;
            background: #dff5e5;
            padding: 30px 15px 30px 15px;
            border: #15a77d solid 1px;
            border-radius: 7px;
            color: green;
            box-shadow: 2px 2px 3px #999;

        }
        #text-anim
        {font-size: 100px;}
        .text-anim
        {
            
            background-image: url('../images/bg_text22.jpg');
            background-position: center;

            color: transparent;
            -webkit-background-clip: text;

            animation: animate 20s infinite linear;
            
        }
        #text-main
        {
            /*margin-top: 100px;
            font-size: 150px;
            font-weight: bold;*/
            background-image: url('../images/bg_text.jpg');
            background-position: center;

            color: transparent;
            -webkit-background-clip: text;

            animation: animate 20s infinite linear;
            
        }

        @keyframes animate{
            /*from{
                background-position: 0 0;
            }
            to{background-position: 100% 100%; }*/

            0% {background-position: 0 0;}
            50%{background-position: 100% 100%; }
            100% {background-position: 0 0;} 
        }

        .footer{
            background-color: cadetblue;
            padding: 50px;
        }

        .greener{
            background-color: #5fa075;
            padding: 10px;
        }
    </style>


