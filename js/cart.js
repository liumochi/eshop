/**
 * Created by Administrator on 2017/5/5.
 */
$(function(){
    var cartList = (function(){
        //购物车详情类
        var CartDetail = function(detail){
            this.img=detail.img;
            this.name=detail.name;
            this.price=detail.price;
            this.quantity=detail.quantity;
        }
        var cartComp={
            init:function(){
                //获取购物车列表
                $.get('product/get_cart_list', null, function (data) {
                    for(var i=0; i<data.cartInfo.length; i++){
                        var cartInfo = data.cartInfo[i];
                        var detail = {
                            img : cartInfo.img_src,
                            name : cartInfo.prod_name,
                            price : cartInfo.prod_price,
                            quantity : cartInfo.quantity
                        };
                        var carDetail = new CartDetail(detail);
                        var carDetailHtml = template('cart-tpl', carDetail);
                        $("#cart-mine").append(carDetailHtml);
                    }
                }.bind(this), 'json');
            }
        };
        return cartComp;
    })();
    cartList.init();
});
