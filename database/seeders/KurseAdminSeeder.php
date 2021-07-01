<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Permission;

class KurseAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'kurses');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'kurses',
                'display_name_singular' => 'kurse',
                'display_name_plural'   => 'kurses',
                'icon'                  => 'voyager-dollar',
                'model_name'            => 'App\Models\Kurse',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        //Data Rows
        $postDataType = DataType::where('slug', 'kurses')->firstOrFail();
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

        $dataRow = $this->dataRow($postDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'select_dropdown',
                'display_name' => 'Kurs Category',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 1,
                'details' => [
                    'default' => 'member',
                    'options' => [
                        'member' => 'member',
                        'reguler' => 'reguler',
                    ],
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'deposit');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Deposit',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'withdraw');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Withdraw',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 3,
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
                'order' => 4,
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
                'order' => 5,
            ])->save();
        }

        Permission::generateFor('kurses');
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
