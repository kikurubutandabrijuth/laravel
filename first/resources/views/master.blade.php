<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #menu{
            background:#000;
        }
        #menu li a{
            color:#fff;
            text-decoration:none;
        }
    </style>
</head>

<body>
<ul id="menu">
    <li><a href="/etudiant">etudiant</a></li>
    <li><a href="{{route('paiement')}}">paiement</a></li>

</ul>

  <!-- <p>hello from master</p>   -->
@yield('contenu')
</body>
</html>