<?php

class MySQL implements DBInterface {

    public function insert()
    {
        echo "insert row in MySQL";
    }

    public function update()
    {
        echo "update row in MySQL";
    }

    public function delete()
    {
        echo "delete row in MySQL";
    }
}