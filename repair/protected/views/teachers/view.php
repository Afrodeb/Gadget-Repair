<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'dob',
		'address',
		'title',
		'ecnumber',
		'startdate',
	),
)); ?>
