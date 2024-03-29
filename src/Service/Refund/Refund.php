<?php

namespace Ivy\Service\Refund;

use Ivy\Exceptions\ClientResponseException;
use Ivy\Resources\Merchant\RefundBatchResponse;
use Ivy\Resources\Merchant\RefundRequest;
use Ivy\Resources\Merchant\RefundResponse;
use Ivy\Service\Service;

final class Refund extends Service
{
    /**
     * @param RefundRequest $requestResource
     *
     * @return RefundResponse
     * @throws ClientResponseException
     */
    public function single(RefundRequest $requestResource): RefundResponse
    {
        return RefundResponse::make(
            $this->request(
                '/service/merchant/payment/refund',
                $requestResource->toArray()
            )
        );
    }

    /**
     * @param array<RefundRequest> $requestResources
     *
     * @return RefundBatchResponse
     * @throws ClientResponseException
     */
    public function batch(array $requestResources): RefundBatchResponse
    {
        return RefundBatchResponse::make(
            $this->request(
                '/service/merchant/payment/refund/batch',
                [
                    'requestedRefunds' => array_map(
                        fn (RefundRequest $resource) => $resource->toArray(),
                        $requestResources
                    ),
                ]
            )
        );
    }
}