<?php
// include ('engine.php');
header('Content-Type: text/html; charset=' . Engine_config::$mbencoding);
echo Engine::get_requested_instance();
