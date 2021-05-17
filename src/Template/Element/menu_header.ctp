<?php

/**
 * @var App\View\AppView $this
 */
$url = $this->request->getRequestTarget();
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');

use Cake\I18n\I18n;
?>
<div class="main-menu-continer">

    <!-- id="main-menu" -->
    <div id="main-menu-header" class="navbar navbar-default">
        <?= $this->element('/top_header') ?>
        <div class="container">
            <div class="navbar-header">
                <!-- Responsive Navigation -->
                <div class="list-language-mobile" style="display:none">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php if (I18n::getLocale() == 'ja') : ?>
                            <?= $this->Html->image('/img/image/flag/jp.png', array('alt' => 'JP')); ?>
                        <?php elseif (I18n::getLocale() == 'vi_VN') : ?>
                            <?= $this->Html->image('/img/image/flag/vi.png', array('alt' => 'VI')); ?>
                        <?php endif; ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu show-flag">
                        <li>
                            <?php if (I18n::getLocale() == 'ja') : ?>
                                <?php echo $this->Html->link(
                                    '<img src="/img/image/flag/vi.png">',
                                    ['language' => 'vi_VN', 'controller' => $controller, 'action' => $action, $pageId],
                                    ['class' => '', 'escape' => false]
                                ); ?>
                            <?php elseif (I18n::getLocale() == 'vi_VN') : ?>
                                <?php echo $this->Html->link(
                                    '<img src="/img/image/flag/jp.png">',
                                    ['language' => 'ja', 'controller' => $controller, 'action' => $action, $pageId],
                                    ['class' => '', 'escape' => false]
                                ); ?>
                            <?php endif ?>
                        </li>
                        <!-- <li><a href="#" class="changelanguage" data-value="en"><img src="/img/image/flag/en.png"></a></li> -->
                    </ul>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button> <!-- /.navbar-toggle -->
                <!-- Logo -->
                <a style="display: none; color: #595959" id="logo-second-load" class="navbar-brand" href="<?= $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:toppage']) ?>">
                    <div class="wrap-logo">
                        <?= $this->Html->image('images/logo/logo-sm.png', ['style' => 'width: 35%', 'alt' => ''])  ?>
                        <span>PA</span>COM<br>
                        <span class="wrap-solutions">SOLUTIONS</span>
                    </div>
                </a>
                <a style="color: #595959" id="logo-first-load" class="navbar-brand" href="<?= $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:toppage']) ?>">
                    <div class="wrap-logo">
                        <?= $this->Html->image('images/logo/logo-sm.png', ['style' => 'width: 35%', 'alt' => ''])  ?>
                        <span>PA</span>COM<br>
                        <span class="wrap-solutions">SOLUTIONS</span>
                    </div>
                </a>
                <!-- /.navbar-brand -->
            </div> <!-- /.navbar-header -->

            <nav class="collapse navbar-collapse" role="navigation">
                <!-- Main navigation -->
                <ul id="headernavigation" class="nav navbar-nav pull-right padding14">
                    <li class="<?= (strpos($url, '/company/intellect') !== false) ? 'active' : '' ?>">
                        <?php echo $this->Html->link(__('company_info'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:information'], ['class' => '', 'escape' => false]); ?>
                    </li>
                    <li class="<?= (strpos($url, '/introductions') !== false) ? 'active' : '' ?> menu-item-has-children">
                        <?php echo $this->Html->link(__('introduction'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web'], ['class' => '', 'escape' => false]); ?>

                        <?php if (true) : ?>
                            <ul class="sub-menu menu-child">
                                <li class="<?= ($url == '/introductions/sys_web') ? 'active' : '' ?>">
                                    <?php echo $this->Html->link(__('sys_web'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web'], ['class' => '', 'escape' => false]); ?>
                                </li>
                                <li class="<?= ($url == '/introductions/sys_business') ? 'active' : '' ?>">
                                    <?php echo $this->Html->link(__('sys_business'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_business'], ['class' => '', 'escape' => false]); ?>
                                <li class="<?= ($url == '/introductions/app') ? 'active' : '' ?>">
                                    <?php echo $this->Html->link(__('sys_app'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_app'], ['class' => '', 'escape' => false]); ?>
                                </li>
                                <li class="<?= ($url == '/introductions/ai') ? 'active' : '' ?>">
                                    <?php echo $this->Html->link(__('sys_ai'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_ai'], ['class' => '', 'escape' => false]); ?>
                                </li>
                            </ul>
                        <?php endif; ?></li>
                    <li class="<?= (strpos($url, '/developments') !== false) ? 'active' : '' ?> menu-item-has-children">
                        <?php echo $this->Html->link(__('ex_development'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_sys_web'], ['class' => '', 'escape' => false]); ?>

                        <?php if (true) : ?>
                            <ul class="sub-menu menu-child">
                                <li class="<?= ($url == '/developments/sys_web') ? 'active' : '' ?>">
                                    <?php echo $this->Html->link(__('sys_web'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_sys_web'], ['class' => '', 'escape' => false]); ?>

                                </li>
                                <li class="<?= ($url == '/developments/sys_business') ? 'active' : '' ?>">
                                    <?php echo $this->Html->link(__('sys_business'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_sys_business'], ['class' => '', 'escape' => false]); ?>

                                </li>
                                <li class="<?= ($url == '/developments/app') ? 'active' : '' ?>">
                                    <?php echo $this->Html->link(__('sys_app'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_app'], ['class' => '', 'escape' => false]); ?>

                                </li>
                                <li class="<?= ($url == '/developments/ai') ? 'active' : '' ?>">
                                    <?php echo $this->Html->link(__('sys_ai'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_ai'], ['class' => '', 'escape' => false]); ?>

                                </li>
                            </ul>
                        <?php endif; ?></li>
                    <li class="<?= ($url == '/news') ? 'active' : '' ?>">
                        <?php echo $this->Html->link(__('news'), ['language' => I18n::getLocale(), 'controller' => 'News', 'action' => 'index', 'news:index'], ['class' => '', 'escape' => false]); ?>
                    </li>

                    <?php if (false) : ?>
                        <li class="<?= ($url == '/company/recruitment') ? 'active' : '' ?>">
                            <?php echo $this->Html->link(__('採用情報'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:recruitment'], ['class' => '', 'escape' => false]); ?>
                        </li>
                    <?php endif; ?>

                    <?php if (false) : ?>
                        <li class="<?= ($url == '/company/testimonial') ? 'active' : '' ?>">
                            <?php echo $this->Html->link(__('お客様の声'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:testimonial'], ['class' => '', 'escape' => false]); ?>
                        </li>
                    <?php endif; ?>

                    <li class="<?= ($url == '/company/contacts') ? 'active' : '' ?>">
                        <?php echo $this->Html->link(__('contact'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:contacts'], ['class' => '', 'escape' => false]); ?>
                    </li>

                    <li class="lang">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php if (I18n::getLocale() == 'ja') : ?>
                                <?= $this->Html->image('/img/image/flag/jp.png', array('alt' => 'JP')); ?>
                            <?php elseif (I18n::getLocale() == 'vi_VN') : ?>
                                <?= $this->Html->image('/img/image/flag/vi.png', array('alt' => 'VI')); ?>
                            <?php endif; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu show-flag">
                            <li>
                                <?php if (I18n::getLocale() == 'ja') : ?>
                                    <?php echo $this->Html->link(
                                        $this->Html->image('/img/image/flag/vi.png', array('alt' => 'VI')),
                                        ['language' => 'vi_VN', 'controller' => $controller, 'action' => $action, $pageId],
                                        ['class' => '', 'escape' => false]
                                    ); ?>
                                <?php elseif (I18n::getLocale() == 'vi_VN') : ?>
                                    <?php echo $this->Html->link(
                                        $this->Html->image('/img/image/flag/jp.png', array('alt' => 'JP')),
                                        ['language' => 'ja', 'controller' => $controller, 'action' => $action, $pageId],
                                        ['class' => '', 'escape' => false]
                                    ); ?>
                                <?php endif ?>
                            </li>
                            <!-- <li><a href="#" class="changelanguage" data-value="en"><img src="/img/image/flag/en.png"></a></li> -->
                        </ul>
                    </li>

                </ul> <!-- /.nav .navbar-nav -->

            </nav> <!-- /.navbar-collapse  -->


        </div> <!-- /.container -->

    </div><!-- /#main-menu -->
</div><!-- /.main-menu-continer -->