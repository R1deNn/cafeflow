<?php

namespace App\Nova;

use App\Models\Company;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class CompanyResource extends Resource
{
    public static $model = Company::class;

    public static $title = 'title';

    public static $search = [
        'id', 'title'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make(__('Title'), 'title')
                ->sortable()
                ->rules('required'),

            Text::make(__('Description'), 'description')
                ->sortable()
                ->rules('nullable'),

            Text::make(__('Img'), 'img')
                ->sortable()
                ->rules('nullable'),

            BelongsTo::make(__('User'), 'user', User::class),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }
}
