
<div class="breadcrumb-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?= $this->Html->link('Trang chủ',$lang."/toppage")?></li>
        <?php $breadcrumb = isset($breadcrumb) ? $breadcrumb : []; foreach($breadcrumb as $k => $v) : ?>
            <li class="breadcrumb-item">
                <?php if ($v['url']) :  ?>
                    <?= $this->Html->link($v['text'],$v['url'])?>
                <?php else : echo $v['text']; endif; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</div>