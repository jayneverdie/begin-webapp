<?php

$app->get('/issue_all', 'App\Issue\IssueController:issue_all')
  ->add($auth)
  ->add($accessPage);