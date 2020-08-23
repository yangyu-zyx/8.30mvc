<?php
namespace libs;
class code{
    public $type="png";
    public $width=160;
    public $height=50;
    public $codeLen=4;
    public $seed="abcdefhjkmnprstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ345678";
    public $fontSize=array("min"=>20,"max"=>35);
    public $fontAngle=array("min"=>-15,"max"=>15);
    public $lineNum=array("min"=>2,"max"=>4);
    public $lineWidth=array("min"=>1,"max"=>2);
    public $pixNum=array("min"=>50,"max"=>100);
    private function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->setColor());
    }
    private function setColor($type="background"){
        $r=$type=="background"?mt_rand(20,140):mt_rand(150,200);
        $g=$type=="background"?mt_rand(20,140):mt_rand(150,200);
        $b=$type=="background"?mt_rand(20,140):mt_rand(150,200);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    private function getText(){
        $str="";
        for($i=0;$i<$this->codeLen;$i++){
            $str.=$this->seed[mt_rand(0,strlen($this->seed)-1)];
        }
        return $str;
    }
    private function setText(){
        $str=$this->getText();
        $this->str=strtolower($str);
        for($i=0;$i<$this->codeLen;$i++){
            $size=mt_rand($this->fontSize["min"],$this->fontSize["max"]);
            $angle=mt_rand($this->fontAngle["min"],$this->fontAngle["max"]);
            $space=$this->width/($this->codeLen*2+1);
            $box=imagettfbbox($size,$angle,"D:\WampServer\www/2006\MVC\application\static/font/demo.TTF",$str[$i]);
            imagettftext($this->image,$size,$angle,mt_rand(max($space*($i*2-1)+5,0),$space*($i*2+1)-5),($box[0]-$box[7])+mt_rand(0,$this->height-($box[0]-$box[7])),$this->setColor(),"D:\WampServer\www/2006\MVC\application\static/font/demo.TTF",$str[$i]);
        }
    }
    private function setLine(){
        $num=mt_rand($this->lineNum["min"],$this->lineNum["max"]);
        for($i=0;$i<$num;$i++) {
            $x1 = mt_rand(0, ($this->width) / 2);
            $x2 = mt_rand(($this->width) / 2, $this->width);
            $y1 = mt_rand(0, ($this->height) / 2);
            $y2 = mt_rand(($this->height) / 2, $this->height);
            imagesetthickness($this->image, mt_rand($this->lineWidth["min"], $this->lineWidth["max"]));
            imageline($this->image, $x1, $y1, $x2, $y2,$this->setColor());
        }
    }
    private function setPix(){
        $num=mt_rand($this->pixNum["min"],$this->pixNum["max"]);
        for($i=0;$i<$num;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->setColor("a"));
        }
    }
    function out(){
        header("content-type:image/".$this->type);
        //创建画布
        $this->createCanvas();
        //写文字
        $this->setText();
        //画线条
        $this->setLine();
        //画像素点
        $this->setPix();
        //写入cookie
        $_SESSION["code"]=$this->str;
        $outtype="image".$this->type;
        $outtype($this->image);
        imagedestroy($this->image);
    }
}
