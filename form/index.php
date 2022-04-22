<!doctype html>
<html>

<head>
    <!--bootstrap 5.1 !-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>FORM</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center col-md-6 offset-md-3 my-5">
            <div class="card border-info" style="max-width: 30rem;">
                <div class="card-header bg-info text-white">
                    <h1 class="text-center">Form</h1>
                </div>
                <div class="card-body">
                    <form action="insert.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Name </label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                            <input class="form-control" type=" email" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">phoneNo </label>
                            <input class="form-control" type=" text" name="phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address </label>
                            <input class="form-control" type="text" name="address">
                        </div>
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>