<?php
/* Smarty version 3.1.33, created on 2019-02-01 10:55:27
  from '/var/www/html/modules/ps_mbo/views/templates/admin/module-toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c546bef9f10b1_10149499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c29d975974d8b07ab857f56c160b3d6ec3dd46a5' => 
    array (
      0 => '/var/www/html/modules/ps_mbo/views/templates/admin/module-toolbar.tpl',
      1 => 1548895856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c546bef9f10b1_10149499 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="toolbar-icons">
	<div class="wrapper">
		<a class="btn btn-primary  pointer" id="page-header-desc-configuration-add_module" href="#" title="" data-toggle="modal" data-placement="bottom" data-original-title="Installer un module" data-target="#module-modal-import">
			<i class="material-icons">cloud_upload</i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install a module'),$_smarty_tpl ) );?>

		</a>

		<?php if (isset($_smarty_tpl->tpl_vars['addons_connect']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['addons_connect']->value['connected'] === true) {?>
			<a class="btn btn-primary pointer" id="page-header-desc-configuration-addons_logout" href="#" title="" data-toggle="modal" data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Synchronized with Addons marketplace','d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>
" data-target="#module-modal-addons-logout">
				<i class="material-icons">exit_to_app</i>
				<?php echo $_smarty_tpl->tpl_vars['addons_connect']->value['email'];?>

			</a>
			<?php } else { ?>
				<a class="btn btn-primary pointer" id="page-header-desc-configuration-addons_connect" href="#" title="" data-toggle="modal" data-placement="bottom" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect to Addons marketplace','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
" data-target="#module-modal-addons-connect">
					<i class="material-icons">vpn_key</i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect to Addons marketplace','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

				</a>
			<?php }?>
		<?php }?>

		<a class="btn btn-outline-secondary btn-help btn-sidebar" href="" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>
" data-toggle="sidebar" data-target="#right-sidebar" data-url="" id="product_form_open_help">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>

		</a>
	</div>
</div><?php }
}
