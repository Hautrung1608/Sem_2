INSERT INTO
    `categories` (
        `id`,
        `name`,
        `status`,
        `created_at`,
        `updated_at`,
        `deleted_at`
    )
VALUES ('', 'áo', '1', NULL, NULL, NULL), (
        '',
        'quần',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '',
        'giày',
        '1',
        NULL,
        NULL,
        NULL
    ), ('', 'dép', '0', NULL, NULL, NULL), (
        '',
        'kính',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '',
        'điện thoại',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '',
        'tai nghe',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '',
        'bông tai',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '',
        'nhẫn',
        '0',
        NULL,
        NULL,
        NULL
    );

INSERT INTO
    `products` (
        `id`,
        `name`,
        `cate_id`,
        `origin`,
        `quantity`,
        `price`,
        `image`,
        `status`,
        `created_at`,
        `updated_at`,
        `deleted_at`
    )
VALUES (
        NULL,
        'áo ba lỗ',
        '1',
        'Trung quốc',
        '12',
        '100000',
        'recycle-bin-icon-31.png',
        '1',
        NULL,
        NULL,
        NULL
    ), (
        NULL,
        'áo sơ mi',
        '1',
        'Nhật bản',
        '53',
        '120000',
        'recycle-bin-icon-31.png',
        '1',
        NULL,
        NULL,
        NULL
    ), (
        NULL,
        'quần kaki',
        '2',
        'Việt Nam',
        '120',
        '200000',
        'recycle-bin-icon-31.png',
        '1',
        NULL,
        NULL,
        NULL
    ), (
        NULL,
        'Kính chống nắng',
        '5',
        'Wakanda',
        '2',
        '100000000',
        'recycle-bin-icon-31.png',
        '1',
        NULL,
        NULL,
        NULL
    ), (
        NULL,
        'giày leo núi',
        '3',
        'Thụy Điển',
        '24',
        '1900000',
        'recycle-bin-icon-31.png',
        '1',
        NULL,
        NULL,
        NULL
    ), (
        NULL,
        'dép tổ ong',
        '4',
        'Việt Nam',
        '1200',
        '300000',
        'recycle-bin-icon-31.png',
        '1',
        NULL,
        NULL,
        NULL
    ), (
        NULL,
        'Nhẫn vàng 99999k',
        '9',
        'DuBai',
        '1',
        '900000000',
        'recycle-bin-icon-31.png',
        '1',
        NULL,
        NULL,
        NULL
    )