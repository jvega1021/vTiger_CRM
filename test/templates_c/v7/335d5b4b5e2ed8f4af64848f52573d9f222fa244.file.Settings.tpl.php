<?php /* Smarty version Smarty-3.1.7, created on 2017-09-26 20:52:27
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Corrensa/Settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92994345559cabe0b945a78-87271734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335d5b4b5e2ed8f4af64848f52573d9f222fa244' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Corrensa/Settings.tpl',
      1 => 1506459136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92994345559cabe0b945a78-87271734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_IS_ADMIN' => 0,
    'DATA' => 0,
    'SYNC_STATUS' => 0,
    'EN_SP' => 0,
    'TOTAL_ISSUES' => 0,
    'CORR_URL' => 0,
    'REQUIREMENTS' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59cabe0ba0269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cabe0ba0269')) {function content_59cabe0ba0269($_smarty_tpl) {?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>

<div class="container-fluid corrensa-config">

    <?php if ($_smarty_tpl->tpl_vars['USER_IS_ADMIN']->value){?>
        <div class="corrensa_header widget_header row">
            <?php if ($_smarty_tpl->tpl_vars['DATA']->value['settings']['panel_connected']){?>
                <div class="header__logo pull-left">
                    <img class="logo__img" src="layouts/vlayout/modules/Corrensa/resources/images/48.png"
                         alt="Corrensa">
                    <span class="logo__text">Corrensa</span>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['SYNC_STATUS']->value!='in-progress'){?>
                    <form class="form-horizontal pull-right" method="post" action="" id="actionForm">
                        <label class="sp-switcher">
                            <input type="checkbox" id="cbxToggleSupport" <?php if ($_smarty_tpl->tpl_vars['EN_SP']->value){?>checked<?php }?> >
                            <div class="sp-slider round">
                                <?php if ($_smarty_tpl->tpl_vars['EN_SP']->value){?>
                                    <span class="sp-status">Support Enabled</span>
                                    <?php }else{ ?>
                                    <span class="sp-status">Support Disabled</span>
                                <?php }?>
                            </div>
                        </label>

                        <a href="#" class="hover-tooltip" data-toggle="tooltip" data-placement="bottom"
                           title="Click to enable support. It will create a VTiger user account for VTExperts to login and troubleshoot the issue."><i
                                    class="fa fa-question-circle" aria-hidden="true"></i></a>

                        <?php if ($_smarty_tpl->tpl_vars['TOTAL_ISSUES']->value>0){?>
                            <button type="button" class="btn btn-danger" id="btnShowError">Errors (<?php echo $_smarty_tpl->tpl_vars['TOTAL_ISSUES']->value;?>
)</button>
                            <a href="#" class="hover-tooltip" data-toggle="tooltip" data-placement="bottom"
                               title="Any errors detected may impact impact plugin functionality on Outlook/Gmail. If you are having any issues - please contact us at help@vtexperts.com."><i
                                        class="fa fa-question-circle" aria-hidden="true"></i></a>
                        <?php }?>
                        <button type="button" class="btn btn-primary" id="btnUpdate">Update To Corrensa</button>
                        <a href="#" class="hover-tooltip" data-toggle="tooltip" data-placement="bottom"
                           title="You only need to click it if you added new users, fields, picklists or modified user permissions."><i
                                    class="fa fa-question-circle" aria-hidden="true"></i></a>
                        <button type="button" class="btn" id="btnDisconnect">Disconnect</button>
                        <a href="#" class="hover-tooltip" data-toggle="tooltip" data-placement="bottom"
                           title="If you disconnect from Corrensa - you will no longer be able to use Outlook/Gmail Extension nor recieve any automated updates and your Corrensa configuration will be cleared."><i
                                    class="fa fa-question-circle" aria-hidden="true"></i></a>
                    </form>
                <?php }?>
            <?php }?>
        </div>
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['DATA']->value['settings']['panel_connected']&&$_smarty_tpl->tpl_vars['SYNC_STATUS']->value!='in-progress'&&$_smarty_tpl->tpl_vars['SYNC_STATUS']->value!='updating'){?>
                <iframe src="<?php echo $_smarty_tpl->tpl_vars['CORR_URL']->value;?>
?usr=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['settings']['panel_username'];?>
&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['settings']['panel_token'];?>
"
                        class="dashboard-frame"></iframe>
            <?php }elseif($_smarty_tpl->tpl_vars['DATA']->value['settings']['panel_connected']&&($_smarty_tpl->tpl_vars['SYNC_STATUS']->value=='in-progress'||$_smarty_tpl->tpl_vars['SYNC_STATUS']->value=='updating')){?>
                <div class="synching-status text-center">
                    <span class="status__text">Corrensa is synchronizing...</span>
                    <span class="status__button">
                    <?php if ($_smarty_tpl->tpl_vars['SYNC_STATUS']->value=='in-progress'){?>
                        <button type="button" class="btn btn-warning btn-CancelSynching" id="btnCancelSynching">Cancel & try again</button>



                                                                                                            <?php }elseif($_smarty_tpl->tpl_vars['SYNC_STATUS']->value=='updating'){?>



                        <button type="button" class="btn btn-warning btn-CancelUpdate" id="btnCancelUpdate">Cancel & try again</button>
                    <?php }?>
                </span>
                </div>
            <?php }else{ ?>
                <div class="col-md-4">
                    <form class="form-inline" method="post" action="" id="loginForm">
                        <h3 class="pull-left welcome-message">Welcome to Corrensa!</h3>
                        <iframe src="https://www.corrensa.com/corrensa-adapter-installed.html" style="visibility: hidden; width: 1px; height: 1px;"></iframe>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Email</label>
                            <div class="controls">
                                <input type="text" name="email" id="inputEmail" placeholder="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Password</label>
                            <div class="controls">
                                <input type="password" name="password" id="inputPassword" placeholder="">
                            </div>
                        </div>
                        <div class="control-group actions">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary btn__login">Login</button>
                                <a href="#" id="btnRegisterCorrensa" class="btn btn-warning btn__register-account">Create
                                    Corrensa Account</a>
                                <a href="#" class="hover-tooltip" data-toggle="tooltip" data-placement="bottom"
                                   title="You need to create Corrensa account to use this plugin"><i
                                            class="fa fa-question-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <a href="#" id="btnLostPassword">
                            <span>Lost Password ? Click here to reset</span>
                        </a>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="corrensa-requirements">
                        <h3 class="requirement-title">Corrensa Requirements</h3>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REQUIREMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                                <li <?php if ($_smarty_tpl->tpl_vars['item']->value['pass']){?>class="is-valid" <?php }else{ ?>class="is-invalid"<?php }?>>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['pass']){?>
                                        <span class="rqr-name"><img
                                                    src="layouts/vlayout/modules/Corrensa/resources/images/valid.png"> <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
                                    <?php }else{ ?>
                                        <span class="rqr-name"><img
                                                    src="layouts/vlayout/modules/Corrensa/resources/images/invalid.png"> <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
                                        <span class="rqr-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</span>
                                    <?php }?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="alert alert-info live-chat-box" role="alert">
                        <h4>If you have any questions or issues installing plugin - please chat with us!</h4>
                        <br>
                        <a href="#"
                           onclick="window.open('https://v2.zopim.com/widget/livechat.html?&key=1P1qFzYLykyIVMZJPNrXdyBilLpj662a', '_blank', 'toolbar=no,scrollbars=no,resizable=no,top=150,left=500,width=500,height=500');"
                           class="btn btn-primary">
                            <span class="fa fa-comments-o"></span>
                            <span>Live Chat</span>
                        </a>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php }else{ ?>
        <br>
        <br>
        <h4>You must have admin permission to access Corrensa</h4>
    <?php }?>
</div>

<?php if (!$_smarty_tpl->tpl_vars['DATA']->value['settings']['panel_connected']){?>
    <div class="modal fade" id="corrensa-register-screen" tabindex="-1" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Signup Corrensa</h4>
                </div>
                <div class="modal-body">
                    <iframe src="<?php echo $_smarty_tpl->tpl_vars['CORR_URL']->value;?>
/signup?mode=popup" frameborder="0"></iframe>
                </div>
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="corrensa-lost-password-screen" tabindex="-1" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Recover your account</h4>
                </div>
                <div class="modal-body modal-body-lostpassword">
                    <iframe src="<?php echo $_smarty_tpl->tpl_vars['CORR_URL']->value;?>
/login?mode=recovery-popup" frameborder="0"></iframe>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php }else{ ?>
    <div class="modal fade" id="corrensa-show-error" tabindex="-1" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ISSUES']->value;?>
 Errors Found!</h4>
                </div>
                <div class="modal-body">
                    <div class="corrensa-requirements corrensa-requirements-modal">
                        <h5>Corrensa might not function properly if the issues below are not addressed.</h5>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REQUIREMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                                <li <?php if ($_smarty_tpl->tpl_vars['item']->value['pass']){?>class="is-valid" <?php }else{ ?>class="is-invalid"<?php }?>>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['pass']){?>
                                        <span class="rqr-name"><img
                                                    src="layouts/vlayout/modules/Corrensa/resources/images/valid.png"> <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
                                    <?php }else{ ?>
                                        <span class="rqr-name"><img
                                                    src="layouts/vlayout/modules/Corrensa/resources/images/invalid.png"> <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
                                        <span class="rqr-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</span>
                                    <?php }?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
<?php }?><?php }} ?>