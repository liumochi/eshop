/**
 * Created by Administrator on 2017/4/17.
 */
$(function(){
    var prodComp = (function(){
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
                $.get('product/add_cart',{
                    id:product.id,
                    quantity:product.quantity
                },function(data){
                    if(data>0){
                        alert('ok');
                    }else{
                        alert('fail');
                    }
                },'json');


                //this.productList.push(product);
                this.totalQuantity+=product.quantity;
                this.totalAmount+=product.quantity*product.price;
                productComp.render();
            },

            removeCart:function(){//从购物车移除
                //console.log(111);
                this.productList=[];
                this.totalAmount=0;
                this.totalQuantity=0;
                productComp.render();
            }
        };
        //商品相关功能对象
        var productComp={
            $loading:$('#loading'),
            $productList:$('#product-list'),
            $loadMore:$('#load-more'),
            $empty:$('#empty'),
            isLoaded:true,
            isEnd:false,
            pageNo:1,
            init:function(){
                var _this=this;

                this.loadData();//页面初始化先加载数据

                this.$productList.on('click','.btn-add-cart',function(){
                    user.checkLogin(function(){
                        console.log(111);
                    },function(){
                        model.show(function(){
                           alert('成功添加购物车');
                        });
                    });
                    var product=$(this).parents('.product-item').data('item-data');
                    //console.log($(this).parents('.product-item'));
                    product.quantity=parseInt($(this).prev().val());
                    cart.addCart(product);
                });
                this.$loadMore.on('click',function(){
                    _this.loadMore();
                });
                this.$empty.on('click',function(){
                    cart.removeCart();
                });
            },
            render:function(){
                $('#quantity').html(cart.totalQuantity);
                $('#money').html(cart.totalAmount);
            },
            loadData:function(option){
                var param=$.extend({page:this.pageNo},option);
                this.$loading.show();
                $.get('product/get_products',param,function(data){
                    for(var i=0;i<data.products.length;i++){
                        var products=data.products;
                        var product=new Product(products[i].prod_id,products[i].prod_name,products[i].prod_price,products[i].prod_img);
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
                    this.isEnd=data.isEnd;
                }.bind(this),'json')
            },
            loadMore:function(){
                if(this.isEnd){
                    alert('没有数据了！');
                    return;
                }
                if(this.isLoaded){
                    this.pageNo++;
                    this.isLoaded=false;
                    this.loadData({
                        cateId:navComp.categoryId,
                        tagId:navComp.tagId
                    });
                }
            },
            clear:function(){
                this.$productList.empty();
            }
        };
        return productComp;
    })();
    prodComp.init();
//导航功能；
    var navComp = (function () {
        var navComp={
            init:function () {
                $('#nav .main-menu > a').on('click',function(){
                    navComp.categoryId = $(this).data('cate');
                    navComp.tagId = $(this).data('tag');
                    prodComp.clear();
                    prodComp.loadData({
                        cateId:navComp.categoryId,
                        tagId:navComp.tagId
                    });
                });
            }
        };
        return navComp;
    })();
    navComp.init();
});