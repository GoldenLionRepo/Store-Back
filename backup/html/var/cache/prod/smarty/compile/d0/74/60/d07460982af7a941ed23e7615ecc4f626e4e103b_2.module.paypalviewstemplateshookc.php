<?php
/* Smarty version 3.1.33, created on 2019-02-01 00:03:09
  from 'module:paypalviewstemplateshookc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53d30d7a0fd5_61970259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd07460982af7a941ed23e7615ecc4f626e4e103b' => 
    array (
      0 => 'module:paypalviewstemplateshookc',
      1 => 1548906515,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53d30d7a0fd5_61970259 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="container_express_checkout" style="float:right; margin: 10px 40px 0 0">
    <form id="paypal_payment_form_cart" class="paypal_payment_form" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl ) );?>
" method="post" data-ajax="false">
        <input type="hidden" name="method" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PayPal_payment_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="current_shop_url" id="paypal_url_page" value="" />
        <input type="hidden" name="bn" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PayPal_tracking_code']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" id="in_context_checkout_enabled" value="0">
        <input type="hidden" id="source_page" value="cart">
        <img id="payment_paypal_express_checkout" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PayPal_img_esc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal','mod'=>'paypal'),$_smarty_tpl ) );?>
" style="cursor:pointer;" onclick="setInput();return false"/>

    </form>
</div>
<div class="clearfix"></div>
<?php echo '<script'; ?>
 type="text/javascript" src="https://www.paypalobjects.com/api/checkout.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_url']->value, ENT_QUOTES, 'UTF-8');?>
modules/paypal/views/js/shortcut_cart.js"><?php echo '</script'; ?>
>
<?php }
}
