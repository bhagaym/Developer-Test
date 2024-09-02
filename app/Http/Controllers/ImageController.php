<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\DataTables\ImagesDataTable;

class ImageController extends Controller
{
    public function index(ImagesDataTable $dataTable)
    {
        return $dataTable->render('pages/images.list');
    }
}
