function wheel(wins,opts,runOpts){
    //初始化参数
    this.init(wins,opts,runOpts);
    //获取窗口
    this.getWin();
    //创建盒子
    this.creatBox();
    //创建轮播列表
    this.creatList();
    //创建按钮
    this.creatBtn();
    // //自动轮播
    this.autoRun();
    // //点击播放
    // this.clickRun();
}
wheel.prototype={
    init(wins,opts,runOpts){
            /*参数初始化 */
        this.opts=opts;
        this.runOpts=runOpts;
        var wins = document.querySelector(wins);
        var win=wins;
        if(!(wins&&wins.nodeType==1)){
            console.error("窗口元素 not find")
            return ; 
        }
        this.wins=this.win=wins;
        
        //图片地址
        opts.imgs.push(opts.imgs[0])
        //链接地址
        opts.links.push(opts.links[0])
        //图片颜色
        opts.imgColor.push(opts.imgColor[0])


        this.imgLength = opts.imgs.length;

        if(this.imgLength==0){
            console.error("没有传入相应的轮播图");
            return;
        }
        this.imgSize = opts.imgSize;
        if(!(this.imgSize instanceof Array)){
            console.error("请输入合法的尺寸类型");
        }
        if(this.imgSize.length==0){
            this.imgSize[0] = document.documentElement.clienWidth;
            this.imgSize[1] = 400;
        }
        if(this.imgSize.some(function(val){
            return val==0
        })){
            for(var i=0;i<2;i++){
                if(this.imgSize[i]==0){
                    this.imgSize[i] = 500;
                }
            }
        }
        
        this.btnColor = opts.btnColor||"green";
        this.btnActive = opts.btnActive||"red";
        this.btnPos = opts.btnPos||["center","20"] ;

        this.runOpts = runOpts || {};
        this.time=0;
        if(runOpts.time){
            this.time= runOpts.time*1000;
        }else{
            this.time = 5000;
        }

        this.eachTime = 0;
        if(runOpts.eachTime){
            this.eachTime = runOpts.eachTime *1000;
        }else{
            this.eachTime =500;
        }

        this.runStyle= null;
        if(runOpts.runStyle == "linner" || !(runOpts.runStyle))
        {
            this.runStyle = Tween.Linear;
        }else if(runOpts.runStyle == "in"){
            this.runStyle = Tween.Quad.easeIn;
        }else if(runOpts.runStyle == "out"){
            this. runStyle = Tween.Quad.easeOut;
        }

    },
    getWin(){
        this.wins.style.cssText = "width:100%;height:"+this.imgSize[1]+"px;overflow:hidden;position: relative";
    },
    creatBox(){
        this.box = document.createElement("div");
        this.box.style.cssText = "width:"+ this.imgLength * 100 +"%;height:100%;border:1px solid red;overflow:hidden"
        this.wins.appendChild(this.box);
    },
    creatList(){
        for(var i=0;i<this.imgLength;i++){
            var divList = document.createElement("div");
            divList.style.cssText = `float:left;width:${100/this.imgLength}%;height: 100%;background:${this.opts.imgColor[i]}`;
    
            var link = document.createElement("a");
            link.href = this.opts.links[i];
            link.style.cssText = "width:"+this.imgSize[0]+"px;height:"+this.imgSize[1]+"px;display:block;margin: 0 auto;background:url("+this.opts.imgs[i]+") no-repeat 0 0"
    
            divList.appendChild(link);
            this.box.appendChild(divList); 
         }
    },
    creatBtn(){
        var btnBox=document.createElement("div");
        btnBox.style.cssText="width:300px;height:20px;position:absolute;left:0;right:0;margin:auto;bottom:"+this.btnPos[1]+"px";
        var btns=[];
    
        for(var i=0;i<this.imgLength-1;i++){

            var bgcolor=i==0?this.btnActive:this.btnColor;
            var btn=document.createElement("div");
            btn.style.cssText="width:20px;height:20px;background:"+bgcolor+";border-radius:50%;margin:0 10px;cursor:pointer;float:left;"
            btnBox.appendChild(btn);
            btns.push(btn);
    
        }
        this.wins.appendChild(btnBox);
    },
    autoRun(){
        //自动轮播
        //功能没有实现，第一个错误是this.btns.length,用控制台输出时也报错，btns就没有接收到值
        //第二个错误是this.box，显示在animath那边obj的t接收不到值，在move函数外this.box可以接收到，在move函数内接收不到，试了传参但是没有实现，猜测是我方式不对 
        var winW=parseInt(getComputedStyle(this.win,null).width);
        var num = 0;
        console.log(this.box);
        console.log(tihs.btns);//not defined
        var move=function(){
            num++;
            if(num>btns.length-1){
                
                animate(this.box,{
                "marginLeft":-num*winW
            },this.eachTime,this.runStyle,function(){   
                box.style.marginLeft=0;
            })
                num=0;
            }else{
                animate(this.box,{
                    "marginLeft":-num*winW
                },this.eachTime,this.runStyle)
            }
            
            for(var i=0;i<this.btns.length;i++){
                this.btns[i].style.background=this.btnColor;
            }
            this.btns[num].style.background=this.btnActive;
        
        }

        this.t= setInterval(move, this.time)
    },
    clickRun(){
        //按钮轮播
    //和上一个功能同样的错误
    for (let i=0;i<this.btns.length;i++){
    
        btns[i].onclick=function(){
            num=i;
            
            animate(box,{
            "marginLeft":-num*winW
        },eachTime,runStyle)
        for(var j=0;j<btns.length;j++){
            btns[j].style.background=btnColor;
        }
        btns[num].style.background=btnActive;
        }
    }
    //鼠标的移入移出
    win.onmouseover=function(){
        clearInterval(t);
    }
    win.onmouseout=function(){
        t=setInterval(move, 3000)
    }
    }
}