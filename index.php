<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email PhpMailer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <!-- StartMain block -->

    <div class="container">

        <!-- Start Row -->

        <div class="row row_container">

            <div class="col-md-5 w-50 m-4 mx-auto rounded border">

                <form method="POST" action="send.php">
                    <div class="form-group">
                        <label for="mailto">Mail to </label>
                        <input type="email" id="mailto" name="mailto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="theme">Theme</label>
                        <input type="text" name="theme" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" rows="3" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" onclick="return confirmer();">SEND</button>
                    </div>

                    <div class="form-group">
                    </div>
                </form>

            </div>

        </div>
        <!-- Start Row -->

    </div>
    <!-- StartMain block -->


</body>

<script type="text/javascript">
    
    const confirmer = () => {
        return confirm('Do you want to send this email ?');
    }

</script>
<style type="text/css">
    
    /* Form Styles */
    .rounded {
        background-color: sienna;
        box-shadow: 0px 0px 5px 0px;
    }
    
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
