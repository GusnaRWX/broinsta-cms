<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Permission;

class DepositAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'deposits');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'deposits',
                'display_name_singular' => 'deposit',
                'display_name_plural'   => 'deposits',
                'icon'                  => 'voyager-wallet',
                'model_name'            => 'App\Models\Kurse',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        //Data Rows
        $postDataType = DataType::where('slug', 'deposits')->firstOrFail();
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

        $dataRow = $this->dataRow($postDataType, 'account_number');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Account Number',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'deposit');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Deposit',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'transfer');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Transfer',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Phone',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'bank');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Bank',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'no_rek');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Nomer Rekening',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'name_rek');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Nama Rekening',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'bank_transfer');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Bank Transfer',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'file');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image',
                'display_name' => 'Bukti Pembayaran',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'select_dropdown',
                'display_name' => 'Bukti Pembayaran',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 0,
                'order' => 11,
                'details' => [
                    'default' => '-- Pilih Status --',
                    'options' => [
                        'aprove' => 'aprove',
                        'cancel' => 'cancel',
                    ],
                ]
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
                'order' => 12,
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
                'order' => 13,
            ])->save();
        }

        Permission::generateFor('deposits');
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
