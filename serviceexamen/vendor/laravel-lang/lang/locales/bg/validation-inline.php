<?php

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

return [
    'accepted'             => 'Това поле трябва да бъде взето.',
    'accepted_if'          => 'Това поле трябва да е бъде прието, ако :other е :value.',
    'active_url'           => 'Това е невалиден URL адрес.',
    'after'                => 'Това трябва да е датата след :date година.',
    'after_or_equal'       => 'Това трябва да бъде датата след или равна на :date.',
    'alpha'                => 'Това поле може да съдържа само букви.',
    'alpha_dash'           => 'Това поле може да съдържа само букви, цифри, тирета и подчертавания.',
    'alpha_num'            => 'Това поле може да съдържа само букви и цифри.',
    'array'                => 'Това поле трябва да е масив.',
    'before'               => 'Това трябва да е дата преди :date година.',
    'before_or_equal'      => 'Това трябва да е дата преди или равна на :date.',
    'between'              => [
        'array'   => 'Позволени са минимум :min и максимум :max елемента.',
        'file'    => 'Файлът трябва да е между :min и :max килобайта.',
        'numeric' => 'Стойността трябва да е минимум :min и максимум :max.',
        'string'  => 'Текстът трябва да е между :min и :max символа.',
    ],
    'boolean'              => 'Това поле трябва да е вярно или невярно.',
    'confirmed'            => 'Потвърждението не съвпада.',
    'current_password'     => 'Въведената парола е невалидна.',
    'date'                 => 'Това не е валидна дата.',
    'date_equals'          => 'Това трябва да е дата, равна на :date.',
    'date_format'          => 'Това не съответства на формата :format.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'Тази стойност трябва да се различава от :other.',
    'digits'               => 'Това трябва да е :digits цифра.',
    'digits_between'       => 'Тя трябва да бъде между :min и :max цифри.',
    'dimensions'           => 'Това изображение има невалидни размери.',
    'distinct'             => 'Това поле има повтарящо се значение.',
    'email'                => 'Това трябва да е валиден имейл адрес.',
    'ends_with'            => 'Това трябва да завърши с едно от следните: :values.',
    'enum'                 => 'The selected value is invalid.',
    'exists'               => 'Избраната стойност е невалидна.',
    'file'                 => 'Съдържанието трябва да е файл.',
    'filled'               => 'Това поле трябва да има значение.',
    'gt'                   => [
        'array'   => 'Съдържанието трябва да има повече от :value елемента.',
        'file'    => 'Размерът на файла трябва да е над :value килобайта.',
        'numeric' => 'Стойността трябва да е по-голяма от :value.',
        'string'  => 'Текстът трябва да е по-дълъг от :value символа.',
    ],
    'gte'                  => [
        'array'   => 'Съдържанието трябва да има :value предмета или повече.',
        'file'    => 'Размерът на файла трябва да е :value килобайта или повече.',
        'numeric' => 'Стойността трябва да е равна на :value или по-голяма.',
        'string'  => 'Текстът трябва да е с дължина :value символа или повече.',
    ],
    'image'                => 'Това трябва да е изображение.',
    'in'                   => 'Избраната стойност е невалидна.',
    'in_array'             => 'Тази стойност не съществува в :other.',
    'integer'              => 'Това трябва да е цяло число.',
    'ip'                   => 'Това трябва да е валиден IP адрес.',
    'ipv4'                 => 'Това трябва да е валиден IPv4 адрес.',
    'ipv6'                 => 'Това трябва да е валиден IPv6 адрес.',
    'json'                 => 'Това трябва да е валиден JSON низ.',
    'lt'                   => [
        'array'   => 'Съдържанието трябва да има по-малко от :value елемента.',
        'file'    => 'Размерът на файла трябва да е по-малък от :value килобайта.',
        'numeric' => 'Стойността трябва да е по-малка от :value.',
        'string'  => 'Текстът трябва да е по-кратък от :value символа.',
    ],
    'lte'                  => [
        'array'   => 'Съдържанието трябва да има :value елемента или по-малко.',
        'file'    => 'Размерът на файла трябва да е :value килобайта или по-малко.',
        'numeric' => 'Стойността трябва да е :value или по-малка.',
        'string'  => 'Текстът трябва да е с дължина :value символа или по-малко.',
    ],
    'mac_address'          => 'The value must be a valid MAC address.',
    'max'                  => [
        'array'   => 'Съдържанието не може да има повече от :max елемента.',
        'file'    => 'Размерът на файла не трябва да надвишава :max килобайта.',
        'numeric' => 'Стойността не може да е по-голяма от :max.',
        'string'  => 'Текстът не може да е с дължина по-голяма от :max символа.',
    ],
    'mimes'                => 'Това трябва да бъде файл тип: :values.',
    'mimetypes'            => 'Това трябва да е файл тип: :values.',
    'min'                  => [
        'array'   => 'Съдържанието трябва да има най-малко :min елемента.',
        'file'    => 'Размерът на файла трябва да е най-малко :min килобайта.',
        'numeric' => 'Стойността не може да е по-малка от :min.',
        'string'  => 'Текстът не може да се дължина по-малка от :min символа.',
    ],
    'multiple_of'          => 'Тази стойност трябва да бъде кратно на :value',
    'not_in'               => 'Избраната стойност е невалидна.',
    'not_regex'            => 'Този формат е невалиден.',
    'numeric'              => 'Това трябва да е число.',
    'password'             => 'Паролата е грешна.',
    'present'              => 'Това поле трябва да присъства.',
    'prohibited'           => 'Това поле е забранено.',
    'prohibited_if'        => 'Това поле е забранено, ако :other е равно на :value.',
    'prohibited_unless'    => 'Това поле е забранено, освен ако :other не е в :values.',
    'prohibits'            => 'Това поле изключва наличието на :other.',
    'regex'                => 'Този формат е невалиден.',
    'required'             => 'Това поле е задължително.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Това поле е задължително, ако :other е равно на :value.',
    'required_unless'      => 'Това поле е задължително, освен ако :other не е в :values.',
    'required_with'        => 'Това поле е задължително, когато има :values.',
    'required_with_all'    => 'Това поле е задължително при наличие на :values.',
    'required_without'     => 'Това поле е задължително, ако :values липсва.',
    'required_without_all' => 'Това поле е задължително, ако не присъства нито един от :values.',
    'same'                 => 'Стойността на това поле трябва да съвпада със стойността от :other.',
    'size'                 => [
        'array'   => 'Съдържанието трябва да има :size елемента.',
        'file'    => 'Размерът на файла трябва да бъде :size килобайта.',
        'numeric' => 'Стойността трябва да е :size.',
        'string'  => 'Текстът трябва да е с дължина :size символа.',
    ],
    'starts_with'          => 'Това трябва да започне с една от следните точки: :values.',
    'string'               => 'Това трябва да е низ.',
    'timezone'             => 'Това трябва да е допустима зона.',
    'unique'               => 'Това вече е направено.',
    'uploaded'             => 'Това не може да бъде изтеглено.',
    'url'                  => 'Този формат е невалиден.',
    'uuid'                 => 'Това трябва да е валиден UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
