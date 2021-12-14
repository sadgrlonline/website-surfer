<!DOCTYPE html>
<html>

<head>
    <title>Submit a Site</title>
    <link rel="stylesheet" href="../../css/style.css" media="all">
</head>

<body>
    <div class="container">
        <?php include "../../templates/nav.php";?>
        <div id="div_login">
            <h1>Submit a Website</h1>
            <div class="wrapper">
                <html>

                <head>
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                </head>

                <body>
                    <div id="surfSubmit">
                        <form name="websurf" action="" method="POST">
                            <div> <label for="url">URL:</label>
                                <input type="text" name="url" id="url">
                            </div>
                            <div class="cat"><label for="cat">Category:</label>
                                <select name="cat" id="cat">
                                    <option value="select">select a category</option>

                                    <option value="personal">Personal</option>
                                    <option value="healing">Healing</option>
                                    <option value="useful">Useful</option>
                                    <option value="fun">Fun</option>
                                    <option value="serious">Serious</option>
                                    <option value="social">Social</option>


                                </select><br>
                                <a id="addCat" href="#">+ Add Category</a>
                            </div>
                            <div class="newCategory">
                                <label for="newCategory">Type the new category below:</label>
                                <input type="text" class="newCategory">
                                <input name="addCategory" id="addCategory" type="submit" value="Add Category">
                            </div>
                            <div class="success">You have added a new category. <br> Find it in the dropdown above.
                            </div>
                            <div>


                                <input name="websurf" name="submit" id="submit_btn" type="submit">
                            </div>
                        </form>
                    </div>
                </body>
            </div>
        </div>
        <style>
        .wrapper {
            padding: 20px !important;

        }

        .newCategory {
            display: none;
        }

        .success {
            display: none;
        }
        </style>

        <script>
        $(document).on("click", "#addCategory", function(e) {
            e.preventDefault();
            // this grabs value from input
            var newCat = $(this).siblings('input').val();
            console.log(newCat);
            //$('.newCategory').css("display", "none");
            // this is the selectbox
            var categorySelect = $(this).parents().siblings('.cat').children('#cat');
            categorySelect.append('<option value=' + newCat + '>' + newCat + '</option>');
            $('.newCategory').css('display', 'none');
            $('.success').css('display', 'block');
            $('#cat').val("select");

            $.ajax({
                type: 'post',
                url: 'index.php',
                data: {
                    'newCat': newCat
                },
                success: function(response) {
                    console.log('success');
                }
            });

        });

        $('#addCat').on('click', function() {
            $('.success').css("display", "none");
            $('.newCategory').css("display", "block");

        });
        $("form").on("submit", function(e) {
            //console.log('test');
            var dataString = $(this).serialize();

            // alert(dataString); return false;
        });
        </script>
        </script>