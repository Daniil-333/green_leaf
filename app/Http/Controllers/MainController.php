<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\MenuItem;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'prioritizes' => $this->getItems(),
        ]);
    }

    private function getItems()
    {
        return [
           [
               'title' => 'Закупаем лекарства от 14 самых затратных редких болезней',
               'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
               'btn ' => 'Забота о каждом нуждающемся',
           ],
            [
                'title' => 'Закупаем лекарства от 15 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn ' => 'Забота о каждом нуждающемся',
            ],
            [
                'title' => 'Закупаем лекарства от 16 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn ' => 'Забота о каждом нуждающемся',
            ],
            [
                'title' => 'Закупаем лекарства от 17 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn ' => 'Забота о каждом нуждающемся',
            ],
            [
                'title' => 'Закупаем лекарства от 18 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn ' => 'Забота о каждом нуждающемся',
            ],
            [
                'title' => 'Закупаем лекарства от 19 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn ' => 'Забота о каждом нуждающемся',
            ],
            [
                'title' => 'Закупаем лекарства от 20 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn ' => 'Забота о каждом нуждающемся',
            ],
            [
                'title' => 'Закупаем лекарства от 21 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn ' => 'Забота о каждом нуждающемся',
            ],
        ];
    }
}