<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->transactionid=>array('view','id'=>$model->transactionid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transaction', 'url'=>array('index')),
	array('label'=>'Create Transaction', 'url'=>array('create')),
	array('label'=>'View Transaction', 'url'=>array('view', 'id'=>$model->transactionid)),
	array('label'=>'Manage Transaction', 'url'=>array('admin')),
);
?>

<h1>Update Transaction <?php echo $model->transactionid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>