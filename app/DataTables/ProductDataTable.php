<?php

namespace App\DataTables;

use App\Models\Product;
use Carbon\Carbon;
use Form;
use Yajra\Datatables\Services\DataTable;

class ProductDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->editColumn('product_image',function (Product $product) {
                return '<img src = "'.\Cloudder::show($product->product_image).'" >';
            })
            ->editColumn('market_id',function (Product $product) {
                return $product->market->market_name;
            })
            ->addColumn('action', 'products.datatables_actions')
            ->rawColumns(['product_image','action'])
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $products = Product::with('market');

        return $this->applyScopes($products);
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
            ->addAction(['width' => '15%'])
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
            'product_name' => ['name' => 'product_name', 'title' => 'Name ',  'data' => 'product_name'],
            'product_image' => ['name' => 'product_image', 'title' => 'Image ',  'data' => 'product_image'],
            'product_price_market' => ['name' => 'product_price_market', 'title' => 'Place Market ',  'data' => 'product_price_market'],
            'product_price_sale' => ['name' => 'product_price_sale', 'title' => 'Price Sale ',  'data' => 'product_price_sale'],
            'product_price_promo' => ['name' => 'product_price_promo', 'title' => 'Price Promo ',  'data' => 'product_price_promo'],
            'product_stock' => ['name' => 'product_stock', 'title' => 'Stock ',  'data' => 'product_stock'],
            'product_status' => ['name' => 'product_status', 'title' => 'Status ',  'data' => 'product_status'],
            'product_description' => ['name' => 'product_description', 'title' => 'Description ',  'data' => 'product_description'],
            'market_id' => ['name' => 'market_id', 'title' => 'Market ',  'data' => 'market_id']
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
        return 'products-'.$date;
    }
}
