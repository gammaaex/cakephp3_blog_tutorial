<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/07/18
 * Time: 11:26
 */

namespace App\Controller;


class AuthController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('ユーザー名またはパスワードが不正です。');
        }
    }

    public function logout()
    {
        $this->Flash->success('ログアウトしました。');
        return $this->redirect($this->Auth->logout());
    }
}