<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);

$this->beginContent(viewFile:'@backend/views/layouts/base.php')
?>
<div class="wrap h-100 d-flex flex-column">
    <?php echo $this->render('_header') ?>
    <main class="d-flex container">
        <div class="col-12">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
</div>
<?php echo $this->endContent() ?>