<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class trackerController extends Controller
{

    public function index (){
        return view('tracker.tracker');
    }

    public function test (){
        $testData = DB::select('SELECT 
        gto.gb_tracing_id ,
        gto.client,
        gto.payment_condition_id ,
        gto.num_order ,
        gto.ad_employee_id ,
        gto.description,
        gto.quantity ,
        gto.amount ,
        gto.provider ,
        gto.date_of_purchase ,
        gto.tracking ,
        gto.status_id ,
        gto.estimated_date ,
        gto.arrival_date ,
        gto.in_house ,
        gto.ad_company_id,
        gto.isactive
        FROM 
        system.gb_tracing_order gto 
        INNER JOIN system.gb_payment_condition gpc ON (gpc.gb_payment_condition_id = gto.payment_condition_id)
        INNER JOIN system.gb_status gs ON (gs.gb_status_id = gto.status_id)
        INNER JOIN system.ad_employee ae ON (ae.ad_employee_id = gto.ad_employee_id)
        WHERE 
        gto.gb_tracing_id = 1');
        return $testData;
    }

    public function getTrackingInfo($trackingNumber){
        $testData = DB::select('SELECT 
        gto.gb_tracing_id ,
        gto.client,
        gto.payment_condition_id ,
        gto.num_order ,
        gto.ad_employee_id ,
        gto.description,
        gto.quantity ,
        gto.amount ,
        gto.provider ,
        gto.date_of_purchase ,
        gto.tracking ,
        gto.status_id ,
        gs.status,
        gto.estimated_date ,
        gto.arrival_date ,
        gto.in_house ,
        gto.ad_company_id,
        gto.isactive
        FROM 
        system.gb_tracing_order gto 
        INNER JOIN system.gb_payment_condition gpc ON (gpc.gb_payment_condition_id = gto.payment_condition_id)
        INNER JOIN system.gb_status gs ON (gs.gb_status_id = gto.status_id)
        INNER JOIN system.ad_employee ae ON (ae.ad_employee_id = gto.ad_employee_id)
        WHERE 
        gto.tracking_number = ?',[$trackingNumber]);
    return $testData;
    }


    
    public function getTrackingStatuses(){
        $testData = DB::select('SELECT 
        gto.status,
        gto.gb_status_id
        FROM 
        system.gb_status gto 
        WHERE 
        gto.isactive = ?',['Y']);
    return $testData;
    }

}
