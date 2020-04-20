<?php

/**
 * BudgetReport is a high-level class and depends on MySQLDatabase
 * which is low-level class. This breaks the dependency inversion principle.
 * If I want to change the database system to PostgreSQL for example, I will have to change
 * this class and all the references to MySQL from the code.
 * Both classes would depend on abstractions.
 */
class BudgetReport {
    
    private $db;

    public function __construct(MySQLDatabase $db)
    {
        $this->db = $db;
    }

    public function open()
    {
        echo "open report";
    }

    public function save()
    {
        echo "save report";
    }
}