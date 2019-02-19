<?php
/* Smarty version 3.1.33, created on 2019-02-11 16:18:04
  from 'module:paypalviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c61e68cd456c6_12562652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb75ed204d6638be114f40b8f16edf38ce1d4b42' => 
    array (
      0 => 'module:paypalviewstemplatesfront',
      1 => 1548906515,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c61e68cd456c6_12562652 (Smarty_Internal_Template $_smarty_tpl) {
?><p id="paypal-es-checked" style="display: none">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are about to pay with your PayPal account','mod'=>'paypal'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypal_account_email']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

</p>
<p id="paypal-ppp-checked" style="display: none">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are about to pay with your PayPal account','mod'=>'paypal'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypal_account_email']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

</p>
<?php }
}
