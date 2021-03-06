<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/faviconsBLP/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/faviconsBLP/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/faviconsBLP/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/faviconsBLP/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/faviconsBLP/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/faviconsBLP/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/faviconsBLP/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/faviconsBLP/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/faviconsBLP/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/faviconsBLP/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/faviconsBLP/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/faviconsBLP/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/faviconsBLP/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/faviconsBLP/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patient Search</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/BLP/assets/blp/jquery-1.11.1.min.js.download"></script>
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="http://localhost/BLP/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
    <style type="text/css">
        button.btn.add::before {
            font-family: fontAwesome;
            content: "\f067\00a0";
        }

        button.btn.excel::before {
            font-family: fontAwesome;
            content: "\f1c3\00a0";

        }
    </style>

</head>

<body>
    <div class="main">
        <div class="container">
            <br />
            <h2 align="center">Search Patient</h2><br />
            <div class="form-group">
                <div class="input-group">
                    <input type="text" style="margin:0px auto; display:block;" name="search_text" id="search_text" placeholder="Search by Patient Details" class="form-control; valid" />
                </div>
            </div>
            <table>
                <tr>
                    <button name="new_patient" id="new_patient" class="btn add fa-2x btn-success" style="margin-left: 375px;" onclick="location.href='form_1.php';"> Add Patient</button>
                    <form method="post" action="export.php">
                        <button type="submit" name="export" style="margin-left: 50px;" class="btn excel fa-2x btn-success"> Export to Excel</button>
                    </form>
                </tr>
            </table>
            <br />
            <div id="result"></div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            load_data();

            function load_data(query) {
                $.ajax({
                    url: "../assets/php/search2.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            }

            $('#search_text').keyup(function() {
                var search = $(this).val();
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
        });
    </script>
</body>

</html>