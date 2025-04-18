<?php

declare(strict_types=1);

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

    'accepted' => ':attribute باید پذیرفته شده باشد.',
    'accepted_if' => ':attribute باید هنگامی که :other برابر با :value است، پذیرفته شود.',
    'active_url' => ':attribute یک URL معتبر نیست.',
    'after' => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => ':attribute باید تاریخی بعد یا برابر :date باشد.',
    'alpha' => ':attribute باید فقط حروف الفبا باشد.',
    'alpha_dash' => ':attribute باید فقط حروف الفبا، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => ':attribute باید فقط حروف الفبا و اعداد باشد.',
    'array' => ':attribute باید آرایه باشد.',
    'ascii' => ':attribute باید فقط شامل کاراکترها و نمادهای الفبایی تک بایتی (ASCII) باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخی قبل یا برابر :date باشد.',
    'between' => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file' => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string' => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array' => ':attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean' => ':attribute باید درست یا نادرست باشد.',
    'can' => ':attribute حاوی یک مقدار غیرمجاز است.',
    'confirmed' => ':attribute با فیلد تکرار مطابقت ندارد.',
    'contains' => ':attribute فاقد یک مقدار الزامی است.',
    'current_password' => 'رمز عبور فعلی اشتباه است.',
    'date' => ':attribute یک تاریخ معتبر نیست.',
    'date_equals' => ':attribute باید برابر با :date باشد.',
    'date_format' => ':attribute با الگوی :format مطابقت ندارد.',
    'decimal' => ':attribute باید دارای :decimal رقم اعشار باشد.',
    'declined' => ':attribute باید رد شود.',
    'declined_if' => ':attribute باید رد شود وقتی :other برابر :value است.',
    'different' => ':attribute و :other باید از یکدیگر متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions' => ':attribute ابعاد تصویر نامعتبر است.',
    'distinct' => ':attribute مقدار تکراری دارد.',
    'doesnt_end_with' => ':attribute نباید با یکی از موارد زیر به پایان برسد: :values.',
    'doesnt_start_with' => ':attribute نباید با یکی از موارد زیر شروع شود: :values.',
    'email' => ':attribute باید یک ایمیل معتبر باشد.',
    'ends_with' => ':attribute باید با یکی از موارد زیر به پایان برسد: :values.',
    'enum' => ':attribute انتخاب شده نامعتبر است.',
    'exists' => ':attribute انتخاب شده، معتبر نیست.',
    'extensions' => ':attribute باید یکی از پسوندهای زیر را داشته باشد: :values.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => ':attribute باید مقدار داشته باشد.',
    'gt' => [
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'file' => ':attribute باید بزرگتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید بزرگتر از :value کاراکتر باشد.',
        'array' => ':attribute باید بیشتر از :value آیتم داشته باشد.',
    ],
    'gte' => [
        'numeric' => ':attribute باید بزرگتر یا برابر :value باشد.',
        'file' => ':attribute باید بزرگتر یا برابر :value کیلوبایت باشد.',
        'string' => ':attribute باید بزرگتر یا برابر :value کاراکتر باشد.',
        'array' => ':attribute باید :value یا بیشتر آیتم داشته باشد.',
    ],
    'hex_color' => ':attribute باید یک کد رنگ هگزادسیمال معتبر باشد.',
    'image' => ':attribute باید یک تصویر باشد.',
    'in' => ':attribute انتخاب شده، معتبر نیست.',
    'in_array' => ':attribute در :other وجود ندارد.',
    'integer' => ':attribute باید عدد صحیح باشد.',
    'ip' => ':attribute باید آدرس IP معتبر باشد.',
    'ipv4' => ':attribute باید آدرس IPv4 معتبر باشد.',
    'ipv6' => ':attribute باید آدرس IPv6 معتبر باشد.',
    'json' => ':attribute باید یک رشته JSON معتبر باشد.',
    'list' => ':attribute باید یک لیست باشد.',
    'lowercase' => ':attribute باید با حروف کوچک باشد.',
    'lt' => [
        'numeric' => ':attribute باید کوچکتر از :value باشد.',
        'file' => ':attribute باید کوچکتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید کوچکتر از :value کاراکتر باشد.',
        'array' => ':attribute باید کمتر از :value آیتم داشته باشد.',
    ],
    'lte' => [
        'numeric' => ':attribute باید کوچکتر یا برابر :value باشد.',
        'file' => ':attribute باید کوچکتر یا برابر :value کیلوبایت باشد.',
        'string' => ':attribute باید کوچکتر یا برابر :value کاراکتر باشد.',
        'array' => ':attribute باید کمتر از یا برابر :value آیتم داشته باشد.',
    ],
    'mac_address' => ':attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'file' => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        'array' => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
    ],
    'max_digits' => ':attribute نباید بیشتر از :max رقم داشته باشد.',
    'mimes' => ':attribute باید یکی از فرمت های :values باشد.',
    'mimetypes' => ':attribute باید یکی از فرمت های :values باشد.',
    'min' => [
        'numeric' => ':attribute نباید کوچکتر از :min باشد.',
        'file' => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string' => ':attribute نباید کمتر از :min کاراکتر باشد.',
        'array' => ':attribute نباید کمتر از :min آیتم داشته باشد.',
    ],
    'min_digits' => ':attribute باید حداقل :min رقم داشته باشد.',
    'missing' => ':attribute باید خالی باشد.',
    'missing_if' => ':attribute باید وقتی :other برابر :value است خالی باشد.',
    'missing_unless' => ':attribute باید خالی باشد مگر اینکه :other برابر :value باشد.',
    'missing_with' => ':attribute زمانی که :values موجود است باید خالی باشد.',
    'missing_with_all' => ':attribute زمانی که همه :values موجود باشند باید خالی باشد.',
    'multiple_of' => ':attribute باید مضربی از :value باشد.',
    'not_in' => ':attribute انتخاب شده، معتبر نیست.',
    'not_regex' => 'فرمت :attribute نامعتبر است.',
    'numeric' => ':attribute باید عدد باشد.',
    'password' => [
        'letters' => ':attribute باید حداقل شامل یک حرف باشد.',
        'mixed' => ':attribute باید حداقل شامل یک حرف بزرگ و یک حرف کوچک باشد.',
        'numbers' => ':attribute باید حداقل شامل یک عدد باشد.',
        'symbols' => ':attribute باید حداقل شامل یک نماد باشد.',
        'uncompromised' => ':attribute داده شده در نشت داده‌ها ظاهر شده است. لطفاً یک :attribute متفاوت انتخاب کنید.',
    ],
    'present' => ':attribute باید وجود داشته باشد.',
    'present_if' => ':attribute باید وقتی :other برابر :value است، وجود داشته باشد.',
    'present_unless' => ':attribute باید وجود داشته باشد مگر اینکه :other برابر :value باشد.',
    'present_with' => ':attribute باید وقتی :values وجود دارد، وجود داشته باشد.',
    'present_with_all' => ':attribute باید وقتی همه :values وجود دارند، وجود داشته باشد.',
    'prohibited' => ':attribute ممنوع است.',
    'prohibited_if' => ':attribute زمانی که :other برابر :value است ممنوع است.',
    'prohibited_if_accepted' => ':attribute زمانی که :other پذیرفته شده باشد، ممنوع است.',
    'prohibited_if_declined' => ':attribute زمانی که :other رد شده باشد، ممنوع است.',
    'prohibited_unless' => ':attribute ممنوع است مگر اینکه :other در :values موجود باشد.',
    'prohibits' => ':attribute اجازه حضور :other را نمی‌دهد.',
    'regex' => 'فرمت :attribute معتبر نیست.',
    'required' => ':attribute الزامی است.',
    'required_array_keys' => ':attribute باید شامل ورودی‌های زیر باشد: :values.',
    'required_if' => 'هنگامی که :other برابر با :value است، :attribute الزامی است.',
    'required_if_accepted' => ':attribute هنگامی که :other پذیرفته شده باشد، الزامی است.',
    'required_if_declined' => ':attribute هنگامی که :other رد شده باشد، الزامی است.',
    'required_unless' => ':attribute الزامی است مگر اینکه :other در :values موجود باشد.',
    'required_with' => 'در صورت وجود :values، :attribute الزامی است.',
    'required_with_all' => 'در صورت وجود :values، :attribute الزامی است.',
    'required_without' => 'در صورت عدم وجود :values، :attribute الزامی است.',
    'required_without_all' => 'در صورت عدم وجود هیچ یک از :values، :attribute الزامی است.',
    'same' => ':attribute و :other باید همانند هم باشند.',
    'size' => [
        'numeric' => ':attribute باید برابر با :size باشد.',
        'file' => ':attribute باید برابر با :size کیلوبایت باشد.',
        'string' => ':attribute باید برابر با :size کاراکتر باشد.',
        'array' => ':attribute باید شامل :size آیتم باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از موارد زیر شروع شود: :values.',
    'string' => ':attribute باید رشته باشد.',
    'timezone' => ':attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ':attribute قبلاً انتخاب شده است.',
    'uploaded' => 'آپلود :attribute با خطا مواجه شد.',
    'uppercase' => ':attribute باید با حروف بزرگ باشد.',
    'url' => 'فرمت :attribute معتبر نیست.',
    'ulid' => ':attribute باید یک ULID معتبر باشد.',
    'uuid' => ':attribute باید یک UUID معتبر باشد.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => require __DIR__.'/validation-attributes.php',

];
