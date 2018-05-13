<?php
defined('_JEXEC') or die;


    // Start import SQL file query
    $db = JFactory::getDbo();

    $filePath=JPATH_COMPONENT_ADMINISTRATOR."/sql/import.sql";

    $sql_data = file($filePath);

    // Loop through each line
    foreach ($sql_data as $data){

        // Skip it if it's a comment
        if(substr($data, 0, 2) == '--' || $data == ''){
            continue;
        }
        
        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($data), -1, 1) == ';'){
            // Perform the query
            if(!$db->setQuery($data)){
                echo 'Error performing query';
            }
        }
    }
