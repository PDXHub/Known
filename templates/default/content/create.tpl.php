<?php

    if (!empty($vars['contentTypes']) && is_array($vars['contentTypes'])) {

?>
<div class="buttonBar">
    <div id="contentTypeButtonBar">
        <?php

            foreach ($vars['contentTypes'] as $contentType) {
                /* @var Idno\Common\ContentType $contentType */
                ?>

                <a class="contentTypeButton" id="<?= $contentType->getClassSelector() ?>Button"
                   href="<?=$contentType->getEditURL()?>"
                   onclick="contentCreateForm('<?=$contentType->camelCase($contentType->getEntityClassName())?>'); return false;">
                    <span class="contentTypeLogo"><?= $contentType->getIcon() ?></span>
                    <?= $contentType->getTitle() ?>
                </a>

            <?php

            }

        ?>
        <br clear="all" style="line-height: 0em"/>
    </div>
    <?php

        }

    ?>
</div>
<div id="contentCreate"></div>