<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP MVC skeleton</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap-theme.min.css">-->
        <script src="<?php echo URL; ?>public/js/jquery-2.0.3.min.js"></script>
        <style>
            body{
                background-color: silver;
            }
            .navbar{
                border-radius: 0;
            }
            section{
                background-color: white;
                padding: 5px 30px 20px;
            }
            #detail th{
                width: 100px;
            }
            .span{
                width: 20px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">PHP MVC</a>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
