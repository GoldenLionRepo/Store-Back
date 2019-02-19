<?php
/* Smarty version 3.1.33, created on 2019-01-31 21:29:28
  from '/var/www/html/admin303eetoqa/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53af08e4abe8_62942305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550a1f9c6194f62798d5e58d5737956081cacf1a' => 
    array (
      0 => '/var/www/html/admin303eetoqa/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1548895465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53af08e4abe8_62942305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4262401945c53af08e49b37_47803002', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_4262401945c53af08e49b37_47803002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_4262401945c53af08e49b37_47803002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
