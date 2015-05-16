<?php
    style('ocdownloader', 'styles');
    script('ocdownloader', 'script');
?>
<div id="app" class="ocd">
    <div id="app-navigation">
        <?php print_unescaped($this->inc('part.navigation')); ?>
    </div>
    <div id="app-content">
        <div id="app-content-wrapper">
            <div class="jumbotron">
                <h1>Manage Your Downloads Anywhere!</h1>
                <p class="lead">Enough dealing with tricky downloads syntax. Manage your downloads via the web easily with <a href="http://aria2.sourceforge.net/manual/en/html/aria2c.html" target="_blank">ARIA2</a>.</p>
            </div>
            <div id="controls">
                <div class="actions">
                    <div id="loadtext" style="<?php print($_['NBELT'] > 0 ? 'display: block;' : 'display: none;'); ?>">Loading ...</div>
                </div>
                <div class="righttitle">Removed Downloads</div>
            </div>
            <div class="content-queue">
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th width="20%">ID</th>
                            <th width="10%" class="border">PROTOCOL</th>
                            <th width="60%" class="border">INFO</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($Row = $_['QUEUE']->fetchRow()): ?>
                        <tr data-rel="<?php print($Row['GID']); ?>">
                            <td data-rel="NAME"><?php print($Row['FILENAME']); ?></td>
                            <td data-rel="PROTO" class="border"><?php print($Row['PROTOCOL']); ?></td>
                            <td data-rel="MESSAGE" class="border">N/A</td>
                            <td data-rel="ACTION"></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>