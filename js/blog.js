window.onload = function() {
    //配图
    if(screen.availWidth >540) getpostpic();
    else {
    	var im = document.getElementsByTagName("img");
    	for (i = 0; i < im.length; i++) {
        
			if (im[i].className == "post-img")
				im[i].style.display ="none";
			}
    }
    //点击了当前页,不重复加载
    
    var pcur=document.getElementById("page_current");
    if(pcur!=null)
     pcur.getElementsByTagName("a")[0].href="javascript:void(0);";

}

 function getpostpic(){ //配图
	var img_adr = {
		"url": [ "post0.jpg", "post1.jpg","post2.jpg", "post3.jpg", "post4.jpg", "post5.jpg", "post6.jpg","post7.jpg","post8.jpg","post9.jpg","post10.jpg"]
	};
    //图片列表,为保证每张图不同,图片数必须大于或等于每页最大文章数
    var st=0,f;
    var imgar = new Array();
	var img_path = "http://localhost/typecho/usr/themes/my/images/post/";
	var im = document.getElementsByTagName("img");
    i = 0; 
    //生成元素不重复的随机数组
    while(i < im.length) {
        f=0;
        st=grandom(0,img_adr.url.length-1);
        for(var j=0;j<i;j++)
            if(st==imgar[j]){
                f=1;j=i;
            }
        if(f==0){
            imgar[i]=st;
            i++;    
        }
    }
    
	for (i = 0; i < im.length; i++) {
        
		if (im[i].className == "post-img")
			im[i].src = img_path + "" + img_adr.url[imgar[i]];
	}
}
//
function grandom(under, over){

        switch(arguments.length){

        case 1: return parseInt(Math.random()*under+1);

        case 2: return parseInt(Math.random()*(over-under+1) + under);

        default: return 0;

        }
}
//获取随机数(我的)
function getrandom(){ //返回一个随机数,输入1~2个参数,只有一个参数a时返回值>[0,a],两个参数a,b返回值>[a,b] (a<b)
    var s=arguments.length; //获取参数个数
    if(s>0&&s<=2){
        var min,max,ret;
        if(s==1){ min=0; max=arguments[0]+1;} //只有一个参数时,max+1为了包含最大值
        if(s==2){
            //alert(arguments[0]+"========"+arguments[1]);
            min=arguments[0]>arguments[1]?arguments[1]:arguments[0]; max=(arguments[0]>arguments[1]?arguments[0]:arguments[1])+1;
        }  
        ret=Math.floor((Math.random()*(max*20))%max); //得到[0,max]随机数
        if(ret<min)
            ret=ret+min;  //调整范围
        return ret;
    }
    else return false;
}

//返回顶部代码
 
var obj=document.getElementById("goTopBtn");
 function getScrollTop(){
                return document.documentElement.scrollTop || document.body.scrollTop;
            }
 function setScrollTop(value){
            if(document.documentElement.scrollTop){
                    document.documentElement.scrollTop=value;
                }else{
                    document.body.scrollTop=value;
                }
                
            }    
       
window.onscroll=function(){ getScrollTop()>screen.availHeight?obj.style.display="block":obj.style.display="none"; }

obj.onclick=function(){
            var goTop=setInterval(scrollMove,10);
            function scrollMove(){
                    setScrollTop(getScrollTop()/1.2);
                    if(getScrollTop()<1)clearInterval(goTop);

                }
            }
//=======================


