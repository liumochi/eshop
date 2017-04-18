/**
 * Created by Administrator on 2017/4/17.
 */
$(function(){
    //商品的类，因为有n多商品，有共同的属性，所以封装成一个类
    var Product=function(id,name,price,img,quantity){
        this.id=id;
        this.name=name;
        this.price=price;
        this.img=img;
        this.quantity=1;

    };
    //购物车对象
    var cart={
        totalAmount:0,
        totalQuantity:0,
        productList:[],
        addCart:function(product){//添加商品到购物车
            this.productList.push(product);
            this.totalQuantity+=product.quantity;
            this.totalAmount+=product.quantity*product.price;
            productComp.render();
          },

        removeCart:function(){//从购物车移除

        }
    };
    //商品相关功能对象
    var productComp={
        $loading:$('#loading'),
        $productList:$('#product-list'),
        $loadMore:$('#load-more'),
        isLoaded:true,
        init:function(){
            var _this=this;

            this.loadData();//页面初始化先加载数据

            this.$productList.on('click','.btn-add-cart',function(){

                var product=$(this).parents('.product-item').data('item-data');
                //console.log($(this).parents('.product-item'));
                product.quantity=parseInt($(this).prev().val());
                cart.addCart(product);
            });
            this.$loadMore.on('click',function(){
                _this.loadMore();
            });
        },
        render:function(){
            $('#quantity').html(cart.totalQuantity);
            $('#money').html(cart.totalAmount);
        },
        loadData:function(){
            this.$loading.show();
            $.get('js/data.json',{},function(data){
                for(var i=0;i<data.length;i++){
                    var product=new Product(data[i].product_id,data[i].product_name,data[i].product_price,data[i].product_img);
                    // var $product=$('<li class="product-item"><img src="'+product.img+'" alt="">\
                    //                 <div class="product-info">\
                    //                 <h3 class="product-name">'+product.name+'</h3>\
                    //             <strong class="product-price">'+product.price+'</strong>\
                    //             <input type="text" class="quantity" value="'+product.quantity+'">\
                    //                 <button class="btn-add-cart">Add</button>\
                    //                 </div>\
                    //                 </li>');
                    // $product.data('item-data',product);
                    var productHtml=template('product-tpl',product);
                    var $product=$(productHtml);
                    $product.data('item-data',product);
                    this.$productList.append($product);
                }
                this.$loading.hide();
                this.$loadMore.show();
                this.isLoaded=true;
            }.bind(this),'json')
        },
        loadMore:function(){
            if(this.isLoaded){
                this.isLoaded=false;
                this.loadData();
            }
        }
    };
    productComp.init();
});