<?php

namespace App\Controller\OpenAPI;

use App\Service\UserService\ControlUserService;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

#[Rest\Route('/api')]
class APIController extends AbstractFOSRestController
{
    public function __construct(
        private ControlUserService $controlUserService
    )
    {
    }

    #[Rest\Get('/users', name: 'user_list_app')]
    public function getListUser(): Response
    {
        try {
            $view = $this->view($this->controlUserService->getUserList());
        } catch (\Throwable $e) {
            dd($e);
        }
        return $this->handleView($view);
    }

    #[Rest\Get('/test', name: 'test')]
    public function test(): Response
    {
        return $this->handleView($this->view(['test1', 'test2'], 200));
    }

}