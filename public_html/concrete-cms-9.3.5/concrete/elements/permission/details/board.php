<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php
$pk = PermissionKey::getByID($_REQUEST['pkID']);
$pk->setPermissionObject($board);

?>

<?php Loader::element("permission/detail", array('permissionKey' => $pk)); ?>

<script type="text/javascript">
    var ccm_permissionDialogURL = '<?=URL::to("/ccm/system/dialogs/boards/permissions", "board")?>';
</script>
