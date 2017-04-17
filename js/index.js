/**
 * Created by Administrator on 2017/4/17.
 */
$(function(){
    //商品的类，因为有n多商品，有共同的属性，所以封装成一个类
    var Product=function(id,name,price,img,quanity){
        this.id=id;
        this.name=name;
        this.price=price;
        this.img=img;
        this.quanity=1;

    };
    //购物车对象
    var cart={
        addCart:function(){//添加商品到购物车

          },
        removeCart:function(){//从购物车移除

        }
    };
    //商品相关功能对象
    var productComp={
        $productList:$('#product-list'),
        init:function(){
            this.loadData();//页面初始化先加载数据
            this.$productList.on('click','btn-add-cart',function(){
                var product=$(this).parents('.product-item').data('item-data');
                product.quanity=parseInt($(this).prev().val());
                cart.addCart(product);
            })
        },
        loadData:function(){
            $.get('js/data.json',{},function(data){
                for(var i=0;i<data.length;i++){
                    var product=new Product(data[i].product_id,data[i].product_name,data[i].product_price,data[i].product_img);
                    var $product=$('<li><img src="'+product.img+'" alt="">\
                                    <div class="product-info">\
                                    <h3 class="product-name">'+product.name+'</h3>\
                                <strong class="product-price">'+product.price+'</strong>\
                                <input type="text" class="quantity" value="'+product.quanity+'">\
                                    <button class="btn-add-cart">Add</button>\
                                    </div>\
                                    </li>');
                    $product.data('item-data',$product);
                    this.$productList.append($product);

                }

            }.bind(this),'json')
        },
        loadMore:function(){

        }
    };
    productComp.init();
});