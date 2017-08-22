<?php
/**
 * Created by IntelliJ IDEA.
 * User: math
 * Date: 2017/08/22
 * Time: 10:13
 */

namespace App\LaravelAdmin\Grid\Tools;


use App\LaravelAdmin\GridEx;
use Encore\Admin\Grid\Tools\AbstractTool;

class CreateButton extends AbstractTool
{
    /**
     * Create a new CreateButton instance.
     *
     * @param Grid $grid
     */
    public function __construct(GridEx $grid)
    {
        $this->grid = $grid;
    }

    /**
     * Render CreateButton.
     *
     * @return string
     */
    public function render()
    {
        if (!$this->grid->allowCreation()) {
            return '';
        }

        $new = trans('admin::lang.new');

        return <<<EOT

<div class="btn-group pull-right" style="margin-right: 10px">
    <a href="url({$this->grid->resource()}/create)" class="btn btn-sm btn-success">
        <i class="fa fa-save"></i>&nbsp;&nbsp;{$new}
    </a>
</div>

EOT;
    }
}