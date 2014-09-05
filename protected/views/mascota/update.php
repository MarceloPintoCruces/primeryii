<?php
/* @var $this MascotaController */
/* @var $model Mascota */

$this->breadcrumbs=array(
	'Mascotas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mascota', 'url'=>array('index')),
	array('label'=>'Create Mascota', 'url'=>array('create')),
	array('label'=>'View Mascota', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mascota', 'url'=>array('admin')),
);
?>

<h1>Update Mascota <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>