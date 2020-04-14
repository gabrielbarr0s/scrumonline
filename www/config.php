<?php
// database configuration parameters
$conn = array(
    'dbname' => 'scrumonline',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

// This is used to create the join link
$host = "https://planningpoker.barros.me";

$cardSets = [
    // Card set used to estimate hours as different fractions and multiples of a working day
    ['0','1/2','1','2','4','8','12','24','36','60','&#8734;','?','&#9749;'],
    // Standard fibonaci like series of values
    ['0','1', '2', '3', '5', '8', '13', '20', '40', '100','&#8734;','?','&#9749;'],
    // Powers of two used by other teams
    ['0' ,'1', '2', '4', '8', '16', '32', '64','&#8734;','?','&#9749;'],
    // Demonstration of the coffee cup card
    ['XXS','XS', 'S', 'M', 'L', 'XL', 'XXL','&#8734;','?','&#9749;'],
    // Fibonacci number
    ['1', '2', '3', '5', '8', '13', '21', '34', '55', '89', '144','&#8734;','?','&#9749;'],
    // Fibonaci series including 0.5
    ['0.5', '1', '2', '3', '5', '8', '13', '20', '40', '100','&#8734;','?','&#9749;'],
    // Canadian Cash format
    ['1', '2', '5', '10', '20', '50', '100','&#8734;','&#9749;','?']
];

// Src tree for documentation linking from page
$src = "https://github.com/Toxantron/scrumonline/tree/master";

// Active ticketing plugins of the page
$plugins = [
    // Plugin to load issues from github
    'GitHub',
    // Plugin to load issues from JIRA
    'JIRA',
    // Plugin to load issues from Gitlab
    'Gitlab'
];

// Configuration for the server side JIRA controller
$jiraConfiguration = [
    'base_url' => '',
    'username' => '',
    'password' => '',
    'project' => '',
    'jql' => '',
];
