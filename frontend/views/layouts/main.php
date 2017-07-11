<?php
/**
 * Created by PhpStorm.
 * User: lxl
 * Date: 2017/7/5
 * Time: 下午5:26
 */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="app">
        <el-row type="flex" justify="center" class="topbar">
            <el-col :span="15">
                <el-row>

                    <el-col :span="24">

                        <div class="grid-content bg-purple-dark" >
                            <span class="topdate" >2017年6月30日 星期五</span>
                        </div>

                    </el-col>

                </el-row>
            </el-col>
        </el-row>
        <el-row type="flex" justify="center" class="lobg">
            <el-col :span="15">
                <div class="">
                    <img src="<?= Url::to('images/logo.png')?>">

                </div>
            </el-col>
        </el-row>
        <el-row type="flex" justify="center" class="zmenu">
            <el-col :span="15">
                <ul>
                    <li class="zitem-active" v-bind:style="{width:menu.currwidth,transform:menu.currtransform}" ></li>
                  <todo-item
                    v-for="item in menu.list"
                    v-bind:todo="item"
                    v-bind:class="item.css1"
                    v-on:activemenu="changemenu"
                    >
                </todo-item>
                </ul>
            </el-col>
        </el-row>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>