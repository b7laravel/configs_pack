<?php

namespace B7\Configs\Http\Controllers;

use B7\Configs\Http\Resources\ConfigAuthCollection;
use B7\Configs\Http\Resources\ConfigErrorPageResource;
use B7\Configs\Http\Resources\ConfigVersionResource;
use B7\Configs\Models\ConfigAuth;
use B7\Configs\Models\ConfigErrorPage;
use B7\Configs\Models\ConfigPrivacyPolicy;
use B7\Configs\Models\ConfigVersion;

class ConfigController extends Controller
{
    public function getConfigAuth(): ConfigAuthCollection
    {
        $configs = ConfigAuth::query()->where('status', 'active')->orderBy('sort')->get();

        return new ConfigAuthCollection($configs);
    }

    public function getConfigPrivacyPolicy()
    {
        return ConfigPrivacyPolicy::find(1);
    }

    public function getConfigErrorPage(): ConfigErrorPageResource
    {
        return new ConfigErrorPageResource(ConfigErrorPage::find(1));
    }

    public function getConfigVersion(): ConfigVersionResource
    {
        return new ConfigVersionResource(ConfigVersion::find(1));
    }
}
