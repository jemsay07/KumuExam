<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Examregs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examreg-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Examreg', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'email:email',
            'phone',
            //'gender',
            //'street',
            //'city',
            //'country',
            //'zip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
