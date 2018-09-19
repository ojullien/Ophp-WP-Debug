<?php
/**
 * This file is a part of the Ophp framework
 *
 * @package Ophp\WP\Debug\Exception
 */
namespace Ophp\WP\Debug\Exception;

/**
 * Exception thrown if an error which can only be found on runtime occurs.
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
