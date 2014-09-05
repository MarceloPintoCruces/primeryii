<?php
/* @var $this MascotaController */
/* @var $model Mascota */

$this->breadcrumbs=array(
	'Mascotas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mascota', 'url'=>array('index')),
	array('label'=>'Create Mascota', 'url'=>array('create')),
	array('label'=>'Update Mascota', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mascota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mascota', 'url'=>array('admin')),
);
?>

<h1>View Mascota #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'raza',
		'codigo',
		'id_dueno',
	),
)); ?>
