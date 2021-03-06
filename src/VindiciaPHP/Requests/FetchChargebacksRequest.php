<?php
/**
 * @author Sam Waters <sam@samwaters.com>
 * @created 22/07/2016 18:07
 */
namespace VindiciaPHP\Requests;

class FetchChargebacksRequest extends BaseRequest
{
  public $timestamp;
  public $endTimestamp;
  public $page;
  public $pageSize;

  public function requiresAuth()
  {
    return true;
  }

  public function __construct($start, $end, $page = 0, $pageSize = 100)
  {
    $this->timestamp = $start;
    $this->endTimestamp = $end;
    $this->page = $page;
    $this->pageSize = $pageSize;
  }
}
