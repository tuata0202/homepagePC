<ul class="nav flex-column list-nav-left">
    <li class="nav-item <?= ($active == 'message') ? 'active' :  '' ?> ">
        <a class="nav-link" href="<?php echo $this->Url->build($lang.'/company/intellect/message') ?>">
            Lời nhắn từ lãnh đạo
        </a>
    </li>
    <li class="nav-item <?= ($active == 'manage') ? 'active' :  '' ?> ">
        <a class="nav-link" href="<?php echo $this->Url->build($lang.'/company/intellect/manage') ?>">
            Triết lý kinh doanh
        </a>
    </li>
    <li class="nav-item <?= ($active == 'profile') ? 'active' :  '' ?> ">
        <a class="nav-link" href="<?php echo $this->Url->build($lang.'/company/intellect/profile') ?>">
            Giới thiệu công ty
        </a>
    </li>
    <li class="nav-item <?= ($active == 'leader') ? 'active' :  '' ?> ">
        <a class="nav-link" href="<?php echo $this->Url->build($lang.'/company/intellect/leader') ?>">
            Ban lãnh đạo
        </a>
    </li>
</ul>