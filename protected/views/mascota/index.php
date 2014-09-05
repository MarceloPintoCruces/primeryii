<?php
/* @var $this MascotaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mascotas',
);

$this->menu=array(
	array('label'=>'Crear Mascota', 'url'=>array('create')),
	array('label'=>'Manage Mascota', 'url'=>array('admin')),
);
?>

<h1>Mascotas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
