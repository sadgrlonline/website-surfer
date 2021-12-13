<!DOCTYPE html>
<!-- Note: If you view this file directly in the browser (/template.php),
it CANNOT see any of the PHP variables. -->
<html>

<head>
    <title>View Sites</title>
    <link rel="stylesheet" href="../../css/style.css" media="all">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <?php include "../../templates/nav.php"?>
        <div class='contain'>
            <h1>View Websites</h1>
            <div class='table-responsive'>
                <table class='table table-striped table-hover table-sm'>
                    <tr>
                        <th scope='col'>id</th>
                        <th scope='col'>url</th>
                        <th scope='col'>category</th>
                        <th scope='col'>delete</th>
                    </tr>


                    <style>
                    .contain {
                        width: 80%;
                        margin: 0 auto;
                    }

                    td {
                        word-break: break-word;
                        min-width: 100px;
                    }
                    </style>
                    <script>
                    $(document).ready(function() {
                        $('.del').click(function(e) {
                            e.preventDefault();
                            var id = $(this).attr("data-id");
                            var $this = $(this);

                            console.log(id);
                            $.ajax({
                                type: 'post',
                                url: '?del=' + id,
                                success: function(response) {
                                    $('#' + id).hide();
                                }
                            });
                        })
                    });
                    </script>