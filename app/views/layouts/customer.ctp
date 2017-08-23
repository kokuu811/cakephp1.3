<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title><?php echo $title_for_layout?></title>

    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php echo $scripts_for_layout ?>
    
</head>
<body>

    <div id="header">
        <div id="menu">
            <div class="">
                <div class="container">               
                    <div class="pull-right auto-width-right">
                        <ul class="top-details menu-beta l-inline">
                            <li><a href="#"><i class="fa fa-user"></i>Hướng dẫn</a></li>
                            <li><a href="#">Kiểm tra đơn hàng</a></li>
                            <li><a href="wishlist.html">Yêu thích </a></li>
                            <li><a href="#">Mở shop</a></li>
                            <li>
                                <?php
                                    if($this->Session->check("session")){//kiểm tra có session hay không
                                        $username = $this->Session->read('session');
                                        echo $username . " | " . $this->Html->link("Logout", array('controller' => 'users', 'action' => 'logout'));
                                    }else{
                                        echo $this->Html->link("Login", array('controller' => 'users', 'action' => 'login'));
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div> <!-- .container -->
            </div>
        </div>
    </div>

    <div class="rev-slider">
        <?php echo $content_for_layout ?>
    </div>

    <div id="footer">...</div>
       
    
</body>
</html>
