<html>
<head>
    <meta charset="utf-8">
    <title> laravue</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>

<body>

    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-light">

    <!-- Links -->
    <ul class="navbar-nav">
    @foreach($pages as $page)
        <li class="nav-item">
            <a class="nav-link" href="/page/{{ $page->id }}">{{$page->name}}</a>
        </li>
    @endforeach
        <li class="nav-item">
            <a class="nav-link" href="/contact-us">contact us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/specials">add/edit/remove specials</a>
        </li>
    </ul>

    </nav>

    <div class="row">
            @foreach($specials as $special)
            <div class="col-md-4">
                <div style="text-align: center">
                    <h4>{{$special->name}}</h4>
                    <p>{{$special->was_price}}</p>
                    <p>{{$special->current_price}}</p>
                    <a href="/special/{{$special->id}}">Click here to view special</a>
                </div>
            </div>
            @endforeach 
    </div> 

    <div>
        {{$pageDetail->description}}
    </div>

</body>

</html>