<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCuponAPIRequest;
use App\Http\Requests\API\UpdateCuponAPIRequest;
use App\Models\Cupon;
use App\Repositories\CuponRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class CuponController
 * @package App\Http\Controllers\API
 */

class CuponAPIController extends AppBaseController
{
    /** @var  CuponRepository */
    private $cuponRepository;

    public function __construct(CuponRepository $cuponRepo)
    {
        $this->cuponRepository = $cuponRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/cupons",
     *      summary="Get a listing of the Cupons.",
     *      tags={"Cupon"},
     *      description="Get all Cupons",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Cupon")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->cuponRepository->pushCriteria(new RequestCriteria($request));
        $this->cuponRepository->pushCriteria(new LimitOffsetCriteria($request));
        $cupons = $this->cuponRepository->all();

        return $this->sendResponse($cupons->toArray(), 'Cupons retrieved successfully');
    }

    /**
     * @param CreateCuponAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/cupons",
     *      summary="Store a newly created Cupon in storage",
     *      tags={"Cupon"},
     *      description="Store Cupon",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Cupon that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Cupon")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Cupon"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateCuponAPIRequest $request)
    {
        $input = $request->all();

        $cupons = $this->cuponRepository->create($input);

        return $this->sendResponse($cupons->toArray(), 'Cupon saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/cupons/{id}",
     *      summary="Display the specified Cupon",
     *      tags={"Cupon"},
     *      description="Get Cupon",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Cupon",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Cupon"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Cupon $cupon */
        $cupon = $this->cuponRepository->findWithoutFail($id);

        if (empty($cupon)) {
            return $this->sendError('Cupon not found');
        }

        return $this->sendResponse($cupon->toArray(), 'Cupon retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateCuponAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/cupons/{id}",
     *      summary="Update the specified Cupon in storage",
     *      tags={"Cupon"},
     *      description="Update Cupon",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Cupon",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Cupon that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Cupon")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Cupon"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateCuponAPIRequest $request)
    {
        $input = $request->all();

        /** @var Cupon $cupon */
        $cupon = $this->cuponRepository->findWithoutFail($id);

        if (empty($cupon)) {
            return $this->sendError('Cupon not found');
        }

        $cupon = $this->cuponRepository->update($input, $id);

        return $this->sendResponse($cupon->toArray(), 'Cupon updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/cupons/{id}",
     *      summary="Remove the specified Cupon from storage",
     *      tags={"Cupon"},
     *      description="Delete Cupon",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Cupon",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Cupon $cupon */
        $cupon = $this->cuponRepository->findWithoutFail($id);

        if (empty($cupon)) {
            return $this->sendError('Cupon not found');
        }

        $cupon->delete();

        return $this->sendResponse($id, 'Cupon deleted successfully');
    }
}
