<?php
/* Smarty version 3.1.33, created on 2019-02-01 00:04:36
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53d3648c26f7_00329748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd53a533d7f9627bd18525b9c5b530b01a259a79' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl',
      1 => 1548895466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53d3648c26f7_00329748 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['directPrint']->value) {?>
	<input type="submit" name="printCMSPage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
" class="btn btn-secondary" onclick="window.print()" />
<?php } else { ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['print_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</a>
<?php }
}
}
