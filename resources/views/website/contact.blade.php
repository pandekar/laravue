<html>
<head>

    <meta charset="utf-8">
    <title> laravue</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/website.css">
    
</head>

<body>
    <div id="app">

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
        </ul>

        </nav> 

        <contact-us-form></contact-us-form>
        
        <!--
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/contact-us/sendmessage" class="was-validated">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(isset($successMessage))
                        <div class="alert alert-success">
                            <p>{{ $successMessage }}</p>
                        </div>
                    @endif

                    @csrf

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" placeholder="Enter you message here" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
            </div>
        </div>
        -->

    </div>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="/js/website.js"></script>

</body>

</html>