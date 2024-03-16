<?php
use koolreport\widgets\koolphp\Table;
use koolreport\widgets\google\BarChart;
?>

<h1>Role Closing Coupon Report</h1>

<?php
//$role = $request->input('role'); // Replace with how you get the role
$role = $this->params['role'];
$admins = DB::table('admins')
    ->select('id')
    ->where('role_id', $role)
    ->get();
   
$fields = ['SuperDistributor', 'Distributor', 'TSM', 'Seller', 'State', 'City', 'Total Coupon', 'Closing Coupons'];
$excelData = implode("\t", $fields) . "\n";
$fnl=array();
foreach ($admins as $admin) {
    $closing_coupon = 0;
    $total_coupon = 0;
    $super_dist_data = '';
    $dist_data = '';
    $tsm_data = '';
    $seller_data = '';
    $state_data = '';
    $city_data = '';

    if ($role == 2) {
        $superdistributor = DB::table('admins')
            ->select('no_of_coupons', 'state_id', 'city_id', 'business_name', 'unique_id')
            ->where('id', $admin->id)
            ->first();
            
        if (!empty($superdistributor->state_id)) {
            $state = DB::table('states')
                ->select('name')
                ->where('id', $superdistributor->state_id)
                ->first();
            $state_data = $state->name;
        }

        if (!empty($superdistributor->city_id)) {
            $city = DB::table('cities')
                ->select('*')
                ->where('id', $superdistributor->city_id)
                ->first();
            $city_data = isset($city->business_name) ? $city->business_name : "";
        }

        $super_dist_data = $superdistributor->business_name . " - " . $superdistributor->unique_id;
        $closing_coupon = $superdistributor->no_of_coupons;
        //$total_coupon = $superdistributor->total_assign_coupon;
    }

    if ($role == 3) {
        // Handle distributor role similarly...
    }

    // Handle other role conditions similarly...

    $lineData = [
        'SuperDistributor'=>$super_dist_data,
        'Distributor'=>$dist_data,
        'TSM'=>$tsm_data,
        'Seller'=>$seller_data,
        'State'=>$state_data,
        'City'=>$city_data,
        'Total'=>$total_coupon,
        'Closing'=>$closing_coupon
    ];
    $fnl=array_merge($fnl,$lineData);

    $excelData .= implode("\t", $lineData) . "\n";
}

if (empty($admins)) {
    $excelData .= 'No records found...' . "\n";
}
// print_r($lineData);
// die("==");
// Return the Excel data as a response or save it to a file, depending on your requirements.
// For example, you can use Laravel Excel package to export data to an Excel file.
// https://laravel-excel.com/
// return response($excelData, 200, [
//     'Content-Type' => 'text/plain',
//     'Content-Disposition' => 'attachment; filename="exported_data.txt"',
// ]);
print_r($fnl);
Table::create(array(
    "dataStore" => $fnl,
    "title" => "Closing Coupons"
));
?>
