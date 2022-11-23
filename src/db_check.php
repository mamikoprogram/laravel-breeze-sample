<?php

echo PHP_EOL.'<><><><><><><><><><><>'.PHP_EOL;

try {
    DB::statement('select now()');
    echo 'DB接続チェック： OK';
} catch (Exception $e) {
    echo 'DB接続チェック： エラーが発生しました';
}

echo PHP_EOL.'<><><><><><><><><><><>'.str_repeat(PHP_EOL, 2);
exit;
