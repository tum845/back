<?php

namespace App\DataTables;

use App\Models\Payment;
use Carbon\Carbon;
use Form;
use Yajra\Datatables\Services\DataTable;

class PaymentDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'payments.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $payments = Payment::query();

        return $this->applyScopes($payments);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'payment_name' => ['name' => 'payment_name', 'title' => 'Name', 'data' => 'payment_name'],
            'payment_code' => ['name' => 'payment_code',  'title' => 'Code', 'orderable' => false, 'data' => 'payment_code'],
            'payment_image' => ['name' => 'payment_image',  'title' => 'Icon', 'orderable' => false, 'data' => 'payment_image'],
            'payment_description' => ['name' => 'payment_description',  'title' => 'Description','data' => 'payment_description'],
            'payment_status' => ['name' => 'payment_status',  'title' => 'Status','data' => 'payment_status']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        $carbon = new Carbon('now');
        $date =  $carbon->format('j F Y, g:i a');
        return 'payments-'.$date;
    }
}
