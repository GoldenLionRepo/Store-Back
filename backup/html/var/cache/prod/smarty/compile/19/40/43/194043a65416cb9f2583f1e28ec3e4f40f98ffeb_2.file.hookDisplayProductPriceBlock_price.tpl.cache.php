<?php
/* Smarty version 3.1.33, created on 2019-01-31 21:13:47
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c53ab5b17f458_29052245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '194043a65416cb9f2583f1e28ec3e4f40f98ffeb' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl',
      1 => 1548895466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c53ab5b17f458_29052245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10206988685c53ab5b178f61_97069677';
?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'])) {?>
        <span class="aeuc_shipping_label">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'], ENT_QUOTES, 'UTF-8');?>
" class="iframe">
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

            </a>
        </span>
    <?php }
}
}
}
