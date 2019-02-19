<?php
/* Smarty version 3.1.33, created on 2019-02-08 09:23:32
  from '/var/www/html/modules/paypal/views/templates/hook/paypal_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5d90e4b7e926_07375267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff0db8c872974c52840995a09c64e4e218531320' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/hook/paypal_order.tpl',
      1 => 1548906515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5d90e4b7e926_07375267 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $('.kpi-container').after($('.paypal-warning').parents('.module_warning'));
<?php echo '</script'; ?>
><?php }
}
