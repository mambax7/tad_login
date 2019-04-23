<?php
$all_oidc = [
    'edu_oidc' => [
        'tail' => 'edu',
        'provideruri' => 'https://oidc.tanet.edu.tw',
        'eduinfoep' => 'https://oidc.tanet.edu.tw/moeresource/api/v1/oidc/eduinfo',
        'scope' => ['openid', 'email', 'profile', 'openid2'],
        'gzipenable' => true,
    ],
    'moe_oidc' => [
        'tail' => 'moe',
        'provideruri' => 'https://moe.sso.edu.tw',
        'eduinfoep' => 'https://moe.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'kl_oidc' => [
        'tail' => 'kl',
        'provideruri' => 'https://kl.sso.edu.tw',
        'eduinfoep' => 'https://kl.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'tp_oidc' => [
        'tail' => 'tp',
        'provideruri' => 'https://tp.sso.edu.tw',
        'eduinfoep' => 'https://tp.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'ntpc_oidc' => [
        'tail' => 'ntpc',
        'provideruri' => 'https://ntpc.sso.edu.tw',
        'eduinfoep' => 'https://ntpc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'ty_oidc' => [
        'tail' => 'ty',
        'provideruri' => 'https://tyc.sso.edu.tw',
        'eduinfoep' => 'https://tyc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['openid', 'openid2', 'email', 'profile', 'eduinfo'],
        'gzipenable' => false,
    ],
    'hc_oidc' => [
        'tail' => 'hc',
        'provideruri' => 'https://hc.sso.edu.tw',
        'eduinfoep' => 'https://hc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'hcc_oidc' => [
        'tail' => 'hcc',
        'provideruri' => 'https://hcc.sso.edu.tw',
        'eduinfoep' => 'https://hcc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'mlc_oidc' => [
        'tail' => 'mlc',
        'provideruri' => 'https://mlc.sso.edu.tw',
        'eduinfoep' => 'https://mlc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'tc_oidc' => [
        'tail' => 'tc',
        'provideruri' => 'https://tc.sso.edu.tw',
        'eduinfoep' => 'https://tc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'chc_oidc' => [
        'tail' => 'chc',
        'provideruri' => 'https://chc.sso.edu.tw',
        'eduinfoep' => 'https://chc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'ntct_oidc' => [
        'tail' => 'ntct',
        'provideruri' => 'https://ntct.sso.edu.tw',
        'eduinfoep' => 'https://ntct.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'ylc_oidc' => [
        'tail' => 'ylc',
        'provideruri' => 'https://ylc.sso.edu.tw',
        'eduinfoep' => 'https://ylc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'cyc_oidc' => [
        'tail' => 'cyc',
        'provideruri' => 'https://cyc.sso.edu.tw',
        'eduinfoep' => 'https://cyc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'cy_oidc' => [
        'tail' => 'cy',
        'provideruri' => 'https://cy.sso.edu.tw',
        'eduinfoep' => 'https://cy.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'kh_oidc' => [
        'tail' => 'kh',
        'provideruri' => 'https://kh.sso.edu.tw',
        'eduinfoep' => 'https://kh.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'ptc_oidc' => [
        'tail' => 'ptc',
        'provideruri' => 'https://ptc.sso.edu.tw',
        'eduinfoep' => 'https://ptc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'ilc_oidc' => [
        'tail' => 'ilc',
        'provideruri' => 'https://ilc.sso.edu.tw',
        'eduinfoep' => 'https://ilc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'hlc_oidc' => [
        'tail' => 'hlc',
        'provideruri' => 'https://hlc.sso.edu.tw',
        'eduinfoep' => 'https://hlc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'ttct_oidc' => [
        'tail' => 'ttct',
        'provideruri' => 'https://ttct.sso.edu.tw',
        'eduinfoep' => 'https://ttct.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'phc_oidc' => [
        'tail' => 'phc',
        'provideruri' => 'https://phc.sso.edu.tw',
        'eduinfoep' => 'https://phc.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
    'mt_oidc' => [
        'tail' => 'mt',
        'provideruri' => 'https://matsu.sso.edu.tw',
        'eduinfoep' => 'https://matsu.sso.edu.tw/cncresource/api/v1/eduinfo',
        'scope' => ['educloudroles', 'openid', 'profile', 'eduinfo', 'openid2', 'email'],
        'gzipenable' => false,
    ],
];
$oidc_array = array_keys($all_oidc);
$all_oidc2 = [
    'tp_ldap' => [
        'tail' => 'tp',
    ],
];
$oidc_array2 = array_keys($all_oidc2);
