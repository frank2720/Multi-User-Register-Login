<?php
function customers()
{
    $sql = 'SELECT *
            FROM customer';

        $statement = db()->prepare($sql);
        $statement->execute();

       $customers = $statement->fetchAll(PDO::FETCH_ASSOC);

       return $customers;
}

function suppliers()
{
    $sql = 'SELECT *
            FROM supplier';

        $statement = db()->prepare($sql);
        $statement->execute();

       $suppliers = $statement->fetchAll(PDO::FETCH_ASSOC);

       return $suppliers;
}

function ShopOwners()
{
    $sql = 'SELECT *
            FROM shopowner';

        $statement = db()->prepare($sql);
        $statement->execute();

       $shopOwners = $statement->fetchAll(PDO::FETCH_ASSOC);

       return $shopOwners;
}