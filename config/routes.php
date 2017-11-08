<?php

use NoahBuscher\Macaw\Macaw;

/**
 * 配置新路由需要在命令行执行 composer dump-autoload
 */

Macaw::get('fuck', function() {
  echo "成功！";
});

Macaw::get('', 'HomeController@home');

Macaw::get('(:all)', 'ErrorController@error');

Macaw::dispatch();