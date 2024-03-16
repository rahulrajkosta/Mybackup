<html>

<head>
    <title>Data Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            a{
                text-decoration:none;
                
            }
            .fa{
                font-size:30px;
                font-weight:bold;
            }
        </style>
</head>

<body>

    <h2>All Data Display In Database</h2>
    <a href="/" class="fa fa-plus text-success"></a>
    <br /><br />
    <table class="table table-bordered table-hover">
        <tr class="table-dark">
            <th>Id</th>
            <th>Name</th>
            <th>State</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach($filedata as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['state']}}</td>
            <td>{{$item['created_at']}}</td>
            <td>{{$item['updated_at']}}</td>
            <td><img src="profiles/{{$item['profile']}}" height="100px" width="100px" /></td>
            <td>
                <a href="/delete/{{$item['id']}}" class="fa fa-trash"></a>
                <a href="/update/{{$item['id']}}" class="fa fa-edit"></a>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>