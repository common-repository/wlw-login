<?php
/*
Plugin Name: WLW Login
Plugin URI: http://www.kruse-net.dk/wordpress-plugins/wlw-login/
Description: Includes the Windows Live Writer manifest link on the login page also, for secured blogs.
Version: 1.0
Author: Jakob Kruse
Author URI: http://www.kruse-net.dk/
*/
?>
<?php
/*  Copyright 2007  Jakob Kruse  (email : kruse@kruse-net.dk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
add_action('login_head', 'rsd_link');
add_action('login_head', 'wlwmanifest_link');
?>