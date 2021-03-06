<?php Yii::import('application.modules.comment.CommentModule'); ?>
<div class='portlet'>
    <div class='portlet-decoration'>
        <div class='portlet-title'><?= Yii::t('CommentModule.comment', 'Last comments'); ?></div>
    </div>
    <div class='portlet-content'>
        <?php if (isset($models) && !empty($models)): ?>
            <ul>
                <?php foreach ($models as $model): ?>
                    <li><?= CHtml::link($model->text); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
