<?php
/* Smarty version 3.1.33, created on 2019-02-04 14:24:45
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayOverrideTemplateFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c58917da82747_47667975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5aea2fd220bb458fd62b53907802ea0443160cd' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayOverrideTemplateFooter.tpl',
      1 => 1548895466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c58917da82747_47667975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17190220425c58917da81176_91888555', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/checkout.tpl');
}
/* {block 'footer'} */
class Block_17190220425c58917da81176_91888555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17190220425c58917da81176_91888555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

    </div>
  </div>
</div>
<?php
}
}
/* {/block 'footer'} */
}
