<?php

namespace App\Orchid\Resources;
use App\Models\Requerimiento;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\input;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;


class RequrimientoResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Requerimiento::class;


    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            input::make('codigo')
            ->title('Codigo')
            ->placeholder('Ingrese Codigo'),

            input::make('titulo')
            ->title('Titulo')
            ->placeholder('Ingrese titulo'),

            input::make('descripcion')
            ->title('Descripcion')
            ->placeholder('Ingrese Descripcion'),

            input::make('objetivo')
            ->title('Objetivo')
            ->placeholder('Ingrese Objetivo'),

        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('codigo'),
            TD::make('titulo'),
            TD::make('descripcion'),
            TD::make('objetivo'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id', 'ID'),
            Sight::make('codigo', 'Codigo'),
            Sight::make('titulo', 'Titulo'),
            Sight::make('descripcion','Descripcion'),
            Sight::make('objetivo','Objetivo'),
            Sight::make('created_at','Fecha de Creacion'),
            Sight::make('updated_at','Fecha de Actualizacion'),

        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
