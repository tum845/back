<?php

namespace App\Http\Controllers;

use App\DataTables\TransactionTypeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTransactionTypeRequest;
use App\Http\Requests\UpdateTransactionTypeRequest;
use App\Repositories\TransactionTypeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TransactionTypeController extends AppBaseController
{
    /** @var  TransactionTypeRepository */
    private $transactionTypeRepository;

    public function __construct(TransactionTypeRepository $transactionTypeRepo)
    {
        $this->transactionTypeRepository = $transactionTypeRepo;
    }

    /**
     * Display a listing of the TransactionType.
     *
     * @param TransactionTypeDataTable $transactionTypeDataTable
     * @return Response
     */
    public function index(TransactionTypeDataTable $transactionTypeDataTable)
    {
        return $transactionTypeDataTable->render('transaction_types.index');
    }

    /**
     * Show the form for creating a new TransactionType.
     *
     * @return Response
     */
    public function create()
    {
        return view('transaction_types.create');
    }

    /**
     * Store a newly created TransactionType in storage.
     *
     * @param CreateTransactionTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateTransactionTypeRequest $request)
    {
        $input = $request->all();

        $transactionType = $this->transactionTypeRepository->create($input);

        Flash::success('Transaction Type saved successfully.');

        return redirect(route('transactionTypes.index'));
    }

    /**
     * Display the specified TransactionType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transactionType = $this->transactionTypeRepository->findWithoutFail($id);

        if (empty($transactionType)) {
            Flash::error('Transaction Type not found');

            return redirect(route('transactionTypes.index'));
        }

        return view('transaction_types.show')->with('transactionType', $transactionType);
    }

    /**
     * Show the form for editing the specified TransactionType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transactionType = $this->transactionTypeRepository->findWithoutFail($id);

        if (empty($transactionType)) {
            Flash::error('Transaction Type not found');

            return redirect(route('transactionTypes.index'));
        }

        return view('transaction_types.edit')->with('transactionType', $transactionType);
    }

    /**
     * Update the specified TransactionType in storage.
     *
     * @param  int              $id
     * @param UpdateTransactionTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransactionTypeRequest $request)
    {
        $transactionType = $this->transactionTypeRepository->findWithoutFail($id);

        if (empty($transactionType)) {
            Flash::error('Transaction Type not found');

            return redirect(route('transactionTypes.index'));
        }

        $transactionType = $this->transactionTypeRepository->update($request->all(), $id);

        Flash::success('Transaction Type updated successfully.');

        return redirect(route('transactionTypes.index'));
    }

    /**
     * Remove the specified TransactionType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transactionType = $this->transactionTypeRepository->findWithoutFail($id);

        if (empty($transactionType)) {
            Flash::error('Transaction Type not found');

            return redirect(route('transactionTypes.index'));
        }

        $this->transactionTypeRepository->delete($id);

        Flash::success('Transaction Type deleted successfully.');

        return redirect(route('transactionTypes.index'));
    }
}
