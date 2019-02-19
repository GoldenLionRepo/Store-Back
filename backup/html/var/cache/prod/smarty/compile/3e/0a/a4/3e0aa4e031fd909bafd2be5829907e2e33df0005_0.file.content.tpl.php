<?php
/* Smarty version 3.1.33, created on 2019-01-31 21:13:27
  from '/var/www/html/admin303eetoqa/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53ab47c26470_54737134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e0aa4e031fd909bafd2be5829907e2e33df0005' => 
    array (
      0 => '/var/www/html/admin303eetoqa/themes/default/template/content.tpl',
      1 => 1548895465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53ab47c26470_54737134 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
