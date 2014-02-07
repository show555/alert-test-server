<?php
/*
Plugin Name: Alert Test Server
Description: 管理画面にテスト環境の警告を出す
Version: 0.1
Author: Shogo Kato
*/

add_action( 'admin_notices', 'display_test' );
function display_test() {
	echo "<div id=\"message\" class=\"error\"><p><strong>テスト環境です</strong></p></div>\n";
}