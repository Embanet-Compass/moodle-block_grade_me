<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
 
/**
 * TODO
 *
 * @package   TODO_FRANKENSTYLE
 * @copyright TODO
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();
 
$plugin->version   = 2012071800;
$plugin->requires  = 2010112400; // See http://docs.moodle.org/dev/Moodle_Versions
$plugin->cron      = 0;
$plugin->component = 'block_grade_me';
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '3.3 (Build: 2012071800)';
 
$plugin->dependencies = array(
    'mod_assignment' => 'ANY_VERSION',
    'mod_data'  => 'ANY_VERSION',
    'mod_forum' => 'ANY_VERSION',
    'mod_glossary' => 'ANY_VERSION',
    'mod_quiz' => 'ANY_VERSION'
);