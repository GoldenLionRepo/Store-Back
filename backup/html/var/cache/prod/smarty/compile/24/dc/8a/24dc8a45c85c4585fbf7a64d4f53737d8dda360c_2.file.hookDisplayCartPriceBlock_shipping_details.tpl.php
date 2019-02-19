<?php
/* Smarty version 3.1.33, created on 2019-02-01 00:03:08
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53d30c4dd259_58107758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24dc8a45c85c4585fbf7a64d4f53737d8dda360c' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl',
      1 => 1548895466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53d30c4dd259_58107758 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Under conditions)','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

 </a>
<?php }
}
