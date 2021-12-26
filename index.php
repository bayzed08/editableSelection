<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="custom/js/jquery-editable-select.min.js"></script>
    <link rel="stylesheet" href="custom/css/jquery-editable-select.min.css">

    <title>Editable Selection</title>
    <?php
    include("db_connect.php");
    ?>
</head>

<body>
    <div class="container">
        <br>
        <h2 align="center">Editable Select BOX using PHP MYSQL AJAX </h2>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <form id="sample_form" method="post">
                    <div class="form-group">
                        <label for="name">Enter Name: </label>
                        <input type="text" class="form-control" name="name" id="name" auto-complete="off">
                    </div>
                    <div class="form-group">
                        <label for="country">Select Country..</label>
                        <select name="country" id="country" class="form-control" auto-complete="off">
                            <?php
                            $result = $connect->query("SELECT * FROM country cc ORDER BY cc.`countryname`;");
                            foreach ($result as $row)
                                echo '<option value="' . $row[countryname] . '">' . $row[countryname] . '</option>';
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="save" id="save" name="save" class="btn">
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Country </th>
                                <th>Active</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="all.js"></script>
</body>

</html>