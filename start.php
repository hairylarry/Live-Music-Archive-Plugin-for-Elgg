<?php
function live_music_archive_init() {        
    elgg_register_widget_type('lmawidget', 'Live Music Archive Widget', 'The "Live Music Archive" widget');
}
 
elgg_register_event_handler('init', 'system', 'live_music_archive_init');       
?>
