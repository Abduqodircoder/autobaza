<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pozition */

$this->title = Yii::t('yii', 'Create Pozition');
$this->params['breadcrumbs'][] = ['label' => Yii::t('yii', 'Pozitions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pozition-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
