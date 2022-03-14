<?php


function ln()
{
	echo '<br>';
}

function connectSql()
{
	require('includes/sqlConnect.php');
}

function querySql($q)
{
    require('includes/sqlQuery.php');
    
        
}

function cleanSqlResources()
{
    include('includes/cleanSqlResources.php');
}
    
    
    
    


?>