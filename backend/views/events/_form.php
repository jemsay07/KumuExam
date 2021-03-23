<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Events */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), ['dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
