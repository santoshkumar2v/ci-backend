
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <header class="bg-dark p-3 d-flex">
        <a class="nav-link text-white" href="<?php echo base_url('index.php/home') ?>">Home</a>
        <a class="nav-link text-white" href="<?php echo base_url('index.php/file-upload') ?>">file-upload</a>
    </header>
    <h3 class="text-primary mt-2">Crud Operations</h3>
    <div class="container mt-5">
      
        <div class="row">
            <div class="col-md-6">
               <form action="save">
                   <div class="form-group">
                    <label for="name">Name :</label>
                        <input class="form-control" type="text" id="name" name="name">
                   </div>
                   <div class="form-group">
                    <label for="age">Age :</label>
                        <input class="form-control" type="text" id="age" name="age">
                   </div>
                   <div class="form-group">
                    <label for="address">Address :</label>
                        <input class="form-control" type="text" id="address" name="address">
                   </div>
                   <div class="form-group">
                    <label for="mobile">Mobile :</label>
                        <input class="form-control" type="text" id="mobile" name="mobile">
                   </div>
                   <div class="form-group mt-2">
                        <input type="submit" value="Add" class="btn btn-primary">
                   </div>
               </form>
            </div>
        </div>
    </div>
</body>
</html>