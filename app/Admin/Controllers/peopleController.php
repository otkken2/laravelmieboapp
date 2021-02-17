<?php

namespace App\Admin\Controllers;

use App\Person;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class peopleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Person';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Person());

        $grid->column('id',__('Id'));
        $grid->column('name',__('Name'));
        $grid->column('age',__('Age'));
        $grid->column('gender',__('Gender'));
        
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Person::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('age', __('Age'));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));
        $show->field('gender', __('Gender'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Person());

        $form->text('name', __('Name'));
        $form->text('age', __('Age'));
        $form->text('gender', __('Gender'));

        return $form;
    }
}
