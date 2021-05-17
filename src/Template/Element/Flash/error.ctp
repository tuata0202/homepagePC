<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="flash_content">
    <div class="alert alert-danger" onclick="this.classList.add('hidden')">
        <?= $message ?>
    </div>
</div>
