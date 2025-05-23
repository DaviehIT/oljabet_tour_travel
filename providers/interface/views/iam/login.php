<?php

use helpers\Html;
use helpers\widgets\ActiveForm;

/** @var yii\web\View $this */
?>
<div class="row justify-content-center push">
    <div class="col-md-8 col-lg-6 col-xl-4">
        <!-- Sign In Block -->
        <div class="block block-rounded mb-0">
            <div class="block-header block-header-default bg-primary text-white text-center">
                <h3 class="block-title">Welcome to <?= Html::encode(Yii::$app->name) ?></h3>
            </div>
            <div class="block-content">
                <div class="p-sm-3 px-lg-4 px-xxl-2 py-lg-2">
                    <div class="text-center mb-4">
                        <img src="/path/to/hospital-logo.png" alt="Hospital Logo" class="img-fluid mb-2" style="width: 80px;">
                        
                    </div>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="py-3">
                        <div class="mb-4">
                            <?= $form->field($model, 'username')->textInput([
                                'autofocus' => true,
                                'class' => 'form-control form-control-alt form-control-lg',
                                'placeholder' => 'Enter Username',
                            ])->label(false) ?>
                        </div>
                        <div class="mb-4">
                            <?= $form->field($model, 'password')->passwordInput([
                                'class' => 'form-control form-control-alt form-control-lg',
                                'placeholder' => 'Enter Password',
                            ])->label(false) ?>
                        </div>
                        <div class="mb-4 form-check">
                            <?= $form->field($model, 'rememberMe')->checkbox([
                                'class' => 'form-check-input',
                                'template' => "{input} {label}\n{error}",
                            ]) ?>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <?= Html::submitButton('<i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Login', [
                                'class' => 'btn btn-primary btn-lg w-100',
                            ]) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light text-center">
                <a href="#" class="fs-sm text-muted">Forgot Password?</a>
            </div>
        </div>
        <!-- END Sign In Block -->
    </div>
</div>
