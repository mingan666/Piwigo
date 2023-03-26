<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo.                                          |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+

require_once "include/ws_protocols/json_encoder.php";

class PwgJsonEncoder extends PwgJsonEncoder
{
  function getContentType()
  {
    return 'application/json';
  }
}

?>
