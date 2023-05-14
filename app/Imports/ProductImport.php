<?php

namespace App\Imports;

use App\Products;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Products([
            'product_name' => $row[1],
            'price' => $row[2],
            'description' => $row[3],
            'stock' => $row[7],
            'weight' => $row[8],
        ]);
    }
}