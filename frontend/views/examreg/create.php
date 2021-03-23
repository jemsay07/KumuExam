<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Examreg */

$this->title = 'Registration';
$this->params['breadcrumbs'][] = ['label' => 'Examregs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examreg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
