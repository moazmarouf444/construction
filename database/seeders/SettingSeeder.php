<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $settings = [
        [
            'key'   => 'site_name',
            'value' => 'اعمار ',
        ],
        [
            'key'   => 'logo_header',
            'value' => 'logo_header.png',
        ],

        [
            'key'   => 'logo_footer',
            'value' => 'logo_footer.png',
        ],
        [
            'key'   => 'video',
            'value' => 'https://www.youtube.com/watch?v=oByy1E2wjys',
        ],


        [
            'key'   => 'about',
            'value' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.',
        ],
        [
            'key'   => 'condition',
            'value' => 'الشروط والاحكام',
        ],

        [
            'key'   => 'services',
            'value' => 'تقدم شركة عقاري خدمات استشارية متميزة تفوق توقعات عملائنا من خلال: اعتماد المنهجيات الهندسية المثلى والحلول ذات القيمة العالية والفعالة من حيث التكلفة بما يتوافق مع أحدث القوانين والمعايير الدولية والمحلية للتصميم.',
        ],  [
            'key'   => 'majors',
            'value' => 'لدى شركة عقاري  مهندسي تصميم من التخصصات الهندسة المعمارية والمدنية والكهربائيةوالميكانيكية .التصميم المعماري - التصميم والديكور الداخلي - الإشراف الهندسي'
        ],[
            'key'   => 'skills',
            'value' => 'تنشر عقاري  في مشاريعها فرق عمل لإدارة المشاريع مكونة من مهندسين محترفين في جميع التخصصات الهندسية ذوي الخبرة الذين يتمتعون بمهارة جيدة في القوانين واللوائح والإجراءات المحلية .'
        ],
        [
            'key'   => 'site_phone',
                'value' => '201222442506'
        ],
        [
            'key'   => 'email',
            'value' => 'real_estate@gmail.com',
        ],
        [
            'key'   => 'instagram',
            'value' => 'https://www.instagram.com/',
        ],
        [
            'key'   => 'facebook',
            'value' => 'https://www.facebook.com/',
        ],
        [
            'key'   => 'whatsapp',
            'value' => '201222442506',
        ],

        [
            'key'   => 'youtube',
            'value' => 'https://www.youtube.com/',
        ],
    ];

    public function run()
    {
        Setting::insert($this->settings);
    }

}
