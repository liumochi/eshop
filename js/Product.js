/**
 * Created by Administrator on 2017/5/7.
 */
    //商品的类，因为有n多商品，有共同的属性，所以封装成一个类
var Product=function(id,name,price,img,quantity){
        this.id=id;
        this.name=name;
        this.price=price;
        this.img=img;
        this.quantity=quantity;
    };