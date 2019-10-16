<?php

namespace libs;

class Captcha
{
    const DISTURB_PIXEL = 0;
    const DISTURB_LINE  = 1;

    public $width;
    public $height;
    public $len;
    public $type;

    //可以在所有方法中通用的变量: 成员变量
    public $image;

    public function __construct($width = 100, $height = 50, $len = 4, $type = self::DISTURB_LINE)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->len    = $len;
        $this->type   = $type;

        //方法调用, 必须写$this
        $this->image = $this->createImage();
    }

    public function __destruct()
    {
        //构造方法里生成的变量, 最好在析构中释放
        imagedestroy($this->image);
    }

    //建立画布
    private function createImage()
    {
        //1.建立画布, 填充背景色
        $image   = imagecreatetruecolor($this->width, $this->height);
        $bgColor = imagecolorallocate($image, 230, 230, 230);
        imagefill($image, 0, 0, $bgColor);
        return $image;
    }

    //绘制验证码
    private function drawCaptcha()
    {
        //2.写验证码
        $str  = '0123456789qwerrtyuiopasdfghjklzxcvmnbQWERYTUIOPASDFHGJKLZXCVBNM';
        $code = '';
        for ($i = 0; $i < $this->len; $i++) {
            $index = mt_rand(0, strlen($str) - 1);
            $text  = $str[$index];
            $code .= $text;

            $size = mt_rand($this->height * 0.4, $this->height * 0.7);

            $angle = mt_rand(-15, 15);
            $x     = $i * $this->width / $this->len;
            $y     = mt_rand($this->height * 0.7, $this->height * 0.9);

            $color    = imagecolorallocate($this->image, mt_rand(0, 200), mt_rand(0, 200), mt_rand(0, 200));
            $fontfile = __DIR__ . '/STXINWEI.TTF';
            imagettftext($this->image, $size, $angle, $x, $y, $color, $fontfile, $text);
        }
        return $code;
    }

    //线干扰项
    private function drawLines()
    {
        //3.干扰项: 30条线
        for ($i = 0; $i < 10; $i++) {
            $x1 = mt_rand(0, $this->width);
            $y1 = mt_rand(0, $this->height);

            $x2 = mt_rand(0, $this->width);
            $y2 = mt_rand(0, $this->height);

            $color = imagecolorallocate($this->image, mt_rand(0, 200), mt_rand(0, 200), mt_rand(0, 200));

            imageline($this->image, $x1, $y1, $x2, $y2, $color);
        }
    }

    //绘制点干扰
    private function drawPixel()
    {
        for ($i = 0; $i < 100; $i++) {
            $x = mt_rand(0, $this->width);
            $y = mt_rand(0, $this->height);

            $color = imagecolorallocate($this->image, mt_rand(0, 200), mt_rand(0, 200), mt_rand(0, 200));
            imagesetpixel($this->image, $x, $y, $color);
        }
    }

    //主方法:
    public function show()
    {
        $code = $this->drawCaptcha();

        switch ($this->type) {
            case self::DISTURB_LINE:
                $this->drawLines();
                break;
            case self::DISTURB_PIXEL:
                $this->drawPixel();
                break;
            default:
                # code...
                break;
        }

        //4.导出并显示在页面上
        header('content-type: image/png');
        imagepng($this->image);
        // 6.返回验证码的值
        return $code;
    }
}
