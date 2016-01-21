<?php

namespace Kordy\Ticketit\Requests;

use App\Http\Requests\Request;

class PrepareTicketStoreRequest extends Request
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
            'subject'       => 'required|min:3',
            'content'       => 'required|min:6|max:'.((PHP_INT_MAX == 2147483647) ?  '2147483647' : '4294967295'),
            'priority_id'   => 'required|numeric',
            'category_id'   => 'required|numeric',
            'file_upload'   => 'mimes:png,jpg,bmp,doc,docx,pdf,jpeg',
        ];
    }
}
