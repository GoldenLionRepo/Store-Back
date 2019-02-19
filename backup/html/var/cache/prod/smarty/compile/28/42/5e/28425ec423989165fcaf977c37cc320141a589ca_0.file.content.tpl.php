<?php
/* Smarty version 3.1.33, created on 2019-01-31 21:13:25
  from '/var/www/html/admin303eetoqa/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53ab4561afa1_91021239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28425ec423989165fcaf977c37cc320141a589ca' => 
    array (
      0 => '/var/www/html/admin303eetoqa/themes/new-theme/template/content.tpl',
      1 => 1548895465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53ab4561afa1_91021239 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
