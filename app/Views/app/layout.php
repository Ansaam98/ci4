<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front End</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="<?php echo base_url('assets/fonts/fontawesome/css/all.min.css'); ?>" rel="stylesheet">
    <!-- jquery -->
    <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <!-- DataTable -->
    <link href="<?php echo base_url('assets/css/buttons.dataTables.min.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">
    
    
    


</head>

<body>

    <?php echo view($view_file); ?>

    <!-- Popper -->
    <script src="<?php echo base_url('assets/js/popper.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <!-- Datatable -->
    <script src="<?php echo base_url('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js'); ?>"></script>
    <script src="<?php echo base_url('https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?php echo base_url('https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js'); ?>"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
</body>

</html>