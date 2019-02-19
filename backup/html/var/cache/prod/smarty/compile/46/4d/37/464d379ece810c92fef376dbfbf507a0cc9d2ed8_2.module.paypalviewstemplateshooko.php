<?php
/* Smarty version 3.1.33, created on 2019-02-07 12:11:33
  from 'module:paypalviewstemplateshooko' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5c66c53e3e42_19729797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '464d379ece810c92fef376dbfbf507a0cc9d2ed8' => 
    array (
      0 => 'module:paypalviewstemplateshooko',
      1 => 1548906515,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5c66c53e3e42_19729797 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['error_msg']->value)) {?>
<div class="alert alert-danger">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_msg']->value, ENT_QUOTES, 'UTF-8');?>

</div>
<?php }?>
<li id="paypal_transaction_id">
    <?php if ($_smarty_tpl->tpl_vars['method']->value == 'BT') {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Braintree transaction id :','mod'=>'paypal'),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Paypal transaction id :','mod'=>'paypal'),$_smarty_tpl ) );?>

    <?php }?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transaction_id']->value, ENT_QUOTES, 'UTF-8');?>

</li>
<?php if (isset($_smarty_tpl->tpl_vars['ppp_information']->value)) {?>
    <dl>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The bank name','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->bank_name, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account holder name','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->account_holder_name, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IBAN','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->international_bank_account_number, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'BIC','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->bank_identifier_code, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount due / currency','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->amount->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->amount->currency, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment due date','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->payment_due_date, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->reference_number, ENT_QUOTES, 'UTF-8');?>

        </dd>
    </dl>
<?php }
}
}
