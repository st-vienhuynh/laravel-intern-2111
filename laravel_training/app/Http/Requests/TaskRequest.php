<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'type'  => 'required',
            'status'  => 'required',
            'start_date'  => 'required',
            'due_date'  => 'required',
            'assignee'  => 'required',
            'estimate'  => 'required',
            'actual'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Hãy nhập :attribute',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'Tiêu Đề',
            'description' => 'Mô tả',
            'type'  => 'Kiểu',
            'status'  => 'Trạng thái',
            'start_date'  => 'Ngày bắt đầu',
            'due_date'  => 'Ngày kết thúc',
            'assignee'  => 'Người đảm nhận',
            'estimate'  => 'Ước lượng',
            'actual'  => 'Thực tế',
        ];
    }
}
