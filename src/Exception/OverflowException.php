<?php
/**
 * This file is a part of the Ophp framework
 *
 * @package Ophp\WP\Debug\Exception
 */
namespace Ophp\WP\Debug\Exception;

/**
 * Exception thrown when adding an element to a full container.
 * This represents errors that cannot be detected at compile time.
 */
class OverflowException extends \OverflowException implements ExceptionInterface
{
}
