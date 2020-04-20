<?php

class PostgreSQL implements DBInterface {

    public function insert()
    {
        echo "insert row in PostgreSQL";
    }

    public function update()
    {
        echo "update row in PostgreSQL";
    }

    public function delete()
    {
        echo "delete row in PostgreSQL";
    }
}