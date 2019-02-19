<?php
/* Smarty version 3.1.33, created on 2019-02-05 02:00:37
  from '/var/www/html/themes/classic/templates/catalog/listing/supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c593495c5d364_33566023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be797208c1080b1cb56c0a6617c389c986cf0d5' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/listing/supplier.tpl',
      1 => 1548895466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c593495c5d364_33566023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20203734705c593495c53ba7_40552225', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_20203734705c593495c53ba7_40552225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_20203734705c593495c53ba7_40552225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of products by supplier %s','sprintf'=>array($_smarty_tpl->tpl_vars['supplier']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
  <div id="supplier-description"><?php echo $_smarty_tpl->tpl_vars['supplier']->value['description'];?>
</div>
<?php
}
}
/* {/block 'product_list_header'} */
}
