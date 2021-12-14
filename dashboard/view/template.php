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
                        <th scope='col'>edit</th>
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
                            if (confirm("Are you sure you want to delete this entry?") == true) {
                                text = "The entry has been deleted!";
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
                            } else {

                            }
                        });

                        // when the edit button is clicked...
                        $(document).on('click', '.edit', function(e) {
                            e.preventDefault();
                            console.log('hi');

                            // grab the text that's currently in the field
                            var url = $(this).parents('td').siblings('.url').text();
                            var category = $(this).parents('td').siblings('.category').text();
                            var id = $(this).attr('data-id');

                            // transform url & category fields to an input field
                            $(this).parents('td').siblings('.url').html('<input type="text" value="' +
                                url.trim() + '">');
                            $(this).parents('td').siblings('.category').html(
                                '<input type="text" value="' + category.trim() + '">');


                            // change 'edit' button to 'save'
                            $(this).parent().html('<a href="#" id="' + id + '"class="save">save</a>')
                            // trims the whitespace
                            console.log(url.trim());


                        });

                        // this is controls what happens when you click 'save'
                        $(document).on('click', '.save', function(e) {
                            e.preventDefault();
                            var newUrl = $(this).parents().siblings('.url').children('input').val();
                            var newCat = $(this).parents().siblings('.category').children('input')
                                .val();
                            var id = $(this).attr('id');
                            console.log(id);
                            console.log(newUrl);
                            console.log(newCat);

                            $(this).parents('td').siblings('.url').html(newUrl);
                            $(this).parents('td').siblings('.category').html(newCat);

                            var id = $(this).parents('td').parents('tr').attr('id');

                            $(this).parent().html('<a href="#" class="edit">edit</a>')
                            // send information to PHP with AJAX
                            $.ajax({
                                type: 'post',
                                url: 'index.php',
                                data: {
                                    'id': id,
                                    'newUrl': newUrl,
                                    'newCat': newCat
                                },
                                success: function(response) {
                                    console.log('success');
                                }
                            });
                        });


                    });
                    </script>