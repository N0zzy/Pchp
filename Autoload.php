<?php

use System\Threading\Thread;
use Php\Program;

$thread = new Thread(function(){
    (new Program())->main();
}); 
$thread->Start();

