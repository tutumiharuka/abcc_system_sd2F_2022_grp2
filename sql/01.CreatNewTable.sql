CREATE TABLE `members` (
  `member_id`       INT(8)              NOT NULL AUTO_INCREMENT COMMENT '会員ID',
  `name`            VARCHAR(100)        NOT NULL                COMMENT '名前',
  `mail`            VARCHAR(50)  UNIQUE NOT NULL                COMMENT 'メールアドレス',
  `phone_number`    VARCHAR(45)         NOT NULL                COMMENT '電話番号',
  `date_of_birth`   DATE                NOT NULL                COMMENT '生年月日',
  `password`        VARCHAR(255)        NOT NULL                COMMENT 'パスワード',
  PRIMARY KEY (`member_id`)
);

CREATE TABLE `genres` (
  `genre_id`           CHAR(3)        NOT NULL     COMMENT 'ジャンルID',
  `genre_name`         VARCHAR(20)    NOT NULL     COMMENT 'ジャンル名',
  PRIMARY KEY (`genre_id`)
);

CREATE TABLE `shohins` (
  `shohin_id`           INT(8)         NOT NULL AUTO_INCREMENT    COMMENT '商品ID',
  `genre_id`            CHAR(3)        NOT NULL                   COMMENT 'ジャンルID',
  `shohin_name`         VARCHAR(100)   NOT NULL                   COMMENT '商品名',
  `price`               INT(10)        NOT NULL DEFAULT 0         COMMENT '価格',
  `capacity`            VARCHAR(10)    NOT NULL                   COMMENT '必要容量',
  `haishin_date`        DATE           NOT NULL                   COMMENT '配信日',
  `image_small`         VARCHAR(191)   NOT NULL                   COMMENT '画像小',
  `image_big`           VARCHAR(191)   NOT NULL                   COMMENT '画像大',
  `shohin_explanation`  VARCHAR(4000)  NOT NULL                   COMMENT '商品説明',
  PRIMARY KEY (`shohin_id`),
  FOREIGN KEY (`genre_id`) REFERENCES genres(`genre_id`)
);

CREATE TABLE `ranking` (
  `shohin_id`           INT(8)      NOT NULL     COMMENT '商品ID',
  `ranking_id`          INT(2)      NOT NULL     COMMENT 'ランキング',
  PRIMARY KEY (`shohin_id`),
  FOREIGN KEY (`shohin_id`) REFERENCES shohins(`shohin_id`)
);


CREATE TABLE `carts` (
  `cart_id`           INT(8)         NOT NULL   AUTO_INCREMENT      COMMENT 'カートID',
  `member_id`         INT(8)         NOT NULL                       COMMENT '会員ID',
  `shohin_id`         INT(8)         NOT NULL                       COMMENT '商品ID',
  `is_purchased`      CHAR(1)        NOT NULL DEFAULT 0             COMMENT '購入済',
  PRIMARY KEY (`cart_id`),
  FOREIGN KEY (`member_id`) REFERENCES members(`member_id`),
  FOREIGN KEY (`shohin_id`) REFERENCES shohins(`shohin_id`)
);

CREATE TABLE `favorites` (
  `favorite_id`           INT(8)         NOT NULL   AUTO_INCREMENT      COMMENT 'お気に入りID',
  `member_id`             INT(8)          NOT NULL         COMMENT '会員ID',
  `shohin_id`             INT(8)          NOT NULL         COMMENT '商品ID',
  PRIMARY KEY (`favorite_id`),
  FOREIGN KEY (`member_id`) REFERENCES members(`member_id`),
  FOREIGN KEY (`shohin_id`) REFERENCES shohins(`shohin_id`)
);

CREATE TABLE `histories` (
  `history_id`  INT(8)      NOT NULL AUTO_INCREMENT    COMMENT '履歴ID',
  `member_id`   INT(8)      NOT NULL                   COMMENT '会員ID',
  `shohin_id`   INT(8)      NOT NULL                   COMMENT '商品ID',
  `buying_date` DATE        NOT NULL                   COMMENT '購入日',
  PRIMARY KEY (`history_id`),
  FOREIGN KEY (`member_id`) REFERENCES members(`member_id`),
  FOREIGN KEY (`shohin_id`) REFERENCES shohins(`shohin_id`)
);

INSERT INTO genres(genre_id,genre_name) VALUES ('ACT','アクション');
INSERT INTO genres(genre_id,genre_name) VALUES ('ADV','アドベンチャー');
INSERT INTO genres(genre_id,genre_name) VALUES ('FIG','格闘');
INSERT INTO genres(genre_id,genre_name) VALUES ('FPS','シューティング');
INSERT INTO genres(genre_id,genre_name) VALUES ('MUS','音楽ゲーム');
INSERT INTO genres(genre_id,genre_name) VALUES ('PAR','パーティ');
INSERT INTO genres(genre_id,genre_name) VALUES ('PZL','パズル');
INSERT INTO genres(genre_id,genre_name) VALUES ('RCG','レース');
INSERT INTO genres(genre_id,genre_name) VALUES ('RPG','ロールプレイング');
INSERT INTO genres(genre_id,genre_name) VALUES ('SPO','スポーツ');
INSERT INTO genres(genre_id,genre_name) VALUES ('TBL','テーブルゲーム');