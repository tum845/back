<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMarketAPIRequest;
use App\Http\Requests\API\UpdateMarketAPIRequest;
use App\Models\Market;
use App\Repositories\MarketRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MarketController
 * @package App\Http\Controllers\API
 */

class MarketAPIController extends AppBaseController
{
    /** @var  MarketRepository */
    private $marketRepository;

    public function __construct(MarketRepository $marketRepo)
    {
        $this->marketRepository = $marketRepo;
    }

    /**
     * Display a listing of the Market.
     * GET|HEAD /markets
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->marketRepository->pushCriteria(new RequestCriteria($request));
        $this->marketRepository->pushCriteria(new LimitOffsetCriteria($request));
        $markets = $this->marketRepository->all();

        return $this->sendResponse($markets->toArray(), 'Markets retrieved successfully');
    }

    /**
     * Store a newly created Market in storage.
     * POST /markets
     *
     * @param CreateMarketAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMarketAPIRequest $request)
    {
        $input = $request->all();

        $markets = $this->marketRepository->create($input);

        return $this->sendResponse($markets->toArray(), 'Market saved successfully');
    }

    /**
     * Display the specified Market.
     * GET|HEAD /markets/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Market $market */
        $market = $this->marketRepository->findWithoutFail($id);

        if (empty($market)) {
            return $this->sendError('Market not found');
        }

        return $this->sendResponse($market->toArray(), 'Market retrieved successfully');
    }

    /**
     * Update the specified Market in storage.
     * PUT/PATCH /markets/{id}
     *
     * @param  int $id
     * @param UpdateMarketAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarketAPIRequest $request)
    {
        $input = $request->all();

        /** @var Market $market */
        $market = $this->marketRepository->findWithoutFail($id);

        if (empty($market)) {
            return $this->sendError('Market not found');
        }

        $market = $this->marketRepository->update($input, $id);

        return $this->sendResponse($market->toArray(), 'Market updated successfully');
    }

    /**
     * Remove the specified Market from storage.
     * DELETE /markets/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Market $market */
        $market = $this->marketRepository->findWithoutFail($id);

        if (empty($market)) {
            return $this->sendError('Market not found');
        }

        $market->delete();

        return $this->sendResponse($id, 'Market deleted successfully');
    }
}
