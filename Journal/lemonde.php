<div class="col-sm-12">
    <div class="card card-block h-100 justify-content-center">
        <div class="card-block">
            <center>
                <h3 class="card-title">Le Monde</h3>
                <img src="image/lemonde/photo.jpg" alt="Smiley face" height="50" width="50">
            </center>
        </div>
    </div>
</div>
<?php
$urlJournal = "http://www.lemonde.fr/technologies/rss_full.xml";
rssArticle($urlJournal);
require_once "database/database.php";
$id = 6;
saveArticle ($urlJournal, $id, $db_connection);