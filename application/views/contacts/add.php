
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Add New Contact</h2>
    <div style="color:red">
        <?php   echo validation_errors();?>
    </div>
    <?php

    echo form_open('contact/store',['id'=>'contact_add']);

    ?>
        <div class="form-group">
            <label for="firstname">First Name *</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" value="<?php echo set_value('firstname'); ?>">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name *</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" value="<?php echo set_value('lastname'); ?>">
        </div>
        <div class="form-group">
            <label for="company">Company Title</label>
            <input type="text" class="form-control" id="company" placeholder="Enter company title" name="company" value="<?php echo set_value('company'); ?>">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo set_value('address'); ?>">
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" value="<?php echo set_value('country'); ?>">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" value="<?php echo set_value('city'); ?>">
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" value="<?php echo set_value('phone'); ?>">
        </div>

        <button type="submit" class="btn btn-primary" value="add">Submit</button>
       <?php echo form_close();?>
</div>

</body>
</html>
