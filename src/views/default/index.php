<?php
declare(strict_types = 1);

/**
 * @var View $this
 */

use cusodede\permissions\PermissionsModule;
use yii\bootstrap4\ButtonGroup;
use yii\web\View;

?>

<?= ButtonGroup::widget([
	'buttons' => [
		PermissionsModule::a('Add permissions from configuration file', 'default/init-config-permissions', ['class' => 'btn btn-default']),
		PermissionsModule::a('Generate controllers permissions', 'default/init-controllers-permissions', ['class' => 'btn btn-default']),
	]
]) ?>