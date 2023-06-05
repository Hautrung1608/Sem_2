INSERT INTO
    `categories` (
        `id`,
        `name`,
        `status`,
        `created_at`,
        `updated_at`,
        `deleted_at`
    )
VALUES ('1', 'áo', '1', NULL, NULL, NULL), (
        '2',
        'quần',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '3',
        'giày',
        '1',
        NULL,
        NULL,
        NULL
    ), ('4', 'dép', '0', NULL, NULL, NULL), (
        '5',
        'kính',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '6',
        'điện thoại',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '7',
        'tai nghe',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '8',
        'bông tai',
        '0',
        NULL,
        NULL,
        NULL
    ), (
        '9',
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