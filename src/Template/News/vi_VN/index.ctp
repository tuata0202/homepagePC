<?php

/**
 * @var App\View\AppView $this
 */
$breadcrumb = [
    [
        'url' => '',
        'text' => 'Tin tức',
    ],
];
?>
<?= $this->element('/menu_no_header') ?>
<div class="container-fluid padding0">
    <div class="padding-top80 banner-top1">
        <h1 class="text-center">Tin tức</h1>
    </div>
    <?= $this->element('/breadcrumb', ['breadcrumb' => $breadcrumb]) ?>
</div>
<div class="container mar-bt-40 toppage-new project-slider">
    <?php
    $news = array(
        'news1.jpg',
        'news2.jpg',
        'news3.jpg',
        'news4.jpg',
        'news5.jpg',
        'news6.jpg',
        'news7.jpg',
        'news8.jpg',
        'news9.jpg',
        'news10.jpg'
    );
    ?>
    <section id="section-news" class="toppage-new project-slider">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3 id="section-title">TIN TỨC</h3>
            </div>
            <div class="row elementor-row projects-style-1">
                <div class="col-md-12">
                    <?php
                    foreach ($news as $key => $value) {
                    ?>
                        <div class="col-md-3">
                            <div class="img-thumbnail img-news">
                                <a href="<?= Cake\Routing\Router::url('/', true) . '/img/news/' . $value ?>" class="group1">
                                    <?php
                                    echo $this->Html->image('news/' . $value);
                                    ?>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->element('contact') ?>
<?= $this->Html->script('jquery.colorbox-min') ?>
<?php echo $this->Html->css('colorbox') ?>
<script>
    (function($) {
        $(document).ready(function() {
            $(".group1").colorbox({
                rel: 'group1',
                transition: "none",
                width: "50%",
                height: "75%"
            });
        })
    })(jQuery)
</script>