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
$this->beginContent('@backend/views/layouts/base.php')
?>

<?php echo $this->render('_header') ?>
<main class="d-flex container">
    <div class="col-12 col-lg-3">
        <?php echo $this->render('_sidebar') ?>
    </div>
    <div class="col-12 col-lg-9">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<?php echo $this->endContent() ?>
