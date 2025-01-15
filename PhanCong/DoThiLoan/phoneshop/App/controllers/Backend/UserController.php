<?php

namespace Controllers\Backend;

use controllers\BaseController;
use Core\View;
use Helpers\UrlHelper;
use Models\User;

class UserController extends BaseController
{

    private $model;

    public function __construct()
    {
        parent::checkUserBackend();
        $this->model = new User();
    }

    public function index()
    {
        $data = $this->model->getAll();

        return $this->renderBackend('backend/user/index', $data, '/js/backend/user.js');
    }

    // public function delete()
    // {
    //     $user_id = $_POST['user_id'];
    //     $result = $this->model->delete($user_id);
    //     if ($result) {
    //         UrlHelper::redirect('/admin/user');
    //     } else {
    //         UrlHelper::redirect('/admin/user');
    //     }
    // }

    public function edit()
    {
        $id = !empty($_GET['id']) ? $_GET['id'] : '';
        if($id){
            $data =$this->model->find($id);
            if($data){
               return $this->renderBackend('backend/user/edit', $data);
            }
        }
        return View::render('404');
    }
}
