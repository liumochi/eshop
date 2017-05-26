<div id="header">
    <div class="top-menu wrapper">
        <a id="login">LOGIN</a>
        <div id="cart-box">
            <a href="product/cart">
                Cart: <span id="money">
                    <?php
                    $cartInfo=$this->session->userdata('cartInfo');
                    if($cartInfo){
                        echo $cartInfo->total_price;
                    }else{
                        echo 0;
                    }
                    ?>
                </span>(<span id="quantity">
                     <?php
                     $cartInfo=$this->session->userdata('cartInfo');
                     if($cartInfo){
                         echo $cartInfo->total_quantity;
                     }else{
                         echo 0;
                     }
                     ?>
                </span>)
            </a>
            <p id="empty">empty cart</p>
        </div>
        <h1 id="logo">NEW FASHIONS</h1>
    </div>
    <ul id="nav" class="wrapper">
        <li class="main-menu"><a href="javascript:;" class="active" data-cate="0">首页</a></li>
        <li class="women main-menu">
            <a href="javascript:;" data-cate="2">女士</a>
            <div class="sub-menu">
                <div class="col">
                    <h4>SHOP</h4>
                    <ul>
                        <li><a href="">new arrivals</a></li>
                        <li><a href="products.php">men</a></li>
                        <li><a href="../../products.html">women</a></li>
                        <li><a href="../../products.html">accessories</a></li>
                        <li><a href="../../products.html">kids</a></li>
                        <li><a href="../../products.html">brands</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="../../products.html">trends</a></li>
                        <li><a href="../../products.html">sale</a></li>
                        <li><a href="../../products.html">style videos</a></li>
                        <li><a href="../../products.html">accessories</a></li>
                        <li><a href="../../products.html">kids</a></li>
                        <li><a href="../../products.html">style videos</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>PRODUCTS</h4>
                    <ul>
                        <li><a href="../../products.html">trends</a></li>
                        <li><a href="../../products.html">sale</a></li>
                        <li><a href="../../products.html">style videos</a></li>
                        <li><a href="../../products.html">accessories</a></li>
                        <li><a href="../../products.html">kids</a></li>
                        <li><a href="../../products.html">style videos</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>MY COMPANY</h4>
                    <ul>
                        <li><a href="../../products.html">trends</a></li>
                        <li><a href="../../products.html">sale</a></li>
                        <li><a href="../../products.html">style videos</a></li>
                        <li><a href="../../products.html">accessories</a></li>
                        <li><a href="../../products.html">kids</a></li>
                        <li><a href="../../products.html">style videos</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>POPULAR</h4>
                    <ul>
                        <li><a href="../../products.html">new arrivals</a></li>
                        <li><a href="../../products.html">men</a></li>
                        <li><a href="../../products.html">women</a></li>
                        <li><a href="../../products.html">accessories</a></li>
                        <li><a href="../../products.html">kids</a></li>
                        <li><a href="../../products.html">style videos</a></li>

                    </ul>
                </div>
            </div>
        </li>
        <li class="men main-menu">
            <a href="javascript:;" data-cate="1">男士</a>
            <div class="sub-menu">
                <div class="col">
                    <h4>SHOP</h4>
                    <ul>
                        <li><a href="../../men.html">new arrivals</a></li>
                        <li><a href="../../men.html">men</a></li>
                        <li><a href="../../men.html">women</a></li>
                        <li><a href="../../men.html">accessories</a></li>
                        <li><a href="../../men.html">kids</a></li>
                        <li><a href="../../men.html">brands</a></li>


                    </ul>
                </div>
                <div class="col">
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="../../men.html">trends</a></li>
                        <li><a href="../../men.html">sale</a></li>
                        <li><a href="../../men.html">style videos</a></li>
                        <li><a href="../../men.html">accessories</a></li>
                        <li><a href="../../men.html">kids</a></li>
                        <li><a href="../../men.html">style videos</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>PRODUCTS</h4>
                    <ul>
                        <li><a href="../../men.html">trends</a></li>
                        <li><a href="../../men.html">sale</a></li>
                        <li><a href="../../men.html">style videos</a></li>
                        <li><a href="../../men.html">accessories</a></li>
                        <li><a href="../../men.html">kids</a></li>
                        <li><a href="../../men.html">style videos</a></li>


                    </ul>
                </div>
                <div class="col">
                    <h4>MY COMPANY</h4>
                    <ul>
                        <li><a href="../../men.html">trends</a></li>
                        <li><a href="../../men.html">sale</a></li>
                        <li><a href="../../men.html">style videos</a></li>
                        <li><a href="../../men.html">accessories</a></li>
                        <li><a href="../../men.html">kids</a></li>
                        <li><a href="../../men.html">style videos</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>POPULAR</h4>
                    <ul>

                        <li><a href="../../men.html">new arrivals</a></li>
                        <li><a href="../../men.html">men</a></li>
                        <li><a href="../../men.html">women</a></li>
                        <li><a href="../../men.html">accessories</a></li>
                        <li><a href="../../men.html">kids</a></li>
                        <li><a href="../../men.html">style videos</a></li>

                    </ul>
                </div>
            </div>
        </li>
        <li class="main-menu"><a href="javascript:;" data-tag="1">潮人推荐</a></li>
        <li class="main-menu"><a href="javascript:;">博客</a></li>
        <li class="main-menu">
            <a href="javascript:;">关于我们</a>
            <div class="sub-menu">
                <div class="col">
                    <h4>SHOP</h4>
                    <ul>
                        <li><a href="../../shop.html">new arrivals</a></li>
                        <li><a href="../../shop.html">men</a></li>
                        <li><a href="../../shop.html">women</a></li>
                        <li><a href="../../shop.html">accessories</a></li>
                        <li><a href="../../shop.html">kids</a></li>
                        <li><a href="../../shop.html">brands</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="../../shop.html">trends</a></li>
                        <li><a href="../../shop.html">sale</a></li>
                        <li><a href="../../shop.html">style videos</a></li>
                        <li><a href="../../shop.html">accessories</a></li>
                        <li><a href="../../shop.html">kids</a></li>
                        <li><a href="../../shop.html">style videos</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>PRODUCTS</h4>
                    <ul>
                        <li><a href="../../shop.html">trends</a></li>
                        <li><a href="../../shop.html">sale</a></li>
                        <li><a href="../../shop.html">style videos</a></li>
                        <li><a href="../../shop.html">accessories</a></li>
                        <li><a href="../../shop.html">kids</a></li>
                        <li><a href="../../shop.html">style videos</a></li>

                    </ul>
                </div>
                <div class="col">
                    <h4>MY COMPANY</h4>
                    <ul>
                        <li><a href="../../shop.html">trends</a></li>
                        <li><a href="../../shop.html">sale</a></li>
                        <li><a href="../../shop.html">style videos</a></li>
                        <li><a href="../../shop.html">accessories</a></li>
                        <li><a href="../../shop.html">kids</a></li>
                        <li><a href="../../shop.html">style videos</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>POPULAR</h4>
                    <ul>
                        <li><a href="../../shop.html">new arrivals</a></li>
                        <li><a href="../../shop.html">men</a></li>
                        <li><a href="../../shop.html">women</a></li>
                        <li><a href="../../shop.html">accessories</a></li>
                        <li><a href="../../shop.html">kids</a></li>
                        <li><a href="../../shop.html">style videos</a></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>