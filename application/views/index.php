<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <base href="<?php site_url();?>">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/index.css"/>

</head>
<body style="height:2000px">
    <?php include 'header.php'?>
    <div id="categoires" class="wrapper">
        <a href="#">
            <div class="fashion-a sections">
                <h4>Fashion</h4>
                <p>dignissim</p>
            </div>
        </a>
        <a href="#">
            <div class="fashion-b sections">
                <h4>Beauty</h4>
                <p>fermentum</p>
            </div>
        </a>
        <a href="#">
            <div class="fashion-c sections">
                <h4>Creativity</h4>
                <p>vulputate</p>
            </div>
        </a>
    </div>
    <div id="product" class="wrapper">
        <ul id="product-tags">
            <li>Best seller</li>
            <li>Popular</li>
            <li>New Arrivals</li>
        </ul>
        <div id="loading">
            <img src="img/loading.gif" alt="">
        </div>
        <ul id="product-list">
            <!--<li><img src="uploads/products/bs1.jpg" alt="">-->
                <!--<div class="product-info">-->
                    <!--<h3 class="product-name">BELLE B&W</h3>-->
                    <!--<strong class="product-price">$187.95</strong>-->
                    <!--<input type="text" class="quantity" value="1">-->
                    <!--<button class="btn-add-cart">Add</button>-->
                <!--</div>-->
            <!--</li>-->
            <!--<li><img src="uploads/products/bs2.jpg" alt="">-->
                <!--<div class="product-info">-->
                    <!--<h3 class="product-name">CLUBYORK</h3>-->
                    <!--<strong class="product-price">$187.95</strong>-->
                    <!--<input type="text" class="quantity" value="1">-->
                    <!--<button class="btn-add-cart">Add</button>-->
                <!--</div>-->
            <!--</li>-->
            <!--<li><img src="uploads/products/bs3.jpg" alt="">-->
                <!--<div class="product-info">-->
                    <!--<h3 class="product-name">ROADSTER</h3>-->
                    <!--<strong class="product-price">$220.95</strong>-->
                    <!--<input type="text" class="quantity" value="1">-->
                    <!--<button class="btn-add-cart">Add</button>-->
                <!--</div>-->
            <!--</li>-->
        </ul>
        <div id="load-more">
            加载更多商品...
        </div>
    </div>
    <?php include 'dialog.php';?>
    <script id="product-tpl" type="text/html">
        <li class="product-item">
            <a href="product/detail/{{id}}"><img src="{{img}}" alt=""></a>
            <div class="product-info">
                <h3 class="product-name">{{name}}</h3>
                <strong class="product-price">${{price}}</strong>
                <input type="text" class="quantity" value="{{quantity}}">
                <button class="btn-add-cart">Add</button>
            </div>
        </li>
    </script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/template.js"></script>
    <script src="js/user.js"></script>
    <script src="js/model.js"></script>
    <script src="js/index.js"></script>
</body>
</html>