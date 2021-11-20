<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Cache\Cache;
use Cake\Core\Configure;


class SessionHelper extends Helper
{
  public $cacheKey;

  public function read($id)
    {
        $result = Cache::read($id, $this->cacheKey);
        if ($result) {
            return $result;
        }
        return parent::read($id);
    }

    public function write($id, $data)
    {
        Cache::write($id, $data, $this->cacheKey);
        return parent::write($id, $data);
    }
}