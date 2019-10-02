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
     * @param MySQLConnection $dbConnection
     * @return void
     */
    public function __construct(MySQLConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}

/*
The password reminder class depends on the MySQLConnection class which is wrong wrong wrong!

The MySQLConnection is the low level module while the PasswordReminder is high level, but according to the
definition of D in S.O.L.I.D. which states that Depend on Abstraction not on concretions, this snippet above violates
this principle as the PasswordReminder class is being forced to depend on the MySQLConnection class.

Later if you were to change the database engine, you would also have to edit the PasswordReminder class and thus
violates Open-close principle.

The PasswordReminder class should not care what database your application uses, to fix this again we
"code to an interface", since high level and low level modules should depend on abstraction, we can create an interface
*/