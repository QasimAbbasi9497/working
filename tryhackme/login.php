<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acme IT Support - Customer Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Acme IT Support</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li class="active"><a href="/customers">Customers</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav><div class="container" style="padding-top:60px">
    <h1 class="text-center">Acme IT Support</h1>
    <h2 class="text-center">Customer Login</h2>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <div class="alert alert-info text-center">
                <p>Don't have an account yet? <a href="/customers/signup">Signup here</a>.</p>
            </div>

            
            <div class="panel panel-default">
                <div class="panel-heading">Customer Login</div>
                <div class="panel-body">
                    <form method="post" action="/customers/login">
                        <div><label>Username:</label></div>
                        <div><input class="form-control" name="username"></div>
                        <div style="margin-top:7px"><label>Password:</label></div>
                        <div><input class="form-control" type="password" name="password"></div>
                        <div style="margin-top:15px;height: 30px;line-height: 30px">
                            <a href="/customers/reset">Reset Password</a>
                            <input type="submit" class="btn btn-success pull-right" style="height:30px" value="Login">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
<script src="/assets/jquery.min.js"></script>
<script src="/assets/bootstrap.min.js"></script>
<script src="/assets/site.js"></script>
</body>
</html>
<!--
Page Generated in 0.04017 Seconds using the THM Framework v1.2 ( https://static-labs.tryhackme.cloud/sites/thm-web-framework )
-->