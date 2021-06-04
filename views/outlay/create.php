<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Outlay */

$this->title = Yii::t('yii', 'Create Outlay');
$this->params['breadcrumbs'][] = ['label' => Yii::t('yii', 'Outlays'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outlay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
