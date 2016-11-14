<?php
/**
 * Elgg MembersMap Plugin
 * @package groupsmap 
 *
 * uses
 * $vars['object_x']
 * $vars['entity']
 *
 */

$output = $vars['object_x']['icon'].' <b><a href="'.$vars['object_x']['url'].'">'.$vars['object_x']['title'].'</a></b>';
$output .= ($vars['object_x']['location']?'<br/><i>'.$vars['object_x']['location']:'').'</i>';
$output .= ($vars['object_x']['other_info']?'<br/>'.$vars['object_x']['other_info']:'');
$output .= ($vars['object_x']['description']?'<br/>'.$vars['object_x']['description']:'');

echo $output;

