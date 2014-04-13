<?php
/**
 * Js Resource
 *
 * @author Andres Gutierrez <andres@phalconphp.com>
 * @author Eduar Carvajal <eduar@phalconphp.com>
 * @author Wenzel Pünter <wenzel@phelix.me>
 * @version 1.2.6
 * @package Phalcon
*/
namespace Phalcon\Assets\Resource;

use \Phalcon\Assets\Resource,
	\Phalcon\Assets\Exception;

/**
 * Phalcon\Assets\Resource\Js
 *
 * Represents Js resources
 * 
 * @see https://github.com/phalcon/cphalcon/blob/1.2.6/ext/assets/resource/js.c
 */
class Js extends Resource
{
	/**
	 * \Phalcon\Assets\Resource\Js
	 *
	 * @param string $path
	 * @param boolean|null $local
	 * @param boolean|null $filter
	 * @param array|null $attributes
	 * @throws Exception
	 */
	public function __construct($path, $local = null, $filter = null, $attributes = null)
	{
		/* Type check */
		if(is_string($path) === false) {
			throw new Exception('Invalid parameter type.');
		}

		if(is_null($local) === true) {
			$local = true;
		} elseif(is_bool($local) === false) {
			throw new Exception('Invalid parameter type.');
		}

		if(is_null($filter) === true) {
			$filter = true;
		} elseif(is_bool($filter) === false) {
			throw new Exception('Invalid parameter type.');
		}

		/* Call parent constructor */
		parent::__construct('js', $path, $local, $filter, $attributes);
	}
}