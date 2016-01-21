<?php

namespace Kordy\Ticketit\Requests;

use App\Http\Requests\Request;
use Kordy\Ticketit\Models\Setting;

class PrepareCommentStoreRequest extends Request
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
            'file_upload'   => 'mimes:'.Setting::grab('accepted_file_types'),
            'ticket_id'   => 'required|exists:ticketit,id',
            'content'     => 'required|min:6|max:' . ((PHP_INT_MAX == 2147483647) ?  '2147483647' : '4294967295')
        ];
    }
}
