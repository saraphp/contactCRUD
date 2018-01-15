
<!DOCTYPE html>
<html>
<head>
    <title>List All Contacts</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>css/kendo.common.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/kendo.rtl.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/kendo.default.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/kendo.default.mobile.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>js/kendo.all.min.js"></script>
    <script>

    </script>


</head>
<body>

<a href = "<?php echo base_url(); ?>contact/add">Add</a>



<div id="example">
    <table id="grid">
        <colgroup>
            <col />
            <col />
            <col style="width:110px" />
            <col style="width:120px" />
            <col style="width:130px" />
        </colgroup>
        <thead>
        <tr>
            <th data-field="make">First Name</th>
            <th data-field="model">Last Name</th>
            <th data-field="year">Company</th>
            <th data-field="category">Phone</th>
            <th data-field="airconditioner">Address</th>
            <th data-field="s">Country</th>
            <th data-field="b">City</th>
            <th data-field="g">Edit</th>
            <th data-field="u">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($records as $r) {?>
            <tr>
            <td > <?php echo $r->firstname ?></td >
            <td > <?php echo $r->lastname ?></td >
            <td > <?php echo $r->company ?></td >
            <td > <?php echo $r->phone ?></td >
            <td > <?php echo $r->address ?></td >
            <td > <?php echo $r->country ?></td >
            <td > <?php echo $r->city ?></td >
            <td > <a href = '<?php echo base_url()?>contact/edit/<?php echo $r->id?>'>Edit</a></td >
            <td > <a href = '<?php echo base_url()?>contact/delete/<?php echo $r->id?>'>Delete</a></td >
        </tr >
        <?php } ?>

        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $("#grid").kendoGrid({
                height: 550,
                sortable: true
            });
        });
    </script>
</div>

</body>
</html>
