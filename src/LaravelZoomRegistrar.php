<?php

namespace NishantDubey1\Zoom;

use Illuminate\Database\Eloquent\Collection;
//use NishantDubey1\Zoom\Contracts\Zoom;

class ZoomRegistrar
{

    /** @var string */
    protected $zoomClass;

    /**
     * ZoomRegistrar constructor.
     *
     */
    public function __construct()
    {
        //$this->zoomClass = config('permission.models.permission');

    }

    /**
     * Get an instance of the permission class.
     *
     * @return \Spatie\Zoom\Contracts\Permission
     */
    public function getZoomClass()
    {
      //  return app($this->zoomClass);
    }

}
