<?php

/**
 * Interface DBConnectionInterface
 *
 * @author Dean Clow
 */

interface DBConnectionInterface
{
    public function connect();
}

/*
The interface has a connect method and the MySQLConnection class implements this interface, also instead of directly
type-hinting MySQLConnection class in the constructor of the PasswordReminder, we instead type-hint the interface and
no matter the type of database your application uses, the PasswordReminder class can easily connect to the database
without any problems and OCP is not violated.
*/