<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
//define('__ReadMore__', ossn_route()->com . 'ReadMore/');



function ossn_ReadMore_init() {
	ossn_extend_view('css/ossn.default', 'css/readmore');
	ossn_extend_view('js/opensource.socialnetwork', 'js/needmore');
}


ossn_register_callback('ossn', 'init', 'ossn_ReadMore_init');
