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
$this->beginContent('@frontend/views/layouts/base.php')
?>

<?php echo $this->render('_header') ?>
<main class="container">
    <?= Alert::widget() ?>
    <?= $content ?>
</main>
<?php echo $this->endContent() ?>