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
            'filterPriority' => $this->getFilter(),
            'achievements' => $this->getItems(),
        ]);
    }

    private function getItems()
    {
        return [
           [
               'title' => 'Закупаем лекарства от 14 самых затратных редких болезней',
               'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
               'btn' => 'Забота о каждом нуждающемся',
               'img' => '1',
               'likes' => 125
           ],
            [
                'title' => 'Введен Единый электронный сертификат',
                'desc' => 'Введен Единый электронный сертификат для приобретения технических средств реабилитации, лекарственных препаратов, медицинских изделий для людей с ограниченными возможностями здоровья.',
                'btn' => 'Забота о каждом нуждающемся',
                'img' => '2',
                'likes' => 124
            ],
            [
                'title' => 'Дополнительные гарантии трудоустройства людей с инвалидностью',
                'desc' => 'Установлены дополнительные гарантии трудоустройства людей с инвалидностью: обязанность работодателя будет считаться выполненной только после трудоустройства инвалида.',
                'btn' => 'Забота о каждом нуждающемся',
                'img' => '3',
            ],
            [
                'title' => 'Закупаем лекарства от 14 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn' => 'Забота о каждом нуждающемся',
                'img' => '1',
                'likes' => 125
            ],
            [
                'title' => 'Введен Единый электронный сертификат',
                'desc' => 'Введен Единый электронный сертификат для приобретения технических средств реабилитации, лекарственных препаратов, медицинских изделий для людей с ограниченными возможностями здоровья.',
                'btn' => 'Забота о каждом нуждающемся',
                'img' => '2',
                'likes' => 124
            ],
            [
                'title' => 'Дополнительные гарантии трудоустройства людей с инвалидностью',
                'desc' => 'Установлены дополнительные гарантии трудоустройства людей с инвалидностью: обязанность работодателя будет считаться выполненной только после трудоустройства инвалида.',
                'btn' => 'Забота о каждом нуждающемся',
                'img' => '3',
            ],
            [
                'title' => 'Закупаем лекарства от 14 самых затратных редких болезней',
                'desc' => 'С 1 января 2023 года фонд «Круг добра» начал закупать лекарства от 14 самых затратных редких болезней. Дети с редкими заболеваниями будут обеспечены нужными лекарствами.',
                'btn' => 'Забота о каждом нуждающемся',
                'img' => '1',
                'likes' => 125
            ],
            [
                'title' => 'Введен Единый электронный сертификат',
                'desc' => 'Введен Единый электронный сертификат для приобретения технических средств реабилитации, лекарственных препаратов, медицинских изделий для людей с ограниченными возможностями здоровья.',
                'btn' => 'Забота о каждом нуждающемся',
                'img' => '2',
                'likes' => 124
            ],
            [
                'title' => 'Дополнительные гарантии трудоустройства людей с инвалидностью',
                'desc' => 'Установлены дополнительные гарантии трудоустройства людей с инвалидностью: обязанность работодателя будет считаться выполненной только после трудоустройства инвалида.',
                'btn' => 'Забота о каждом нуждающемся',
                'img' => '3',
            ],
        ];
    }

    private function getFilter()
    {
        return [
            'Все направления',
            'Забота о каждом нуждающемся',
            'Развитие регионов и транспортной инфраструктуры страны',
            'Культура, история, традиции',
            'Образование и передовая наука',
            'Развитие села',
            'Крепкая семья',
            'Экология для жизни',
            'Разитие туризма',
            'Развитие новых регионов',
            'Государство для человека',
            'Внешняя и оборонная политика',
            'Здоровье человека',
            'Экономика развития',
            'Гражданская солидарность и молодежная политика',
            'Хорошая работа — достаток в доме',
            'Удобная и комфортная жизнь',
        ];
    }
}