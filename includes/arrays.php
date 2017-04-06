<?php
$questions = array(
    "q1" => array(
        'title' => "Question 1",
        'question' => "In all cases show the contents of the original tables before the query is executed and the results after the query is executed:<br />
        (a) A query that involves one table only <br/>
        (b) A query that uses the GROUP construct and two or more aggregation operators on a single table <br/>
        (c) A query that uses the GROUP construct and two or more aggregation operators that require data from two or more tables <br/>
        (d) A query that uses the HAVING construct <br/>
        (e) A query that requires a join operation on two or more tables (it can be any kind of join as long as it serves a useful purpose<br/>" ),
   "q2" => array(
       'title' => "Question 2",
       'question' => "In all cases show the contents of the viewand the base table before the query is executed and afterthe query is executed:<br/>
       (a) Create a view from a single table <br/>
       (b) Aquery on the view created in 2(a) above. <br/> 
       (c) Create a view on two or more tables <br/>
       (d) A query on the view created in 2(c) above that modifies the view by inserting a new row. <br/>" ),
    "q3" =>array(
        'title' => "Question 3",
        'question' => "Implement the following queries that change the schema of tables or the database <br/>
        (a) Add a new table or relation to the database. Show the tablesin the databaseb eforeand afterthe new table is added <br/>
        (b) Delete a table or relation from the database. Show the tablesin the database before and after the table is deleted <br/>
        (c) Add a new field to a table schema. Display the contents of the original tableand the modified table <br/>
        (d) Delete a field from a table schema. Display the contents of the original table and the contents of the modified table <br/>" ),
    "q4" =>array(
        'title' => "Question 4",
        'question' => "Implement the following indexes. In both cases run a query that uses the index. Display the results of the query <br/>
        (a) An index on the primary key <br/>
        (b) An index on the secondary key <br/>" ),
    "q5" =>array(
        'title' => "Question 5",
        'question' => "Implement the following types of queries. In both cases show the contents of the tables before the query is executed and    the results after the queryis executed: <br/>
        (a) A subquery that uses at least two tables <br/>
        (b) A correlated subquery that uses at least two table<br/>"),
    "q6" =>array(
        'title' => "Question 6",
        'question' => "Implement a Trigger <br/>"),

);

?>