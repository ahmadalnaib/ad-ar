<?php

namespace App\Repositories\Ads;

use App\Models\Ad;

class AdRepository implements AdInterface
{
  protected $ads;

  public function __construct(Ad $ads)
  {
    $this->ads=$ads;
  }
}