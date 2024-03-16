<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <style>
            /* input {
                    border: solid red;
                    transform: translate(30px, 0px) rotate(0deg);
                    width: 140px;
                    height: 60px;
                    } */

        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form action="save" method="post" enctype="multipart/form-data">
                    @csrf
                        <lable>Name</lable>
                        <input type="text" class="form-control " name="name"><br>
                        <lable>Profile</lable><br>
                        <input type="file" class="form-control" name="profiles"><br>
                        <lable>State</lable>
                        <select class="form-control" name="state">
                            <option selected disabled>Select</option>
                            <option>Uttar Pradesh</option>
                            <option>Madhya Pradesh</option>
                            <option>Bihar</option>
                            <option>Punjab</option>
                            <option>Rajisthan</option>
                            <option>Uttar Pradesh</option>
                            <option>Uttar Pradesh</option>
                            <option>Uttar Pradesh</option>
                        </select><br>
                        <button type="submit" class="btn btn-outline-success form-control">submit</button>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </body>
</html>
<script>
    function sub(){

    }
</script>