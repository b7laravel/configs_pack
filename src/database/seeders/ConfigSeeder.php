<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('config_auth')->insert($this->getDataAuth());
        \DB::table('config_privacy_policy')->insert($this->getDataPrivacyPolicy());
        \DB::table('config_error_pages')->insert($this->getDataErrorPage());
        \DB::table('config_versions')->insert($this->getDataVersion());
    }

    public function getDataAuth(): array
    {
        $data[] = [
            'type' => 'call',
            'status' => 'active',
            'sort' => 100,
            'code_length' => 4,
            'title' => 'Проверочный код',
            'subtitle' => 'Введите четыре последних цифры номера, с которого поступил звонок',
            'other_code_timer_in_seconds' => 60,
            'code_send_title' => 'Отправить',
            'try_other_code_title' => 'звонок не поступил',
            'request_code_uri' => '/login/code/request/phone',
            'code_check_uri' => '/login/code/check/',
            ];
        $data[] = [
            'type' => 'sms',
            'status' => 'active',
            'sort' => 200,
            'code_length' => 4,
            'title' => 'Проверочный код',
            'subtitle' => 'Введите код из смс',
            'other_code_timer_in_seconds' => 60,
            'code_send_title' => 'Отправить',
            'try_other_code_title' => 'звонок не поступил',
            'request_code_uri' => '/login/code/request/phone',
            'code_check_uri' => '/login/code/check/',
        ];

        return $data;
    }

    public function getDataPrivacyPolicy(): array
    {
        $data[] = [
            'text' => '<div>Настоящая Политика конфиденциальности персональной информации (далее – Политика)
            действует в отношении всей информации, которую сотрудники и/или аффилированные лица могут
            получить о пользователе во время использования им Сайта (далее – Сайт).&nbsp;</div>',
        ];

        return $data;
    }

    public function getDataErrorPage(): array
    {
        $faker = Factory::create();

        $data[] = [
            'title' => 'Что-то пошло не так',
            'subtitle' => 'Мы хотим помочь вам как можно скорее',
            'undertitle' => 'Вы можете позвонить нам по телефону или написать в чат ',
            'image' => $faker->image(),
            'phone_text' => '8 800 500-15-62',
            'phone_uri' => 'Вам необходимо обновить приложение.',
            'chat_uri' => 'https://play.google.com/store/apps/details?id=com',
        ];

        return $data;
    }

    public function getDataVersion()
    {
        $data[] = [
            'block_app' => false,
            'android' => 1,
            'android_check' => true,
            'ios' => 1,
            'ios_check' => true,
            'message' => 'Вам необходимо обновить приложение.',
            'android_url' => 'https://play.google.com/store/apps/details?id=com',
            'ios_url' => 'https://apps.apple.com/ru/app/geohelp/id161478',
        ];

        return $data;
    }
}
