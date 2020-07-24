<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute cần phải được chấp nhận.',
    'active_url'           => ':attribute không phải là một URL hợp lệ.',
    'after'                => ':attribute phải là một ngày sau :date.',
    'after_or_equal'       => ':attribute phải là một ngày sau hoặc bằng :date.',
    'alpha'                => ':attribute chỉ có thể chứa các chữ cái.',
    'alpha_dash'           => ':attribute chỉ có thể chứa các chữ cái, số và dấu gạch ngang.',
    'alpha_num'            => ':attribute chỉ có thể chứa các chữ cái và số.',
    'array'                => ':attribute phải là kiểu array.',
    'before'               => ':attribute phải là ngày trước :date.',
    'before_or_equal'      => ':attribute phải là ngày trước hoặc bằng :date.',
    'between'              => [
        'numeric' => 'attribute phải ở giữa :min và :max.',
        'file'    => 'attribute phải ở giữa :min và :max kilobytes.',
        'string'  => 'attribute phải ở giữa :min và :max ký tự.',
        'array'   => 'attribute phải ở giữa :min và :max giá trị.',
    ],
    'boolean'              => 'attribute phải có giá trị true hoặc false.',
    'confirmed'            => 'attribute confirmation does not match.',
    'date'                 => 'attribute không phải là ngày hợp lệ.',
    'date_format'          => 'attribute không dúng định dạng :format.',
    'different'            => 'attribute và :other phải khác nhau.',
    'digits'               => 'attribute must be :digits digits.',
    'digits_between'       => 'attribute must be between :min and :max digits.',
    'dimensions'           => 'attribute has invalid image dimensions.',
    'distinct'             => 'attribute field has a duplicate value.',
    'email'                => 'attribute không phải là email hợp lệ.',
    'exists'               => ':attribute không tồn tại.',
    'file'                 => 'attribute phải là tệp.',
    'filled'               => 'attribute field must have a value.',
    'image'                => 'attribute phải là một ảnh.',
    'in'                   => ':attribute không hợp lệ.',
    'in_array'             => 'attribute field does not exist in :other.',
    'integer'              => 'attribute phải là kiểu số nguyên.',
    'ip'                   => 'attribute must be a valid IP address.',
    'ipv4'                 => 'attribute must be a valid IPv4 address.',
    'ipv6'                 => 'attribute must be a valid IPv6 address.',
    'json'                 => 'attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'attribute không thể lớn hơn :max.',
        'file'    => 'attribute không thể lớn hơn :max kilobytes.',
        'string'  => 'attribute không thể lớn hơn :max ký tự.',
        'array'   => 'attribute không thể lớn hơn :max items.',
    ],
    'mimes'                => 'attribute must be a file of type: :values.',
    'mimetypes'            => 'attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'attribute không thể nhỏ hơn :min.',
        'file'    => 'attribute không thể nhỏ hơn :min kilobytes.',
        'string'  => 'attribute không thể nhỏ hơn :min ký tự.',
        'array'   => 'attribute không thể nhỏ hơn :min giá trị.',
    ],
    'not_in'               => ':attribute không hợp lệ.',
    'numeric'              => 'attribute phải là một số.',
    'present'              => 'attribute field must be present.',
    'regex'                => 'attribute định dạng không đúng.',
    'required'             => 'Thông tin :attribute là bắt buộc.',
    'required_if'          => 'attribute field is required when :other is :value.',
    'required_unless'      => 'attribute field is required unless :other is in :values.',
    'required_with'        => 'attribute field is required when :values is present.',
    'required_with_all'    => 'attribute field is required when :values is present.',
    'required_without'     => 'attribute field is required when :values is not present.',
    'required_without_all' => 'attribute field is required when none of :values are present.',
    'same'                 => 'attribute and :other must match.',
    'size'                 => [
        'numeric' => 'attribute must be :size.',
        'file'    => 'attribute must be :size kilobytes.',
        'string'  => 'attribute must be :size characters.',
        'array'   => 'attribute must contain :size items.',
    ],
    'string'               => 'attribute must be a string.',
    'timezone'             => 'attribute must be a valid zone.',
    'unique'               => 'attribute đã tồn tại.',
    'uploaded'             => 'attribute failed to upload.',
    'url'                  => 'attribute không phải là URL hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
