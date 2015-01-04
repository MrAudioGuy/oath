<?php
	/**
	 * Created by PhpStorm.
	 * User: broth_000
	 * Date: 1/4/2015
	 * Time: 5:43 PM
	 */

	namespace MrAudioGuy\Oath;


	interface BaseConverterInterface
	{

		/**
		 * str2bin
		 *
		 * Converts any ascii string to a binary string
		 *
		 * @param string $str The string you want to convert
		 *
		 * @return string String of 0's and 1's
		 */
		public static function str2bin ($str);

		/**
		 * bin2str
		 *
		 * Converts a binary string to an ascii string
		 *
		 * @param string $str The string of 0's and 1's you want to convert
		 *
		 * @return string The ascii output
		 * @throws \Exception
		 */
		public static function bin2str ($str);

		/**
		 * fromBin
		 *
		 * Converts a correct binary string to base32
		 *
		 * @param string $str The string of 0's and 1's you want to convert
		 *
		 * @return string String encoded as base32
		 * @throws \Exception
		 */
		public static function fromBin ($str);

		/**
		 * toBin
		 *
		 * Accepts a base32 string and returns an ascii binary string
		 *
		 * @throws \Exception Must mach character set
		 *
		 * @param string $str The base32 string to convert
		 *
		 * @return string Ascii binary string
		 */
		public static function toBin ($str);

		/**
		 * fromString
		 *
		 * Convert any string to a base32 string
		 * This should be binary safe...
		 *
		 * @param string $str The string to convert
		 *
		 * @return string The converted base32 string
		 */
		public static function fromString ($str);

		/**
		 * toString
		 *
		 * Convert any base32 string to a normal sctring
		 * This should be binary safe...
		 *
		 * @param string $str The base32 string to convert
		 *
		 * @return string The normal string
		 */
		public static function toString ($str);

		/**
		 * setCharset
		 *
		 * Used to set the internal _charset variable
		 * I've left it so that people can arbirtrarily set their
		 * own charset
		 *
		 * Can be called with:
		 * * Base32::csRFC3548
		 * * Base32::csSafe
		 * * Base32::cs09AV
		 *
		 * @param string $charset The character set you want to use
		 *
		 * @throws \Exception
		 */
		public static function setCharset ($charset);
	}