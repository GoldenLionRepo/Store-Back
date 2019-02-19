<?php
/* Smarty version 3.1.33, created on 2019-02-04 14:26:32
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hook-email-wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5891e8967ab9_72798973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e921b310d0621ca203922eb48ca2dba860afa63' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hook-email-wrapper.tpl',
      1 => 1548895466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5891e8967ab9_72798973 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="background-color:#fff;width:650px;font-family:Open-sans,sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto">
    <table style="width:100%;margin-top:10px">
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_contents']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
            <tr>
                <td style="width:20px;padding:7px 0">&nbsp;</td>
                <td style="padding:7px 0">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                </td>
                <td style="width:20px;padding:7px 0">&nbsp;</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
