<?php
/* Smarty version 3.1.33, created on 2019-02-01 00:05:04
  from 'module:psproductinfoviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53d38025ee78_15490185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545a70f6dde6b482822ab86d48b421807dfedaed' => 
    array (
      0 => 'module:psproductinfoviewstemplat',
      1 => 1548895466,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53d38025ee78_15490185 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="js-productinfo mt-1">
  <?php if (isset($_smarty_tpl->tpl_vars['vars_nb_people']->value)) {?>
    <p>
      <?php if ($_smarty_tpl->tpl_vars['vars_nb_people']->value['%nb_people%'] == 1) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 person is currently watching this product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%nb_people% people are currently watching this product.','sprintf'=>$_smarty_tpl->tpl_vars['vars_nb_people']->value,'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      <?php }?>
    </p>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['vars_date_last_order']->value)) {?>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last time this product was bought: %date_last_order%','sprintf'=>$_smarty_tpl->tpl_vars['vars_date_last_order']->value,'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['vars_date_last_cart']->value)) {?>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last time this product was added to a cart: %date_last_cart%','sprintf'=>$_smarty_tpl->tpl_vars['vars_date_last_cart']->value,'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
  <?php }?>
</div>
<?php }
}
