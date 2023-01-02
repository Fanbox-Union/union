<?php

class Config
{
    // Настроек от проекта в личном кабинете free-kassa.ru
    const MERCHANT_ID = '7777';
    const SECRET_KEY_1 = 'dgffvcf';
    const SECRET_KEY_2 = 'fbdccv';
    
    // Стоимость товара в руб.
    const ITEM_PRICE = 1;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = 'accounts';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'login';
    // Название поля из таблицы начисления товара которое будет увеличено на колличево оплаченого товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'money';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = 'localhost';
    // Имя пользователя
    const DB_USER = 'maloi2k';
    // Пароль
    const DB_PASS = 'password123';
    // Назывние базы
    const DB_NAME = 'db_ccd';
}