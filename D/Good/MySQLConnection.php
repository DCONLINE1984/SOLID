<?php

/**
 * Class MySQLConnection
 *
 * @author Dean Clow
 */

class MySQLConnection implements DBConnectionInterface
{
    /**
     * Connect to db
     * @return string
     */
    public function connect() {
        return "Database connection";
    }
}

//High level and low level modules depend on abstraction.