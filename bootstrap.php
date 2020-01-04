<?php

require 'database/Connection.php';

require 'database/QueryBuilder.php';


return $query = new QueryBuilder(

    Connection::make()

);
