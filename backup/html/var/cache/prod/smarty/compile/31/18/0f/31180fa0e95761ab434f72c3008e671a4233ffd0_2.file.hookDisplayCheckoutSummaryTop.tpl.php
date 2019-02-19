<?php
/* Smarty version 3.1.33, created on 2019-02-04 14:24:45
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCheckoutSummaryTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c58917db54615_28554228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31180fa0e95761ab434f72c3008e671a4233ffd0' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCheckoutSummaryTop.tpl',
      1 => 1548895466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c58917db54615_28554228 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <h5 class="aeuc_scart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shopping_cart']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My shopping cart','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</a></h5>
<?php }
}
