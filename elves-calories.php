<?php
/* Day 1: Calorie Counting (https://adventofcode.com/2022/day/1)
# Conditions:
# - The input file represents inventories
# - Inventory consists of calories seperated by new line
# - Each inventory is seperated by empty line */ 

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    // die();
}; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Advent of Code day 01 2022 (?)</title>
    </head>
    <body>


        <h1><?php echo "Advent of code, day 01."; ?></h1>


        <?php
            $myInput = fopen("input", "r") or die("Unable to open file!");
        function task1($file, $file_name){
            $inventory = 0;
            $biggest_inventory = 0;
            foreach(preg_split("/((\r?\n)|(\r\n?))/", fread($file, filesize($file_name))) as $line){
                if($line == ""){
                    // die();
                    // echo 'if working';
                    if ( $biggest_inventory < $inventory){
                        $biggest_inventory = $inventory;
                    }
                    $inventory = 0;
                } else {
                    // echo 'now my else works';
                    $inventory += $line;
                    // dd($inventory);
                }
            } 
        
            return $biggest_inventory;
        }
        function task2($file, $file_name){
            $inventory = 0;
            $inventory_list = [];
            foreach (preg_split("/((\r?\n)|(\r\n?))/", fread($file, filesize($file_name))) as $line) {
                // if(("/((\r?\n)|(\r\n?))/")){
                if(($line === "")){
                    // echo ' lol ';
                    // dd($line);
                    array_push($inventory_list, $inventory);
                    // dd($line);
                    $inventory = 0;
                }

                else {
                    // echo 'ITS NOT ON';
                    $inventory += $line;
                    // dd($inventory);
                }
                            
            }   
        }
        ?> 
        <?php
        // echo empty(task1($myInput, "input"));
        // dd(task1($myInput, "input"));

        echo task1($myInput, "input"); ?><br><?php # Task 1 completed
        echo task2($myInput, "input"); ?>
        <!-- <h1>Task number 1 result: <?php echo task1($myInput, "input") ; ?></h1> -->
        <!-- <h1>Task number 2 result: <?php echo task2($myInput, "input") ; ?></h1> -->
      
    </body>
</html>
