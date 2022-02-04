<?php
/** @var $model \app\models\User */
?>

<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('', 'post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo  $form->field($model,'email')?>
    <?php echo  $form->field($model, 'password')->passwordField() ?>
    <?php echo  $form->field($model, 'confirmPassword')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end() ?>
<!--<form action="" method="post">-->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <div class="form-group">-->
<!--                <label>First name</label>-->
<!--                <input type="text" class="form-control--><?php //echo $model->hasError('firstname') ? ' is-invalid' : '' ?><!--" name="firstname" --><?php //echo $model->firstname ?><!-- >-->
<!--                <div class="invalid-feedback">-->
<!--                    --><?php //echo $model->getFirstError('firstname') ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="form-group">-->
<!--                <label>Last name</label>-->
<!--                <input type="text" class="form-control" name="lastname">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Email</label>-->
<!--        <input type="text" class="form-control"  name="email">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Password</label>-->
<!--        <input type="text" class="form-control"  name="password">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label>Password Repeat</label>-->
<!--        <input type="text" class="form-control"  name="confirmPassword">-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-primary">Submit</button>-->
<!--</form>-->