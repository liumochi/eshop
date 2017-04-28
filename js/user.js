/**
 * Created by Administrator on 2017/4/28.
 */
var user=(function(){
    return {
        checkLogin:function(success,fail){
            $.get('welcome/check_login',function (data) {
                if(data == 'logined'){
                    //登陆成功
                    success();
                }else{
                    //登陆失败
                    fail();

                }
            },'text');
        }
    }
})();