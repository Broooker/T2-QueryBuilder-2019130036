<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::select("SELECT * FROM employees");
        return view('employee', compact('employees'));

        dump($employees);
    }

    public function insert()
    {
        // $result = DB::insert(
        //     "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
        //     created_at, updated_at)
        //     VALUES ('IT001', 'Charles Bastian', '20 Maret 2001', 'IT', '1 Januari 2019', 1, NOW(), NOW())"
        // );

        // dump($result);

        // $result = DB::insert(
        //     "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status) VALUES
        //     (?, ?, ?, ?, ?, ?)",
        //     [
        //     'Food by Fire: Grilling and BBQ with Derek Wolf of Over the Fire Cooking',
        //     '9781592339754',
        //     'Meat Cooking',
        //     310750,
        //     208,
        //     1
        //     ]
        //     );
        //     dump($result);
    }

    public function insertTimestamp()
    {
        $result = DB::insert(
            "INSERT INTO books (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
            created_at, updated_at)
            VALUES ('Economic Dignity', '9781984879875', 'Business & Leadership',
        222900, 384, 'Penguin Press', NOW(), NOW())"
        );
        dump($result);
    }
}
