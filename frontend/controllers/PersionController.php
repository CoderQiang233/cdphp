<?php
/**
 * Created by PhpStorm.
 * 个人中心
 * User: zhangxh
 * mail: baidu211@vip.qq.com
 * Date: 2017/7/5
 * Time: 下午5:22
 */

namespace frontend\controllers;


use yii\web\Controller;


class PersionController extends Controller
{

    /**
     * 个人中心首页
     */
    public function actionIndex(){

        return $this->render('index');

    }
}