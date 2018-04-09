<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h2 class="text-center">Upload File</h2>
                <form method="POST" action="upload.php">
                    
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="submit" name="btnUpload" class="btn btn-primary" value="Upload">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>