<html>
<head>
    <meta charset="utf-8">
    <title> laravue</title>

    <!-- CSS -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/website.css">

    

</head>

<body>
    <div id="app">

    <nav class="navbar nacbar-expand-sm bg-light">
        
        <ul class="navbar-nav">
        
            <li class="nav-item">
                <a class="nav-link" href="/admin/specials">Back</a>
            </li> 
        
        </ul>

    </nav>

    <!-- <create-specials></create-specials> -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="/admin/specials/{{$special->id}}" class="was-validated"> 
                        <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" value="{{$special->name}}" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Brand:</label>
                            <input type="text" value="{{$special->brand}}" class="form-control" id="brand" placeholder="Enter name" name="brand" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Description:</label>
                            <textarea class="form-control" id="description" placeholder="Enter you message here" name="description" required>{{$special->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">was price:</label>
                            <input step="0.01" value="{{$special->was_price}}" type="number" class="form-control" id="was" placeholder="Enter name" name="was" required>
                        </div>
                        <div class="form-group">
                            <label for="name">current price:</label>
                            <input step="0.01" value="{{$special->current_price}}" type="number" class="form-control" id="current" placeholder="Enter name" name="current" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info">Save changes</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="/js/website.js"></script>
</body>

</html>