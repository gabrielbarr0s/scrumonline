<?php
// database configuration parameters
$conn = array(
    'dbname' => 'planningcards',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

// This is used to create the join link
$host = "https://planningpoker.barros.me";

$cardSets = [
    // Card set used to estimate hours as different fractions and multiples of a working day
    ['0','&#189;','1','2','4','8','12','24','36','60','&#8734;','?','&#9749;'],
    // Standard fibonaci like series of values
    ['0','&#189;','1', '2', '3', '5', '8', '13', '20', '40', '100','&#8734;','?','&#9749;'],
    // Powers of two used by other teams
    ['0','&#189;','1', '2', '4', '8', '16', '32', '64','&#8734;','?','&#9749;'],
    // Fibonacci number
    ['0','&#189;','1', '2', '3', '5', '8', '13', '21', '34', '55', '89', '144','&#8734;','?','&#9749;'],
    // Canadian Cash format
    ['0','&#189;','1', '2', '5', '10', '20', '50', '100','&#8734;','?','&#9749;'],
    // Demonstration of the coffee cup card
    ['XXS','XS', 'S', 'M', 'L', 'XL', 'XXL','&#8734;','?','&#9749;'],
    // Standard fibonacci with shrug
    ['1', '2', '3', '5', '8', '13', '&#F937;'],
    // Standard fibonaci like series of values with 0, 1/2, infinity, and shrug
    ['0', '1/2', '1', '2', '3', '5', '8', '13', '20', '40', '100', '&#8734;', '&#F937;'],
    // Decimal values representing number of dev weeks of effort
    ['0.1', '0.2', '0.5', '1', '2', '?']
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

//Configuration for Enable/Disable style elements
$layout_switch = [
    'enable_fork_banner' => true
];
