/**
 * Created by Administrator on 2017/5/7.
 */
$(function(){
    loadScript('js/user.js');
    loadScript('js/model.js');
    loadScript('js/Product.js',function(){
        var cartComp={
            $cartMine:$('#cart-mine'),
            cartList:[],
            init:function(){
                var _this=this;
                this.loadData();
                this.$cartMine.on('click','.close',function(){
                    var product = $(this).parent().data('prod');
                    _this.remove(product);
                });
                this.$cartMine.on('keyup','.quantity',function(){
                    var product = $(this).parents('.cart-detail').data('prod');
                    product.quantity = parseInt(this.value);
                    _this.countTotalPrice();
                })
            },
            loadData:function () {
                $.get('product/get_cart_list',function (data) {
                    for(var i=0; i<data.cartInfo.length; i++){
                        var cartInfo = data.cartInfo[i];
                        var product = new Product(cartInfo.prod_id,cartInfo.prod_name,cartInfo.prod_price,cartInfo.thumb_img_src,cartInfo.quantity);
                        var productHtml = template('cart-tpl', product);
                        var $product = $(productHtml).data('prod',product);
                        this.$cartMine.append($product);
                        this.cartList.push(product);
                    }
                }.bind(this), 'json');
            },
            remove:function (product) {
                this.cartList.splice(this.cartList.indexOf(product),1);
                this.countTotalPrice();
                //console.log(this.cartList);
            },
            countTotalPrice:function () {
                var sum=0;
                for(var i=0;i<this.cartList.length;i++){
                    var product = this.cartList[i];
                    sum +=product.price * product.quantity;
                }
                $('#cart-price .total-price').html(sum);
            }
        };
        cartComp.init();

    });

});