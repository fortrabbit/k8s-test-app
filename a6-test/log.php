<?php
    error_log('BATS-LOG-error_log');
    file_put_contents("php://stderr", "BATS-LOG-stderr");
    file_put_contents("php://stdout", "BATS-LOG-stdout");
    syslog(LOG_ERR, "BATS-LOG-syslog");  // this shouldn't work
