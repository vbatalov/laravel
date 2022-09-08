<?php

namespace App\DataTables;

use App\Models\Deal;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DealsDataTable extends DataTable
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
            ->addColumn('action', 'deals.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Deal $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Deal $model)
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
                    ->setTableId('deals-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->stateSave(true)
                    ->orderBy(6)
                    ->responsive()
                    ->autoWidth(false)
                    ->parameters([
                        'scrollX'      => true,
                        'drawCallback' => 'function() { KTMenu.createInstances(); }',
                    ])
                    ->addTableClass('align-middle table-row-dashed fs-6 gy-5');
    }
                    //Вырезал из return $this->builder()
                    //->buttons(
                    //Button::make('create'),
                    //Button::make('export'),
                    //Button::make('print'),
                    //Button::make('reset'),
                    //Button::make('reload')
                    //)
    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('sellerName')->title(__('Продавец'))->addClass('ps-0'),
            Column::make('sellerInn')->title(__('ИНН')),
            Column::make('buyerName')->title(__('Покупатель')),
            Column::make('buyerInn')->title(__('ИНН')),
            Column::make('dealDate')->title(__('Дата'))->addClass('none'),
            Column::make('woodVolumeBuyer')->title(__('Объем, покупатель:'))->addClass('none'),
            Column::make('woodVolumeSeller')->title(__('Объем, продавец:'))->addClass('none'),
            Column::make('dealNumber')->title('Номер сделки')->addClass('none'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Deals_' . date('YmdHis');
    }
}
