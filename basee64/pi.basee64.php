<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Foreecast Plugin
 *
 * @package     ExpressionEngine
 * @subpackage  Addons
 * @category    Plugin
 * @author		  Lee Hilton
 * @link		    http://jeetkunecode.com/products/basee64
 */

$plugin_info = array(
  'pi_name'        => 'BasEE64',
  'pi_version'     => '1.0.0',
  'pi_author'      => 'Lee Hilton',
  'pi_author_url'  => 'http://jeetkunecode.com/products/basee64',
  'pi_description' => 'BasEE64 encodes and decodes data via the php base64_encode() and base64_decode() function.',
  'pi_usage'       => BasEE64::usage()
);

/**
 * BasEE64 encodes and decodes data via the php base64_encode() and base64_decode() function.
 *
 * @package BasEE64
 */
class BasEE64 {

  public function __construct() {
    $this->EE =& get_instance();
  }

  public function encode() {
    return base64_encode($this->EE->TMPL->tagdata);
  }

  public function decode() {
    return base64_decode(trim($this->EE->TMPL->tagdata));
  }

  /**
   * ExpressionEngine plugins require this for displaying
   * usage in the control panel
   * @access public
   * @return string
   */
    public function usage()
  {
    ob_start();
?>
BasEE64 encodes and decodes data via the php base64_encode() and base64_decode() function.

------------------------------------------------------------------------------------
------------------------------------------------------------------------------------

Example of encoding:

    {exp:basee64:encode}
    This<br>
    is<br>
    on<br>
    many<br>
    lines
    {/exp:basee64:encode}

Will result in the string:

    ICAgIFRoaXM8YnI+DQogICAgaXM8YnI+DQogICAgb248YnI+DQogICAgbWFueTxicj4NCiAgICBs
aW5lcw==

------------------------------------------------------------------------------------
------------------------------------------------------------------------------------

Example of decode:

    {exp:basee64:decode}
    ICAgIFRoaXM8YnI+DQogICAgaXM8YnI+DQogICAgb248YnI+DQogICAgbWFueTxicj4NCiAgICBs
aW5lcw==
    {/exp:basee64:decode}

Will result in the string:

    This<br>
    is<br>
    on<br>
    many<br>
    lines

------------------------------------------------------------------------------------
------------------------------------------------------------------------------------

Example of recursion:

    {exp:basee64:decode}
      {exp:basee64:encode parse="inward"}
      This<br>
      is<br>
      on<br>
      many<br>
      lines
      {/exp:basee64:encode}
    {/exp:basee64:decode}

<?php
    $buffer = ob_get_contents();
    ob_end_clean();
    return $buffer;
  }

}

/* End of file pi.basee64.php */
/* Location: ./system/expressionengine/third_party/basee64/pi.basee64.php */