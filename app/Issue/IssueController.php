<?php

namespace App\Issue;

use Core\Render;
use App\User\UserAPI;

class IssueController
{
  private $user = null;

  public function __construct() {
    $this->user = new UserAPI;
  }

  public function issue_all($request, $response, $args) {
    return Render::View('pages/issue/issue_all');
  }
}