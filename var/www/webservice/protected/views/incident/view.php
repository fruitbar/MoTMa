<?php
/* @var $this IncidentController */
/* @var $model Incident */

$this->breadcrumbs=array(
	'Incidents'=>array('index'),
	$model->idincident,
);

$this->menu=array(
	array('label'=>'List Incident', 'url'=>array('index')),
	array('label'=>'Create Incident', 'url'=>array('create')),
	array('label'=>'Update Incident', 'url'=>array('update', 'id'=>$model->idincident)),
	array('label'=>'Delete Incident', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idincident),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Incident', 'url'=>array('admin')),
);
?>

<h1>View Incident #<?php echo $model->idincident; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idincident',
		'priority',
		'impact',
		'urgency',
		'description',
		'detail',
		'submitdate',
		'targetresolutiondate',
		'customer',
		'productname',
	),
)); ?>
