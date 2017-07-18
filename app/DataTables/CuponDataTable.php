<?php

namespace App\DataTables;

use App\Models\Cupon;
use Carbon\Carbon;
use Form;
use Yajra\Datatables\Services\DataTable;

class CuponDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->editColumn('cupon_object', function($cupon){
                $object = '';
                if ($cupon->cupon_object==1){
                    $object = 'Groceries';
                }elseif($cupon->cupon_object==2){
                    $object = 'Shiping';
                }else{
                    $object = 'FLAT';
                }
                return $object;
            })
             ->editColumn('cupon_type', function($cupon){
                return $cupon->cupon_type==1 ? 'Persentase':'Nominal';
            })
            ->editColumn('cupon_is_recuring', function($cupon){
                return $cupon->cupon_is_recuring==1 ? 'Yes':'No';
            })
            ->editColumn('cupon_start', function ($cupon) {
                return $cupon->cupon_start ? with(new Carbon($cupon->cupon_start))->format('j F Y') : '';
            })
            ->editColumn('cupon_end', function ($cupon) {
                return $cupon->cupon_end ? with(new Carbon($cupon->cupon_end))->format('j F Y') : '';
            })
            ->addColumn('action', 'cupons.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $cupons = Cupon::query();

        return $this->applyScopes($cupons);
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
            'cupon_code' => ['name' => 'cupon_code', 'title' => 'Name',  'data' => 'cupon_code'],
            'cupon_object' => ['name' => 'cupon_object', 'title' => 'Object',  'data' => 'cupon_object'],
            'cupon_type' => ['name' => 'cupon_type', 'title' => 'Type',  'data' => 'cupon_type'],
            'cupon_is_recuring' => ['name' => 'cupon_is_recuring', 'title' => 'Recuring',  'data' => 'cupon_is_recuring'],
            'cupon_start' => ['name' => 'cupon_start', 'title' => 'Start',  'data' => 'cupon_start'],
            'cupon_end' => ['name' => 'cupon_end', 'title' => 'End',  'data' => 'cupon_end'],
            'cupon_description' => ['name' => 'cupon_description', 'title' => 'Description',  'data' => 'cupon_description']
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
        return 'cupons-'.$date;
    }
}
