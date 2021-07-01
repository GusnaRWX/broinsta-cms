<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Permission;

class TestimonialAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'testimonials');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'testimonials',
                'display_name_singular' => 'testimonial',
                'display_name_plural'   => 'testimonials',
                'icon'                  => 'voyager-chat',
                'model_name'            => 'App\Models\Testimonial',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        //Data Rows
        $postDataType = DataType::where('slug', 'testimonials')->firstOrFail();
        $dataRow = $this->dataRow($postDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 0,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Description',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Created At',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Updated At',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 4,
            ])->save();
        }

        Permission::generateFor('testimonials');
    }

     /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */

    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

     /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */

    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
