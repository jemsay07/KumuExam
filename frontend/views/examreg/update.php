<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Examreg */

$this->title = 'Update Examreg: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Examregs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="examreg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
