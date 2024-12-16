<?php

namespace app\controller;

use app\BaseController;
use Yansongda\Pay\Pay;

class Index extends BaseController
{
    public function index()
    {
        !defined('DS') && define('DS', DIRECTORY_SEPARATOR);
        !defined('ADDON_PATH') && define('ADDON_PATH', app()->getRootPath() . 'addons' . DS);
        $config = [
            'alipay' => [
                'default' => [
                    // 必填-支付宝分配的 app_id
                    'app_id'                  => '2017032306368806',
                    // 必填-应用私钥 字符串或路径
                    // 在 https://open.alipay.com/develop/manage 《应用详情->开发设置->接口加签方式》中设置
                    'app_secret_cert'         => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCpKj5D2BLscbVImz1lCVs3kFkO5UA0rHCWVcZyexGDe2O02gqH7dKMMAuuITckCjvCWvdC2SgmVxRimIqZbNryjxbL0Wdp3WIGkgIVui2ndxAZqCcEnIt9vsP4LLFl5CkgWEs6CvcjQsWLflfH9zCxV/YGRZXbXEzGGx+SRjO+GLgxFbBycliXFvq4IwnWF9sbgtiWD58QKLBXoe8ie+lvrKnm6wnhFb/bmRf4/9PemZYs86jPrS9/IMw1kCcXXofVpevbySNT6lqoJSgifPX0fyq6La5rGb1jnJnOxpVwOERXW5rzemNkzThkxMfbbT9jErAEdXs8oB+QxsfEpNlrAgMBAAECggEAFX2+Z1QeI1fW1iCSzjFAG3EFP3U0kPyPWSoQih7EfNXCNwm0aMx4AUNhWH/zx2pdaTWxUBbSmPxbJKOIiDFiJ4qyNLan0rVDbN5D0YrTngDsVLYeLuHMfu8ram4TI4S3DNrqw7b86sfi3PPyJv9qej1Yjjds8G9reYecnTK6BB5eP5xNHCgOX9HeMWMnQFKk61qfXiQNnU/n6i1PILPmhUB01d9NmpA33YkoVr6YRBAw/tcB/ZeuH4V77crCAPpZdejIXJqqeuYqrY4Y6xHHOV3//LSSxjq2sXEcPFKqogMH5IjdLR5G/UK1T3U2A2c/MeOWkdAsVkoBjQfRCf1M0QKBgQD1YevUdH9SEad+Tdlr9ooipU8If36FPevHHF6BUlEzInV84x3LhoEgzljNHR1LV+4boDGAmARfo1rdMyJt/yNEhbX4YySYP6oOIZaYvINugHfcjuqL/gmo1iD982le/7N9AAQkPaFG8at6OBHYt05r3Y3x8jGk/pe6NLLltvVKjwKBgQCwfBFsjPLi28QKPlbhObUJ4UcZjNZ5R5VdBbnTleZ6P3jpDcJvzJia8HDA7j4woXebS2PccC7BP1gfPj3DjokKHWG081p4lS83cRJT1g6c0WaEoY9HunAqzwqnb2oJGPYdgf7MT4nnRYMxiE8lPK3nmF+GQMsOzXzupOf5XZ4hZQKBgCrEHDP08dO92/E5ZDFa0IxlPzb98XELb7JOEXJ8hEZjNRLFCoZUNOEg1X06G8br1kXeT4JX/Dsm30k6BkAhfWYN378gmFoojlzUIckQ4d86aKl6BwrLBaf1Wd6os66o5gFdJVujmh4hNH+ikgmxOOu3u2t1iI13Cb6cPKmoj2ulAoGAFxz4jzXabXmIsCq/6BlNq3CUhjUataF5X0hrsNk16Ra8+BC0QT4TUl9g9PN+s5HB/1WdS3ZpuSdZnCXjouPc8LUuYatpUtd+6ozlcJNdMI6AFaivAh7Zp9GbvJfr1CsvuGeY/hsAnYhOCUOn0eGjiOw8vnFn5pVk4kA4nUD0f70CgYEAh5tSwH0ADQfhAZplbNHY3Tq15ZtTJK6Cz5Pynr6RKhYO7Xzzg+56RVkg+SkkJSeBQZ7h4el0l5ZqtUr33Ff17YAkAjHf6cqYONxK77vMtZUkrXLvGyKSJWMPXuXRQkBnr2ilEZ9KJ/HdvvWH0k+pHMpUKSONyi0tLxdpKsOma/w=',
                    // 必填-应用公钥证书 路径
                    // 设置应用私钥后，即可下载得到以下3个证书
                    'app_public_cert_path'    => ADDON_PATH . 'pay' . DS . 'certs' . DS . 'alipay' . DS . 'appPublicCert.crt',
                    // 必填-支付宝公钥证书 路径
                    'alipay_public_cert_path' => ADDON_PATH . 'pay' . DS . 'certs' . DS . 'alipay' . DS . 'alipayPublicCert.crt',
                    // 必填-支付宝根证书 路径
                    'alipay_root_cert_path'   => ADDON_PATH . 'pay' . DS . 'certs' . DS . 'alipay' . DS . 'alipayRootCert.crt',
                    'return_url'              => 'https://yansongda.cn/alipay/return',
                    'notify_url'              => 'https://yansongda.cn/alipay/notify',
                    // 选填-第三方应用授权token
                    'app_auth_token'          => '',
                    // 选填-服务商模式下的服务商 id，当 mode 为 Pay::MODE_SERVICE 时使用该参数
                    'service_provider_id'     => '',
                    // 选填-默认为正常模式。可选为： MODE_NORMAL, MODE_SANDBOX, MODE_SERVICE
                    'mode'                    => Pay::MODE_NORMAL,
                ],
            ],
            'logger' => [
                'enable' => false,
                'file'   => './logs/pay.log',
                'level'  => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
                'type' => 'single', // optional, 可选 daily.
                'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
            ],
            'http'   => [ // optional
                'timeout'         => 5.0,
                'connect_timeout' => 5.0,
                // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
            ],
        ];
        $pay    = Pay::alipay($config);
        $params = [
            'out_trade_no' => 123456789, //你的订单号
            'total_amount' => 0.01, //单位元
            'subject' => '测试支付',
        ];
        $result = $pay->scan($params);
        dump($result);
    }

}
