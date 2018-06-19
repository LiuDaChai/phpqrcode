<?php
/**
 * Created by Sublime.
 * User: Lobb
 * Date: 2018/6/14
 * Time: 11:00
 */
namespace PHPQrcode;

include "lib/qrlib.php";

class QrcodeServer
{
    /**
     * 生成二维码(大小 300 px)
     * @param  String  $context              内容
     * @param  String  $filename             图片文件
     * @param  String  $errorCorrectionLevel 纠错等级(L/M/Q/H)
     * @param  Integer $matrixPointSize      矩阵点大小
     */
    public static function png($context, $filename, $errorCorrectionLevel='L', $matrixPointSize=8.12)
    {
        // 创建二维码文件
        \Qrcode::png($context, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
    }
}