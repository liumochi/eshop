/**
 * Created by Administrator on 2017/5/8.
 */
function loadScript(url,callback){
    var script = document.createElement('script');
    script.onload = function(){
        callback && callback();
    };//onload写在前面
    script.src=url;
    script.async='async';
    document.getElementsByTagName('head')[0].appendChild(script);
}