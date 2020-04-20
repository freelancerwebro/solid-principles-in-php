<?php

/**
 * BudgetReport class depends on an abstraction. It's easier to change the DB system now. 
 * When we create an instance of BudgetReport class, we need to pass an object of PostgreSQL
 * to this class, instead of MySQL.
 */
class BudgetReport {
    
    private $db;

    public function __construct(DBInterface $db)
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