<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var dashboard\models\Patients $model */

$this->title = 'Update Patients: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patients-update">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
