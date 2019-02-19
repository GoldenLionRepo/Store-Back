<?php
/* Smarty version 3.1.33, created on 2019-02-01 00:03:36
  from 'module:pssupplierlistviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53d328991814_76337087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3c075d1bfb2c0c0cdc7430c741d12863681a16d' => 
    array (
      0 => 'module:pssupplierlistviewstempla',
      1 => 1548895466,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53d328991814_76337087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3757372055c53d32898e688_69147977';
?>

<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier', false, NULL, 'supplier_list', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration']++;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
      <li class="facet-label">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
