<?php
/* Smarty version 3.1.33, created on 2019-02-04 14:24:45
  from '/var/www/html/themes/classic/templates/checkout/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c58917daf89c3_97644958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9c3be80588f979676c8b571da1497d83e007e3' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/login-form.tpl',
      1 => 1548895466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c58917daf89c3_97644958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16297071105c58917daf7e26_51824677', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/login-form.tpl');
}
/* {block 'form_buttons'} */
class Block_16297071105c58917daf7e26_51824677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_16297071105c58917daf7e26_51824677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button
    class="continue btn btn-primary float-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'form_buttons'} */
}
