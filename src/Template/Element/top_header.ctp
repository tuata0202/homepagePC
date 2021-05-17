<?php

/**
 * @var App\View\AppView $this
 */
$url = $this->request->getRequestTarget();
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');

use Cake\I18n\I18n;
?>
    <!-- id="main-menu" -->
<div class="header-topbar style-2 ">
    <div class="octf-area-wrap">
        <div class="container">
            <!-- contact info -->
            <ul class="topbar-info clearfix">
                <li>
                    <i class="fa fa-envelope"></i> <a href="sale@pacom-solution.com ">sale@pacom-solution.com</a> </li>
                <li>
                    <i class="fa fa-clock-o"></i> Mon - Sat: 8.30 am - 5.30 pm </li>
            </ul>
            <!-- contact info close -->

            <!-- social icons -->
            <ul class="social-list">
                <li><a href="http://twitter.com" target="_self"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="https://www.facebook.com/PacomSolutions" target="_self"><i class="fa fa-facebook-f"></i></a>
                </li>
                <li><a href="http://linkedin.com" target="_self"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="http://instagram" target="_self"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
            <!-- social icons close -->
        </div>
    </div>
</div>