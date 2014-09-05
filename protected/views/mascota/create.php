<?php
/* @var $this MascotaController */
/* @var $model Mascota */

$this->breadcrumbs=array(
	'Mascotas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mascota', 'url'=>array('index')),
	array('label'=>'Manage Mascota', 'url'=>array('admin')),
);
?>

<h1>Create Mascota</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>