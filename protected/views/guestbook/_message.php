<p>
	<b><?php echo CHtml::encode($data->login); ?></b> (<?php echo Yii::app()->dateFormatter->format('dd.MM.yyyy в H:m', $data->time); ?>)<br />
	<?php echo CHtml::encode($data->message); ?>
</p>