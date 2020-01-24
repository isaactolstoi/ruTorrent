<?php

    $_uname = posix_uname();
    $_pw = posix_getpwuid(posix_geteuid());

    @define('HTTP_USER_AGENT', 'Mozilla/5.0 (Linux x86_64; '.$_uname['nodename'].'; compatible) rutorrent/3.10-beta', true);
    @define('HTTP_TIME_OUT', 30, true);

    @define('HTTP_USE_GZIP', false, true);
    @define('PHP_USE_GZIP', false, true);
    @define('PHP_GZIP_LEVEL', 2, true);

    @define('RPC_TIME_OUT', 20, true);
    @define('LOG_RPC_CALLS', false, true);
    @define('LOG_RPC_FAULTS', true, true);

    $httpIP = null;
    $schedule_rand = 10;

    $do_diagnostic = true;
    $log_file = 'rutorrent.log';

    $saveUploadedTorrents = true;
    $overwriteUploadedTorrents = false;

    $topDirectory = $_pw['dir'];
    $forbidUserSettings = false;

    $scgi_port = 0;
    $scgi_host = 'unix://'.$_pw['dir'].'/private/rtorrent/.socket';
    $XMLRPCMountPoint = $_pw['name'].'/rtorrent/rpc';

    //Leave blank to find in path, edit if you wish to use your own
    $pathToExternals = array(
        'php'       => '',
        'curl'      => '',
        'gzip'      => '',
        'id'        => '',
        'stat'      => '',
        'mediainfo' => '',
    );

    $localhosts = array(
        '127.0.0.1',
        'localhost',
    );

    $profilePath = '../share';
    $profileMask = 0700;
    $tempDirectory = 'tmp';
    $canUseXSendFile = false;
    $locale = 'UTF8';
