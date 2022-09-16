<?php

namespace App\DataTables;

use App\Models\Companies;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CompaniesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action',
                '<div class="btn btn-hover-scale">
                    <a href="companies/{{$inn}}">
                       <img src="demo3/media/icons/duotune/general/gen021.svg" alt="Подробнее о компании {{$name}}">
                    </a>
                </div>'
            );
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\CompaniesDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Companies $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('companies-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->stateSave(true)
            ->orderBy(0)
            ->responsive()
            ->addAction([

                'title'  => 'Подробнее',
                    ])
            ->autoWidth(false)
            ->parameters([
                'scrollX'      => true,
                'drawCallback' => 'function() { KTMenu.createInstances(); }',
                'buttons'      => ['print', 'excel', 'myCustomAction'],
            ])
            ->addTableClass('align-middle table-row-dashed fs-6 gy-5');


    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('name')->title(__('Наименование'))->addClass('ps-0'),
            Column::make('inn')->title(__('ИНН')),
            Column::make('ogrn')->title(__('ОГРН')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Companies_' . date('YmdHis');
    }
}
