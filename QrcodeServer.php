<?php
/**
 * Created by Lobb.
 * User: Lobb
 * Date: 2018/6/14
 * Time: 11:00
 */
namespace PHPQrcode;

use think\Config;

class QrcodeServer
{
    /**
     * 生成二维码
     * @param  String  $context              内容
     * @param  String  $filename             图片文件
     * @param  String  $errorCorrectionLevel 纠错等级(L/M/Q/H)
     * @param  Integer $matrixPointSize      矩阵点大小
     */
    public static function png($context, $filename, $errorCorrectionLevel='L', $matrixPointSize=4)
    {
        include "lib/qrlib.php";

        // 获取配置信息
        $options = Config::get('qrcode');

        // 确认目录是否存在
        if (!file_exists($options['temp_file_dir'])){
            mkdir($options['temp_file_dir']);
        }

        // 创建二维码文件
        \Qrcode::png($context, $options['temp_file_dir'].$filename, $errorCorrectionLevel, $matrixPointSize);


    }
}