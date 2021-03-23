<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Examreg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examreg-form container">

    <div class="d-flex">
        

        <div class="col-lg-6">
            
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-6">
            events
        </div>

    </div>
</div>
