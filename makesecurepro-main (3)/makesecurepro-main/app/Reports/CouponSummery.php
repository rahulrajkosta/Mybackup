<?php

namespace App\Reports;

// Create a file named CouponAllocationReport.php

use \koolreport\KoolReport;

class CouponSummery extends KoolReport
{
    public function settings()
    {
       
        return [
            'dataSources' => [
                'myData' => [
                    'class' => \koolreport\datasources\PdoDataSource::class,
                    'connectionString' => 'mysql:host=localhost;dbname=makesecurepro',
                    'username' => 'root',
                    'password' => 'vertrigo',
                    'params' => [
                        ':role' => $this->params['role'],
                    ],
                ],
            ],
        ];
    }

    // public function setup()
    // {
    //     $role = $this->params['role'];

    //     $this->src("myData")
    //         ->query("SELECT `id` FROM `admins` WHERE `role_id` = ".$role." ")
    //         ->pipe($this->dataStore("role_data"));
    //     echo "<pre>";
    //     print_r($this->dataStore("role_data")->toArray());
    //     die("====");
    //     $this->src("myData")
    //         ->query("SELECT * FROM admins WHERE role_id = :role")
    //         ->params(array(":role" => $role))
    //         ->pipe($this->dataStore("admins_data"));
    // }
}
