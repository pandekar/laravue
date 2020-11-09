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

    <nav class="navbar nacbar-expand-sm bg-light">
        
        <ul class="navbar-nav">
        
            <li class="nav-item">
                <a class="nav-link" href="/home">Back</a>
            </li> 
        
        </ul>

    </nav>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th> 
                    <th>Was</th>
                    <th>Now</th>
                    <th>Brand</th>
                    <th>Actions</th>
                </tr>
            </thhead>
            <tbody>  
                @foreach($datas as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>
                        <td>${{$data->was_price}}</td>
                        <td>${{$data->current_price}}</td>
                        <td>{{$data->brand}}</td>
                        <td>
                            <a href="/admin/specials/{{$data->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form method="post" action="/admin/specials/{{$data->id}}">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>  
        </table>
        <a href="/admin/specials/create" class="btn btn-primary"> add new special </a>
    </div>

</body>

</html>