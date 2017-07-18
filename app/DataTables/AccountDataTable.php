<?php

namespace App\DataTables;

use App\Models\Account;
use Form;
use Yajra\Datatables\Services\DataTable;

class AccountDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'accounts.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $accounts = Account::query();

        return $this->applyScopes($accounts);
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
            'amount' => ['name' => 'amount', 'data' => 'amount'],
            'account_type' => ['name' => 'account_type', 'data' => 'account_type'],
            'transaction_type' => ['name' => 'transaction_type', 'data' => 'transaction_type'],
            'transaction_date' => ['name' => 'transaction_date', 'data' => 'transaction_date'],
            'transaction_status' => ['name' => 'transaction_status', 'data' => 'transaction_status']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'accounts';
    }
}
