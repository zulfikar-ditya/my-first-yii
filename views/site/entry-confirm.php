<?php 
use yii\helpers\Html;
?>

<p>
 you enter some informations
</p>

<ul class="form-gorup">
    
    <li class="list-group-item"><?= Html::encode($model->name) ?></li>
    <li class="list-group-item"><?= Html::encode($model->email) ?></li>
</ul>