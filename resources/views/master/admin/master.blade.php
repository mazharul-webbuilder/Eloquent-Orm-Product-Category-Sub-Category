<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light  bg-light shadow">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav mx-auto">
            <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-target="#dropdown">Category</a>
                <ul class="dropdown-menu" id="dropdown">
                    <li><a href="{{route('category.add')}}" class="dropdown-item">Category Add</a></li>
                    <li><a href="{{route('category.manage')}}" class="dropdown-item">Category Manage</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="" class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" data-bs-target="#dropdown2"> Sub Category</a>
                <ul class="dropdown-menu" id="dropdown2">
                    <li><a href="{{route('sub_category.add')}}" class="dropdown-item">Sub Category Add</a></li>
                    <li><a href="{{route('sub_category.manage')}}" class="dropdown-item">Sub Category Manage</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

@yield('body')
<script src="{{asset('/')}}assets/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.js"></script>
</body>
</html>
