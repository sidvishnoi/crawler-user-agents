<?php
if (!function_exists('get_crawler_user_agents_list')) {
    function get_crawler_user_agents_list() {
        return json_decode(file_get_contents('crawler-user-agents.json'), true);
    }
}