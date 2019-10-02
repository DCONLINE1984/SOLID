<?php

/**
 * Class PasswordReminder
 *
 * @author Dean Clow
 */

class PasswordReminder
{
    private $dbConnection;

    /**
     * PasswordReminder constructor.
     *
     * @param DBConnectionInterface $dbConnection
     * @return void
     */
    public function __construct(DBConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}

//High level and low level modules depend on abstraction.