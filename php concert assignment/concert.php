<?php

$seats = array(
    "A1","A2","A3","B1","B2","B3","C1","C2","C3"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Assignment by Pathompong Phongsaporamut</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <form method="POST" action="concertResult.php">
            <div class="form-group">
                <div class="row">
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="A1" id="A1" name="A1">
                        <label class="form-check-label" for="A1">
                            A1
                        </label>
                    </div>
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="A2" id="A2" name="A2">
                        <label class="form-check-label" for="A2">
                            A2
                        </label>
                    </div>
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="A3" id="A3" name="A3">
                        <label class="form-check-label" for="A3">
                            A3
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="B1" id="B1" name="B1">
                        <label class="form-check-label" for="B1">
                            B1
                        </label>
                    </div>
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="B2" id="B2" name="B2">
                        <label class="form-check-label" for="B2">
                            B2
                        </label>
                    </div>
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="B3" id="B3" name="B3">
                        <label class="form-check-label" for="B3">
                            B3
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="C1" id="C1" name="C1">
                        <label class="form-check-label" for="C1">
                            C1
                        </label>
                    </div>
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="C2" id="C2" name="C2">
                        <label class="form-check-label" for="C2">
                            C2
                        </label>
                    </div>
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="C3" id="C3" name="C3">
                        <label class="form-check-label" for="C3">
                            C3
                        </label>
                    </div>
                </div>
                <div class="row my-3">
                    <button type="submit" class="btn btn-primary">Buy now!</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>