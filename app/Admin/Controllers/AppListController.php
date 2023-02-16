<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AppList;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AppListController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AppList(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('url');
            $grid->column('icon');
            $grid->column('desc');
            $grid->column('create_ip');
            $grid->column('create_by');
            $grid->column('update_by');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new AppList(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('url');
            $show->field('icon');
            $show->field('desc');
            $show->field('create_ip');
            $show->field('create_by');
            $show->field('update_by');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AppList(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('url');
            $form->text('icon');
            $form->text('desc');
            $form->text('create_ip');
            $form->text('create_by');
            $form->text('update_by');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
