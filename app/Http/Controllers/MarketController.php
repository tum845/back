<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarketRequest;
use App\Http\Requests\UpdateMarketRequest;
use App\Repositories\MarketRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MarketController extends AppBaseController
{
    /** @var  MarketRepository */
    private $marketRepository;

    public function __construct(MarketRepository $marketRepo)
    {
        $this->marketRepository = $marketRepo;
    }

    /**
     * Display a listing of the Market.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->marketRepository->pushCriteria(new RequestCriteria($request));
        $markets = $this->marketRepository->all();

        return view('markets.index')
            ->with('markets', $markets);
    }

    /**
     * Show the form for creating a new Market.
     *
     * @return Response
     */
    public function create()
    {
        return view('markets.create');
    }

    /**
     * Store a newly created Market in storage.
     *
     * @param CreateMarketRequest $request
     *
     * @return Response
     */
    public function store(CreateMarketRequest $request)
    {
        $input = $request->all();

        $market = $this->marketRepository->create($input);

        Flash::success('Market saved successfully.');

        return redirect(route('markets.index'));
    }

    /**
     * Display the specified Market.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $market = $this->marketRepository->findWithoutFail($id);

        if (empty($market)) {
            Flash::error('Market not found');

            return redirect(route('markets.index'));
        }

        return view('markets.show')->with('market', $market);
    }

    /**
     * Show the form for editing the specified Market.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $market = $this->marketRepository->findWithoutFail($id);

        if (empty($market)) {
            Flash::error('Market not found');

            return redirect(route('markets.index'));
        }

        return view('markets.edit')->with('market', $market);
    }

    /**
     * Update the specified Market in storage.
     *
     * @param  int              $id
     * @param UpdateMarketRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarketRequest $request)
    {
        $market = $this->marketRepository->findWithoutFail($id);

        if (empty($market)) {
            Flash::error('Market not found');

            return redirect(route('markets.index'));
        }

        $market = $this->marketRepository->update($request->all(), $id);

        Flash::success('Market updated successfully.');

        return redirect(route('markets.index'));
    }

    /**
     * Remove the specified Market from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $market = $this->marketRepository->findWithoutFail($id);

        if (empty($market)) {
            Flash::error('Market not found');

            return redirect(route('markets.index'));
        }

        $this->marketRepository->delete($id);

        Flash::success('Market deleted successfully.');

        return redirect(route('markets.index'));
    }
}
