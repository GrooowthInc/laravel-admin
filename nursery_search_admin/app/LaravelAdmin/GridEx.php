<?php

namespace App\LaravelAdmin;

use App\LaravelAdmin\Grid\Tools\CreateButton;
use Encore\Admin\Grid;

class GridEx extends Grid
{

    /**
     * Get current resource uri.
     *
     * @param string $path
     *
     * @return string
     */
    public function resource($path = null)
    {
        if (!empty($path)) {
            $this->resourcePath = $path;

            return $this . "AAA";
        }

        if (!empty($this->resourcePath)) {
            return $this->resourcePath . "BBB";
        }

        return url(app('request')->getPathInfo());
    }

    /**
     * Render create button for grid.
     *
     * @return Tools\CreateButton
     */
    public function renderCreateButton()
    {
        return new CreateButton($this);
    }
}
